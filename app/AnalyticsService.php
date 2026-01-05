<?php

declare(strict_types=1);

class AnalyticsService
{
    public static function realtimeUsers(string $propertyId, string $credentialsPath): ?int
    {
        if ($propertyId === '' || !file_exists($credentialsPath)) {
            return null;
        }

        $creds = json_decode((string)file_get_contents($credentialsPath), true);
        if (empty($creds['client_email']) || empty($creds['private_key'])) {
            return null;
        }

        $token = self::fetchAccessToken($creds['client_email'], $creds['private_key']);
        if (!$token) {
            return null;
        }

        $url = sprintf('https://analyticsdata.googleapis.com/v1beta/properties/%s:runRealtimeReport', $propertyId);
        $payload = json_encode([
            'metrics' => [
                ['name' => 'activeUsers'],
            ],
        ]);

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json',
            ],
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $payload,
        ]);
        $response = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status !== 200 || !$response) {
            return null;
        }

        $data = json_decode($response, true);
        if (!empty($data['rows'][0]['metricValues'][0]['value'])) {
            return (int)$data['rows'][0]['metricValues'][0]['value'];
        }

        return 0;
    }

    private static function fetchAccessToken(string $clientEmail, string $privateKey): ?string
    {
        $now = time();
        $header = self::base64Url(json_encode(['alg' => 'RS256', 'typ' => 'JWT']));
        $payload = self::base64Url(json_encode([
            'iss' => $clientEmail,
            'scope' => 'https://www.googleapis.com/auth/analytics.readonly',
            'aud' => 'https://oauth2.googleapis.com/token',
            'iat' => $now,
            'exp' => $now + 3600,
        ]));

        $signatureInput = $header . '.' . $payload;
        $signature = '';
        openssl_sign($signatureInput, $signature, $privateKey, 'sha256');
        $jwt = $signatureInput . '.' . self::base64Url($signature);

        $ch = curl_init('https://oauth2.googleapis.com/token');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query([
                'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
                'assertion' => $jwt,
            ]),
        ]);
        $response = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($status !== 200 || !$response) {
            return null;
        }

        $data = json_decode($response, true);
        return $data['access_token'] ?? null;
    }

    private static function base64Url(string $value): string
    {
        return rtrim(strtr(base64_encode($value), '+/', '-_'), '=');
    }
}
