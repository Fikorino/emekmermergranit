</main>
    </div>
</div>
<script>
const storedTheme = localStorage.getItem('theme') || 'light';\nif (storedTheme) {\n    document.documentElement.setAttribute('data-theme', storedTheme);\n    document.body.setAttribute('data-theme', storedTheme);\n}\n\ndocument.querySelectorAll('[data-theme-toggle]').forEach((btn) => {\n    btn.addEventListener('click', () => {\n        const current = document.documentElement.getAttribute('data-theme') === 'light' ? 'dark' : 'light';\n        document.documentElement.setAttribute('data-theme', current);\n        document.body.setAttribute('data-theme', current);\n        localStorage.setItem('theme', current);\n    });\n});\n</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
