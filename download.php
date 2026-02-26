<!DOCTYPE html>
<html lang="en">
<head>
    <script>
    (function() {
        var s = localStorage.getItem('theme');
        if (s === 'light' || (!s && window.matchMedia('(prefers-color-scheme: light)').matches)) {
            document.documentElement.classList.add('light');
        }
    })();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download — Repo Chat for Visual Studio 2019, 2022 &amp; 2026</title>
    <meta name="description" content="Download Repo Chat for the full Visual Studio (not VS Code). Choose your version — VS 2019, 2022, or 2026. Free, no analytics, no tracking. Enterprise ready.">
    <meta name="color-scheme" content="light dark">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* ── Brand colors (constant) ── */
        :root {
            --purple-300: #d8b4fe;
            --purple-400: #c084fc;
            --purple-500: #a855f7;
            --purple-600: #9333ea;
            --purple-700: #7e22ce;
            --blue-600: #2563eb;
        }

        /* ── Dark theme (default) ── */
        :root {
            --bg: #020617;
            --bg-card: rgba(15, 23, 42, 0.5);
            --bg-nav: rgba(2, 6, 23, 0.7);
            --bg-btn-secondary: rgba(148, 163, 184, 0.08);
            --bg-btn-secondary-hover: rgba(148, 163, 184, 0.14);
            --bg-icon-subtle: rgba(148, 163, 184, 0.05);
            --bg-step-num: rgba(148, 163, 184, 0.08);
            --bg-info-icon: rgba(147, 51, 234, 0.1);
            --bg-code: rgba(148, 163, 184, 0.08);
            --text-heading: #ffffff;
            --text-body: #e2e8f0;
            --text-muted: #94a3b8;
            --text-faint: #64748b;
            --text-dimmed: #475569;
            --text-link-hover: #ffffff;
            --text-label: #c084fc;
            --text-code: #d8b4fe;
            --border: rgba(148, 163, 184, 0.06);
            --border-card: rgba(148, 163, 184, 0.08);
            --border-card-hover: rgba(147, 51, 234, 0.25);
            --border-btn-secondary: rgba(148, 163, 184, 0.1);
            --border-icon: rgba(148, 163, 184, 0.06);
            --border-step: rgba(148, 163, 184, 0.1);
            --shadow-btn: 0 0 24px rgba(147, 51, 234, 0.15);
            --shadow-btn-hover: 0 0 32px rgba(147, 51, 234, 0.3);
            --glow-purple: rgba(147, 51, 234, 0.08);
            --glow-blue: rgba(59, 130, 246, 0.06);
            --logo-text: #ffffff;
        }

        /* ── Light theme ── */
        :root.light {
                --bg: #f8fafc;
                --bg-card: rgba(255, 255, 255, 0.7);
                --bg-nav: rgba(248, 250, 252, 0.8);
                --bg-btn-secondary: rgba(100, 116, 139, 0.08);
                --bg-btn-secondary-hover: rgba(100, 116, 139, 0.14);
                --bg-icon-subtle: rgba(100, 116, 139, 0.06);
                --bg-step-num: rgba(100, 116, 139, 0.08);
                --bg-info-icon: rgba(147, 51, 234, 0.08);
                --bg-code: rgba(100, 116, 139, 0.08);
                --text-heading: #0f172a;
                --text-body: #334155;
                --text-muted: #64748b;
                --text-faint: #94a3b8;
                --text-dimmed: #94a3b8;
                --text-link-hover: #0f172a;
                --text-label: #9333ea;
                --text-code: #7e22ce;
                --border: rgba(100, 116, 139, 0.1);
                --border-card: rgba(100, 116, 139, 0.1);
                --border-card-hover: rgba(147, 51, 234, 0.3);
                --border-btn-secondary: rgba(100, 116, 139, 0.15);
                --border-icon: rgba(100, 116, 139, 0.08);
                --border-step: rgba(100, 116, 139, 0.12);
                --shadow-btn: 0 0 24px rgba(147, 51, 234, 0.1);
                --shadow-btn-hover: 0 0 32px rgba(147, 51, 234, 0.18);
                --glow-purple: rgba(147, 51, 234, 0.04);
                --glow-blue: rgba(59, 130, 246, 0.03);
                --logo-text: #0f172a;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg);
            color: var(--text-body);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ── Ambient background ── */
        .bg-glow {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            pointer-events: none; z-index: 0; overflow: hidden;
        }
        .bg-glow::before {
            content: '';
            position: absolute;
            top: -40%; left: -20%; width: 80%; height: 80%;
            background: radial-gradient(ellipse, var(--glow-purple) 0%, transparent 70%);
            animation: drift 20s ease-in-out infinite;
        }
        .bg-glow::after {
            content: '';
            position: absolute;
            bottom: -30%; right: -20%; width: 70%; height: 70%;
            background: radial-gradient(ellipse, var(--glow-blue) 0%, transparent 70%);
            animation: drift 25s ease-in-out infinite reverse;
        }
        @keyframes drift {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(60px, 30px); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 1;
        }

        /* ── Navigation ── */
        nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 100;
            padding: 16px 0;
            background: var(--bg-nav);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
        }
        nav .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--logo-text);
            font-weight: 700;
            font-size: 1.25rem;
        }
        .logo-icon {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
            list-style: none;
        }
        .nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.2s;
        }
        .nav-links a:hover { color: var(--text-link-hover); }

        /* ── Page Header ── */
        .page-header {
            padding: 150px 0 60px;
            text-align: center;
        }
        .page-header h1 {
            font-size: clamp(2rem, 4.5vw, 3rem);
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.03em;
            margin-bottom: 16px;
        }
        .page-header p {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 560px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* ── Download chooser ── */
        .chooser {
            padding: 0 0 120px;
        }
        .download-card {
            max-width: 520px;
            margin: 0 auto;
            border-radius: 24px;
            background: var(--bg-card);
            border: 1px solid var(--border-card);
            padding: 48px 40px;
            text-align: center;
        }
        .download-card-icon {
            width: 64px; height: 64px;
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 28px;
            background: var(--bg-icon-subtle);
            border: 1px solid var(--border-icon);
        }
        .download-card-icon svg {
            opacity: 0.9;
        }
        .download-label {
            display: block;
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--text-faint);
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }
        .version-select {
            width: 100%;
            padding: 14px 20px;
            border-radius: 12px;
            border: 1px solid var(--border-btn-secondary);
            background: var(--bg-btn-secondary);
            color: var(--text-heading);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%2394a3b8' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 16px;
            transition: border-color 0.2s;
            margin-bottom: 8px;
        }
        .version-select:focus {
            outline: none;
            border-color: var(--purple-500);
        }
        .version-select option {
            background: var(--bg);
            color: var(--text-heading);
        }
        .version-detail {
            font-size: 0.78rem;
            color: var(--text-faint);
            font-family: 'JetBrains Mono', monospace;
            margin-bottom: 28px;
            min-height: 1.3em;
        }
        .btn-download {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 16px 24px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.05rem;
            text-decoration: none;
            transition: opacity 0.2s, transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            border: none;
            font-family: inherit;
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            color: white;
            box-shadow: var(--shadow-btn);
        }
        .btn-download:hover {
            opacity: 0.92;
            transform: translateY(-2px);
            box-shadow: var(--shadow-btn-hover);
        }
        .file-name {
            margin-top: 14px;
            font-size: 0.75rem;
            color: var(--text-dimmed);
            font-family: 'JetBrains Mono', monospace;
        }

        /* ── Install instructions ── */
        .install-info {
            max-width: 720px;
            margin: 0 auto;
            padding: 0 0 120px;
        }
        .install-card {
            border-radius: 20px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            overflow: hidden;
        }
        .install-card-header {
            padding: 24px 32px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .install-card-header .icon {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: var(--bg-info-icon);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .install-card-header h3 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--text-heading);
        }
        .install-steps {
            padding: 28px 32px;
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .install-steps li {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }
        .install-step-num {
            flex-shrink: 0;
            width: 28px; height: 28px;
            border-radius: 50%;
            background: var(--bg-step-num);
            border: 1px solid var(--border-step);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.78rem;
            font-weight: 700;
            color: var(--text-muted);
            margin-top: 1px;
        }
        .install-step-text {
            font-size: 0.92rem;
            color: var(--text-body);
            line-height: 1.6;
        }
        .install-step-text code {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 6px;
            background: var(--bg-code);
            border: 1px solid var(--bg-code);
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.82rem;
            color: var(--text-code);
        }

        /* ── Footer ── */
        footer {
            margin-top: auto;
            padding: 48px 0;
            border-top: 1px solid var(--border);
        }
        footer .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .footer-left {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.85rem;
            color: var(--text-faint);
        }
        .footer-links {
            display: flex;
            gap: 24px;
            list-style: none;
        }
        .footer-links a {
            color: var(--text-faint);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.2s;
        }
        .footer-links a:hover { color: var(--text-body); }

        /* ── Theme toggle ── */
        .theme-toggle {
            position: fixed;
            top: 18px;
            right: 24px;
            z-index: 200;
            width: 40px;
            height: 40px;
            border: 1px solid var(--border-btn-secondary);
            border-radius: 10px;
            background: var(--bg-btn-secondary);
            backdrop-filter: blur(12px);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            transition: background 0.2s, color 0.2s, transform 0.2s;
            padding: 0;
        }
        .theme-toggle:hover {
            background: var(--bg-btn-secondary-hover);
            color: var(--text-heading);
            transform: scale(1.08);
        }
        .theme-toggle svg {
            width: 20px;
            height: 20px;
            transition: opacity 0.2s;
        }
        .theme-toggle .icon-light { display: none; }
        .theme-toggle .icon-dark { display: block; }
        :root.light .theme-toggle .icon-light { display: block; }
        :root.light .theme-toggle .icon-dark { display: none; }

        /* ── Responsive ── */
        @media (max-width: 800px) {
            .nav-links { display: none; }
        }
        @media (max-width: 600px) {
            .page-header { padding: 130px 0 48px; }
            .download-card { padding: 36px 24px; }
            .install-card-header,
            .install-steps { padding-left: 20px; padding-right: 20px; }
            footer .container {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }
        }

        /* ── Animations ── */
        .fade-in {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

<div class="bg-glow"></div>

<!-- Theme toggle -->
<button class="theme-toggle" id="theme-toggle" aria-label="Toggle light/dark mode" title="Toggle light/dark mode">
    <svg class="icon-dark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9 18h6"/><path d="M10 22h4"/>
        <path d="M12 2a7 7 0 0 0-4 12.7V17h8v-2.3A7 7 0 0 0 12 2z"/>
    </svg>
    <svg class="icon-light" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9 18h6" fill="none" stroke-width="2"/><path d="M10 22h4" fill="none" stroke-width="2"/>
        <path d="M12 2a7 7 0 0 0-4 12.7V17h8v-2.3A7 7 0 0 0 12 2z"/>
    </svg>
</button>

<!-- Navigation -->
<nav>
    <div class="container">
        <a href="/" class="logo">
            <div class="logo-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
            </div>
            Repo Chat
        </a>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/#features">Features</a></li>
            <li><a href="/#how-it-works">How It Works</a></li>
        </ul>
    </div>
</nav>

<!-- Header -->
<section class="page-header">
    <div class="container fade-in">
        <h1>Download Repo Chat</h1>
        <p>For the full Visual Studio — not VS Code. Choose the version that matches your installation. Free, with zero analytics and zero tracking.</p>
    </div>
</section>

<!-- Download Chooser -->
<section class="chooser">
    <div class="container">
        <div class="download-card fade-in">
            <div class="download-card-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--purple-400)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"/><line x1="12" y1="22" x2="12" y2="15.5"/><polyline points="22 8.5 12 15.5 2 8.5"/></svg>
            </div>

            <label class="download-label" for="vs-version">Select your Visual Studio version</label>
            <select class="version-select" id="vs-version">
                <option value="2022" data-file="RepoChatVS2022.vsix" data-detail="Target 17.x &middot; .NET / 64-bit">Visual Studio 2022</option>
                <option value="2026" data-file="RepoChatVS2026.vsix" data-detail="Target 18.x &middot; .NET / 64-bit">Visual Studio 2026</option>
                <option value="2019" data-file="RepoChatVS2019.vsix" data-detail="Target 16.x &middot; .NET Framework">Visual Studio 2019</option>
            </select>
            <div class="version-detail" id="version-detail">Target 17.x &middot; .NET / 64-bit</div>

            <a href="/downloads/RepoChatVS2022.vsix" class="btn-download" id="download-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                Download .vsix
            </a>
            <div class="file-name" id="file-name">RepoChatVS2022.vsix</div>
        </div>
    </div>
</section>

<!-- Installation Instructions -->
<section class="install-info">
    <div class="install-card fade-in">
        <div class="install-card-header">
            <div class="icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-400)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            </div>
            <h3>How to install a .vsix extension</h3>
        </div>
        <ol class="install-steps">
            <li>
                <span class="install-step-num">1</span>
                <span class="install-step-text">Download the <strong>.vsix</strong> file matching your Visual Studio version above.</span>
            </li>
            <li>
                <span class="install-step-num">2</span>
                <span class="install-step-text"><strong>Double-click</strong> the downloaded file. The VSIX Installer will launch and guide you through the installation.</span>
            </li>
            <li>
                <span class="install-step-num">3</span>
                <span class="install-step-text">Alternatively, open Visual Studio and go to <code>Extensions &rarr; Manage Extensions</code>, then drag the .vsix file onto the window.</span>
            </li>
            <li>
                <span class="install-step-num">4</span>
                <span class="install-step-text"><strong>Restart Visual Studio</strong> when prompted. Open the Repo Chat panel via <code>View &rarr; Other Windows &rarr; Repo Chat</code>.</span>
            </li>
        </ol>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-left">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            &copy; <?php echo date('Y'); ?> Repo Chat
        </div>
        <ul class="footer-links">
            <li><a href="/">Home</a></li>
            <li><a href="mailto:support@repo.chat">Contact</a></li>
        </ul>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.08 });
    document.querySelectorAll('.fade-in').forEach(function (el) { observer.observe(el); });

    // Theme toggle
    document.getElementById('theme-toggle').addEventListener('click', function () {
        var isLight = document.documentElement.classList.toggle('light');
        localStorage.setItem('theme', isLight ? 'light' : 'dark');
    });

    // Version chooser
    var select = document.getElementById('vs-version');
    var btn = document.getElementById('download-btn');
    var detail = document.getElementById('version-detail');
    var fileName = document.getElementById('file-name');

    select.addEventListener('change', function () {
        var opt = select.options[select.selectedIndex];
        var file = opt.getAttribute('data-file');
        btn.href = '/downloads/' + file;
        detail.textContent = opt.getAttribute('data-detail');
        fileName.textContent = file;
    });
});
</script>

</body>
</html>
