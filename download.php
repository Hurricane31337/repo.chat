<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download — Repo Chat</title>
    <meta name="description" content="Download Repo Chat for Visual Studio 2019, 2022, or 2026. Choose your version and install the .vsix extension directly.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --purple-100: #f3e8ff;
            --purple-200: #e9d5ff;
            --purple-300: #d8b4fe;
            --purple-400: #c084fc;
            --purple-500: #a855f7;
            --purple-600: #9333ea;
            --purple-700: #7e22ce;
            --purple-800: #6b21a8;
            --blue-400: #60a5fa;
            --blue-500: #3b82f6;
            --blue-600: #2563eb;
            --cyan-400: #22d3ee;
            --slate-200: #e2e8f0;
            --slate-300: #cbd5e1;
            --slate-400: #94a3b8;
            --slate-500: #64748b;
            --slate-600: #475569;
            --slate-700: #334155;
            --slate-800: #1e293b;
            --slate-900: #0f172a;
            --slate-950: #020617;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--slate-950);
            color: var(--slate-200);
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
            background: radial-gradient(ellipse, rgba(147,51,234,0.08) 0%, transparent 70%);
            animation: drift 20s ease-in-out infinite;
        }
        .bg-glow::after {
            content: '';
            position: absolute;
            bottom: -30%; right: -20%; width: 70%; height: 70%;
            background: radial-gradient(ellipse, rgba(59,130,246,0.06) 0%, transparent 70%);
            animation: drift 25s ease-in-out infinite reverse;
        }
        @keyframes drift {
            0%, 100% { transform: translate(0,0); }
            50% { transform: translate(60px,30px); }
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
            background: rgba(2,6,23,0.7);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(148,163,184,0.06);
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
            color: white;
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
            color: var(--slate-400);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.2s;
        }
        .nav-links a:hover { color: white; }

        /* ── Page Header ── */
        .page-header {
            padding: 150px 0 60px;
            text-align: center;
        }
        .page-header h1 {
            font-size: clamp(2rem, 4.5vw, 3rem);
            font-weight: 800;
            color: white;
            letter-spacing: -0.03em;
            margin-bottom: 16px;
        }
        .page-header p {
            font-size: 1.1rem;
            color: var(--slate-400);
            max-width: 560px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* ── Version Chooser ── */
        .chooser {
            padding: 0 0 120px;
        }
        .version-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            max-width: 960px;
            margin: 0 auto;
        }
        .version-card {
            position: relative;
            border-radius: 20px;
            background: rgba(15,23,42,0.5);
            border: 1px solid rgba(148,163,184,0.08);
            padding: 40px 32px 36px;
            text-align: center;
            transition: border-color 0.3s, transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .version-card:hover {
            border-color: rgba(147,51,234,0.25);
            transform: translateY(-6px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.3), 0 0 40px rgba(147,51,234,0.06);
        }
        .version-card.featured {
            border-color: rgba(147,51,234,0.3);
            background: linear-gradient(180deg, rgba(147,51,234,0.06) 0%, rgba(15,23,42,0.5) 50%);
        }
        .version-badge {
            position: absolute;
            top: -12px;
            display: inline-flex;
            padding: 4px 14px;
            border-radius: 100px;
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: white;
        }
        .version-icon {
            width: 64px; height: 64px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            background: rgba(148,163,184,0.05);
            border: 1px solid rgba(148,163,184,0.06);
        }
        .version-icon svg {
            opacity: 0.9;
        }
        .version-card h2 {
            font-size: 1.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 4px;
        }
        .version-card .vs-year {
            font-size: 0.85rem;
            color: var(--slate-500);
            margin-bottom: 20px;
            font-weight: 500;
        }
        .version-card .version-meta {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 100%;
            margin-bottom: 28px;
        }
        .version-meta-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.82rem;
            padding: 0 4px;
        }
        .version-meta-row .label {
            color: var(--slate-500);
        }
        .version-meta-row .value {
            color: var(--slate-300);
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.78rem;
        }
        .version-divider {
            width: 100%;
            height: 1px;
            background: rgba(148,163,184,0.06);
            margin-bottom: 28px;
        }
        .btn-download {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 14px 24px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: opacity 0.2s, transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            border: none;
            font-family: inherit;
        }
        .btn-download.primary {
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            color: white;
            box-shadow: 0 0 24px rgba(147,51,234,0.15);
        }
        .btn-download.primary:hover {
            opacity: 0.92;
            transform: translateY(-2px);
            box-shadow: 0 0 32px rgba(147,51,234,0.3);
        }
        .btn-download.secondary {
            background: rgba(148,163,184,0.08);
            border: 1px solid rgba(148,163,184,0.1);
            color: var(--slate-300);
        }
        .btn-download.secondary:hover {
            background: rgba(148,163,184,0.14);
            transform: translateY(-2px);
        }
        .file-name {
            margin-top: 12px;
            font-size: 0.75rem;
            color: var(--slate-600);
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
            background: rgba(15,23,42,0.5);
            border: 1px solid rgba(148,163,184,0.06);
            overflow: hidden;
        }
        .install-card-header {
            padding: 24px 32px;
            border-bottom: 1px solid rgba(148,163,184,0.06);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .install-card-header .icon {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: rgba(147,51,234,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .install-card-header h3 {
            font-size: 1.05rem;
            font-weight: 700;
            color: white;
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
            background: rgba(148,163,184,0.08);
            border: 1px solid rgba(148,163,184,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.78rem;
            font-weight: 700;
            color: var(--slate-400);
            margin-top: 1px;
        }
        .install-step-text {
            font-size: 0.92rem;
            color: var(--slate-300);
            line-height: 1.6;
        }
        .install-step-text code {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 6px;
            background: rgba(148,163,184,0.08);
            border: 1px solid rgba(148,163,184,0.08);
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.82rem;
            color: var(--purple-300);
        }

        /* ── Footer ── */
        footer {
            margin-top: auto;
            padding: 48px 0;
            border-top: 1px solid rgba(148,163,184,0.06);
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
            color: var(--slate-500);
        }
        .footer-links {
            display: flex;
            gap: 24px;
            list-style: none;
        }
        .footer-links a {
            color: var(--slate-500);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.2s;
        }
        .footer-links a:hover { color: var(--slate-300); }

        /* ── Responsive ── */
        @media (max-width: 800px) {
            .version-grid {
                grid-template-columns: 1fr;
                max-width: 380px;
            }
            .version-card.featured { order: -1; }
            .nav-links { display: none; }
        }
        @media (max-width: 600px) {
            .page-header { padding: 130px 0 48px; }
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
        <p>Choose the version that matches your Visual Studio installation. Each .vsix is built specifically for its target IDE.</p>
    </div>
</section>

<!-- Version Chooser -->
<section class="chooser">
    <div class="container">
        <div class="version-grid">

            <!-- VS 2019 -->
            <div class="version-card fade-in">
                <div class="version-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--purple-400)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"/><line x1="12" y1="22" x2="12" y2="15.5"/><polyline points="22 8.5 12 15.5 2 8.5"/></svg>
                </div>
                <h2>VS 2019</h2>
                <p class="vs-year">Visual Studio 2019</p>
                <div class="version-meta">
                    <div class="version-meta-row">
                        <span class="label">Target</span>
                        <span class="value">16.x</span>
                    </div>
                    <div class="version-meta-row">
                        <span class="label">Framework</span>
                        <span class="value">.NET Framework</span>
                    </div>
                </div>
                <div class="version-divider"></div>
                <a href="/downloads/RepoChatVS2019.vsix" class="btn-download secondary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download .vsix
                </a>
                <div class="file-name">RepoChatVS2019.vsix</div>
            </div>

            <!-- VS 2022 (Featured) -->
            <div class="version-card featured fade-in">
                <div class="version-badge">Most Popular</div>
                <div class="version-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--purple-400)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"/><line x1="12" y1="22" x2="12" y2="15.5"/><polyline points="22 8.5 12 15.5 2 8.5"/><line x1="2" y1="8.5" x2="22" y2="8.5"/></svg>
                </div>
                <h2>VS 2022</h2>
                <p class="vs-year">Visual Studio 2022</p>
                <div class="version-meta">
                    <div class="version-meta-row">
                        <span class="label">Target</span>
                        <span class="value">17.x</span>
                    </div>
                    <div class="version-meta-row">
                        <span class="label">Framework</span>
                        <span class="value">.NET / 64-bit</span>
                    </div>
                </div>
                <div class="version-divider"></div>
                <a href="/downloads/RepoChatVS2022.vsix" class="btn-download primary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download .vsix
                </a>
                <div class="file-name">RepoChatVS2022.vsix</div>
            </div>

            <!-- VS 2026 -->
            <div class="version-card fade-in">
                <div class="version-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--purple-400)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"/><line x1="12" y1="22" x2="12" y2="15.5"/><polyline points="22 8.5 12 15.5 2 8.5"/><line x1="2" y1="8.5" x2="22" y2="8.5"/><line x1="12" y1="2" x2="12" y2="8.5"/></svg>
                </div>
                <h2>VS 2026</h2>
                <p class="vs-year">Visual Studio 2026</p>
                <div class="version-meta">
                    <div class="version-meta-row">
                        <span class="label">Target</span>
                        <span class="value">18.x</span>
                    </div>
                    <div class="version-meta-row">
                        <span class="label">Framework</span>
                        <span class="value">.NET / 64-bit</span>
                    </div>
                </div>
                <div class="version-divider"></div>
                <a href="/downloads/RepoChatVS2026.vsix" class="btn-download secondary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download .vsix
                </a>
                <div class="file-name">RepoChatVS2026.vsix</div>
            </div>

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
});
</script>

</body>
</html>
