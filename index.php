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
    <title>Repo Chat — AI Assisted Coding for Visual Studio 2019, 2022 &amp; 2026</title>
    <meta name="description" content="Repo Chat is a free extension for the full Visual Studio (not VS Code) that brings AI assisted coding directly into your IDE. Zero analytics, zero tracking — enterprise ready.">
    <meta name="keywords" content="Visual Studio 2019, Visual Studio 2022, Visual Studio 2026, extension, AI, AI assisted coding, repository, chat, WinForms, WPF, enterprise, no tracking">
    <meta property="og:title" content="Repo Chat — AI Assisted Coding for Visual Studio 2019, 2022 &amp; 2026">
    <meta property="og:description" content="The only AI coding assistant built for the full Visual Studio (not VS Code). No analytics, no tracking — 100% enterprise ready. Free.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://repo.chat">
    <meta name="color-scheme" content="light dark">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <style>
        html { scroll-behavior: smooth; }

        /* ── Hero ── */
        .hero {
            padding: 160px 0 100px;
            text-align: center;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px 6px 8px;
            border-radius: 100px;
            background: var(--bg-badge);
            border: 1px solid var(--border-badge);
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--text-badge);
            margin-bottom: 32px;
        }
        .hero-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--purple-500);
            animation: pulse-dot 2s ease-in-out infinite;
        }
        @keyframes pulse-dot {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }
        .hero h1 {
            font-size: clamp(2.8rem, 6vw, 4.5rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -0.03em;
            color: var(--text-heading);
            margin-bottom: 24px;
        }
        .hero h1 .gradient-text {
            background: linear-gradient(135deg, var(--gradient-text-from), var(--gradient-text-to));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero h1 .not-vscode {
            display: block;
            font-size: clamp(1rem, 2.2vw, 1.35rem);
            font-weight: 600;
            letter-spacing: 0;
            line-height: 1.4;
            margin-top: 16px;
            color: var(--text-label);
        }
        .hero-sub {
            font-size: 1.2rem;
            color: var(--text-muted);
            max-width: 640px;
            margin: 0 auto 48px;
            line-height: 1.7;
        }
        .hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 32px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            color: white;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: opacity 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: var(--shadow-btn);
        }
        .btn-primary:hover {
            opacity: 0.92;
            transform: translateY(-2px);
            box-shadow: var(--shadow-btn-hover);
        }
        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 32px;
            border-radius: 12px;
            background: var(--bg-btn-secondary);
            border: 1px solid var(--border-btn-secondary);
            color: var(--text-body);
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s;
        }
        .btn-secondary:hover {
            background: var(--bg-btn-secondary-hover);
            transform: translateY(-2px);
        }
        .vs-versions {
            margin-top: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            font-size: 1rem;
            color: var(--text-muted);
            font-weight: 500;
        }
        .vs-versions span {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .vs-versions svg {
            flex-shrink: 0;
            width: 18px;
            height: 18px;
            stroke: #22c55e;
        }

        /* ── Hero Screenshot ── */
        .hero-screenshot {
            margin-top: 72px;
            position: relative;
        }
        .hero-screenshot .screenshot-frame {
            max-width: 1000px;
            margin: 0 auto;
            border-radius: 16px;
            border: 1px solid var(--border-screenshot);
            background: var(--bg-screenshot);
            overflow: hidden;
            box-shadow: var(--shadow-screenshot);
        }
        .screenshot-titlebar {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 16px;
            background: var(--bg-titlebar);
            border-bottom: 1px solid var(--border);
        }
        .screenshot-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--bg-dot);
        }
        .screenshot-titlebar span {
            margin-left: 8px;
            font-size: 0.78rem;
            color: var(--text-faint);
            font-family: 'JetBrains Mono', monospace;
        }
        .screenshot-body {
            position: relative;
            min-height: 420px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-dimmed);
            font-size: 0.9rem;
        }
        .screenshot-body img {
            width: 100%;
            height: auto;
            display: block;
        }
        .screenshot-placeholder {
            padding: 80px 40px;
            text-align: center;
        }
        .screenshot-placeholder .placeholder-icon {
            font-size: 3rem;
            margin-bottom: 16px;
            opacity: 0.3;
        }

        /* ── Trust strip ── */
        .trust-strip {
            padding: 0 0 40px;
        }
        .trust-items {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }
        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--text-muted);
        }
        .trust-item .trust-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .trust-icon.purple { background: var(--bg-icon-purple); }
        .trust-icon.green { background: var(--bg-icon-green); }
        .trust-icon.blue { background: var(--bg-icon-blue); }

        /* ── Nav CTA ── */
        .nav-cta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 20px;
            border-radius: 8px;
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            color: white !important;
            font-weight: 600;
            font-size: 0.875rem;
            transition: opacity 0.2s, transform 0.2s;
        }
        .nav-cta:hover {
            opacity: 0.92;
            transform: translateY(-1px);
        }
        .nav-mobile-overlay .nav-cta-mobile {
            margin-top: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 20px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            color: white;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
        }

        /* ── Features Grid ── */
        .features {
            padding: 120px 0;
        }
        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--text-label);
            margin-bottom: 16px;
        }
        .section-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.02em;
            margin-bottom: 16px;
        }
        .section-sub {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 600px;
            margin-bottom: 64px;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .feature-card {
            padding: 32px;
            border-radius: 16px;
            background: var(--bg-card);
            border: 1px solid var(--border-card);
            transition: border-color 0.3s, transform 0.3s;
            position: relative;
            overflow: hidden;
        }
        .feature-card:hover {
            border-color: var(--border-card-hover);
        }
        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 20px;
        }
        .feature-icon.purple { background: var(--bg-icon-purple); }
        .feature-icon.blue { background: var(--bg-icon-blue); }
        .feature-icon.cyan { background: var(--bg-icon-cyan); }
        .feature-icon.green { background: var(--bg-icon-green); }
        .feature-icon.amber { background: var(--bg-icon-amber); }
        .feature-icon.rose { background: var(--bg-icon-rose); }
        .feature-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 10px;
        }
        .feature-card p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* ── Showcase sections ── */
        .showcase {
            padding: 100px 0;
        }
        .showcase-block {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 72px;
            align-items: center;
            margin-bottom: 120px;
        }
        .showcase-block:last-child {
            margin-bottom: 0;
        }
        .showcase-block.reversed {
            direction: rtl;
        }
        .showcase-block.reversed > * {
            direction: ltr;
        }
        .showcase-content .section-label {
            margin-bottom: 12px;
        }
        .showcase-content h2 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.02em;
            margin-bottom: 16px;
        }
        .showcase-content p {
            font-size: 1.05rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 24px;
        }
        .showcase-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .showcase-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 0.95rem;
            color: var(--text-body);
        }
        .showcase-list li .check {
            flex-shrink: 0;
            width: 22px;
            height: 22px;
            border-radius: 6px;
            background: var(--bg-check);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2px;
        }
        .showcase-list li .check svg {
            width: 14px;
            height: 14px;
            stroke: #22c55e;
        }
        .showcase-screenshot {
            border-radius: 16px;
            border: 1px solid var(--border-card);
            background: var(--bg-card);
            overflow: hidden;
            box-shadow: var(--shadow-showcase);
        }
        .showcase-screenshot img {
            width: 100%;
            height: auto;
            display: block;
        }
        .showcase-screenshot .screenshot-placeholder {
            min-height: 320px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* ── How It Works ── */
        .how-it-works {
            padding: 120px 0;
        }
        .how-it-works .section-title,
        .how-it-works .section-sub {
            text-align: center;
        }
        .how-it-works .section-label {
            display: block;
            text-align: center;
        }
        .how-it-works .section-sub {
            margin-left: auto;
            margin-right: auto;
        }
        .steps {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            position: relative;
        }
        .steps::before {
            content: '';
            position: absolute;
            top: 44px;
            left: calc(16.67% + 24px);
            right: calc(16.67% + 24px);
            height: 2px;
            background: linear-gradient(90deg, var(--purple-700), var(--blue-600), var(--purple-700));
            opacity: 0.3;
        }
        .step {
            text-align: center;
            position: relative;
        }
        .step-number {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            color: white;
            margin-bottom: 24px;
            position: relative;
            z-index: 1;
        }
        .step h3 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 10px;
        }
        .step p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* ── Testimonial / Quote ── */
        .quote-section {
            padding: 80px 0;
        }
        .quote-card {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 64px 48px;
            border-radius: 24px;
            background: var(--bg-quote);
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }
        .quote-card blockquote {
            font-size: 1.4rem;
            font-weight: 500;
            color: var(--text-body);
            line-height: 1.6;
            font-style: italic;
            margin-bottom: 24px;
        }
        .quote-card cite {
            font-style: normal;
            font-size: 0.95rem;
            color: var(--text-faint);
        }

        /* ── CTA ── */
        .cta {
            padding: 120px 0;
            text-align: center;
        }
        .cta-inner {
            max-width: 680px;
            margin: 0 auto;
        }
        .cta h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.02em;
            margin-bottom: 16px;
        }
        .cta p {
            font-size: 1.1rem;
            color: var(--text-muted);
            margin-bottom: 40px;
            line-height: 1.7;
        }

        /* ── Step number count-up glow ── */
        .step-number.counted {
            animation: step-pop 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        @keyframes step-pop {
            0% { transform: scale(0.5); opacity: 0; }
            60% { transform: scale(1.2); }
            100% { transform: scale(1); opacity: 1; }
        }

        /* ── Page-specific responsive ── */
        @media (max-width: 900px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .showcase-block,
            .showcase-block.reversed {
                grid-template-columns: 1fr;
                gap: 40px;
                direction: ltr;
            }
            .steps {
                grid-template-columns: 1fr;
                gap: 48px;
            }
            .steps::before {
                display: none;
            }
        }
        @media (max-width: 600px) {
            .features-grid {
                grid-template-columns: 1fr;
            }
            .nav-links {
                display: none;
            }
            .nav-toggle {
                display: flex;
            }
            .hero {
                padding: 130px 0 60px;
            }
            .hero-actions {
                flex-direction: column;
            }
            .btn-primary, .btn-secondary {
                width: 100%;
                justify-content: center;
            }
            .quote-card {
                padding: 40px 24px;
            }
            .quote-card blockquote {
                font-size: 1.15rem;
            }
        }
    </style>
</head>
<body>

<div class="bg-glow"></div>
<canvas class="particles-canvas" id="particles"></canvas>
<div class="scroll-progress" id="scroll-progress"></div>
<div class="hack-overlay" id="hack-overlay"><div class="hack-terminal" id="hack-terminal"></div></div>

<!-- Theme toggle -->
<button class="theme-toggle" id="theme-toggle" aria-label="Toggle light/dark mode" title="Toggle light/dark mode">
    <!-- Dark mode: show lightbulb outline (off) -->
    <svg class="icon-dark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9 18h6"/><path d="M10 22h4"/>
        <path d="M12 2a7 7 0 0 0-4 12.7V17h8v-2.3A7 7 0 0 0 12 2z"/>
    </svg>
    <!-- Light mode: show lightbulb filled (on) -->
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
            <li><a href="#features">Features</a></li>
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#showcase">Showcase</a></li>
            <li><a href="/download" class="nav-cta">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                Download
            </a></li>
        </ul>
        <button class="nav-toggle" id="nav-toggle" aria-label="Open menu">
            <svg class="icon-hamburger" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            <svg class="icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
    </div>
</nav>
<div class="nav-mobile-overlay" id="nav-mobile-overlay">
    <a href="#features">Features</a>
    <a href="#how-it-works">How It Works</a>
    <a href="#showcase">Showcase</a>
    <a href="/download" class="nav-cta-mobile">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        Download
    </a>
</div>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="fade-in">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                Free &amp; enterprise ready — zero analytics, zero tracking
            </div>
            <h1>
                <span class="gradient-text">AI Assisted Coding</span><br>
                for Visual Studio<br>
                <span class="not-vscode">Not VS Code — the full Visual Studio</span>
            </h1>
            <p class="hero-sub">
                The only AI coding assistant built exclusively for Visual Studio 2019, 2022, and 2026.
                Chat with your repository, auto-fix errors, and design UIs — directly inside the IDE your enterprise team already uses.
            </p>
            <div class="hero-actions">
                <a href="/download" class="btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download Free Extension
                </a>
                <a href="#features" class="btn-secondary">
                    See What It Does
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
            <div class="vs-versions">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    VS 2019
                </span>
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    VS 2022
                </span>
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    VS 2026
                </span>
            </div>
        </div>

        <!-- Hero Screenshot -->
        <div class="hero-screenshot fade-in">
            <div class="screenshot-frame tilt-card">
                <div class="screenshot-titlebar">
                    <div class="screenshot-dot"></div>
                    <div class="screenshot-dot"></div>
                    <div class="screenshot-dot"></div>
                    <span>Visual Studio — Repo Chat Tool Panel</span>
                </div>
                <div class="screenshot-body">
                    <!-- Replace this placeholder with: <img src="screenshots/hero.png" alt="Repo Chat in Visual Studio"> -->
                    <div class="screenshot-placeholder">
                        <div class="placeholder-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" opacity="0.3"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        </div>
                        <p>screenshot: hero.png</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust strip -->
<section class="trust-strip">
    <div class="container">
        <div class="trust-items fade-in">
            <div class="trust-item">
                <div class="trust-icon purple">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#c084fc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                Full Visual Studio — not VS Code
            </div>
            <div class="trust-item">
                <div class="trust-icon green">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                Zero analytics &amp; tracking
            </div>
            <div class="trust-item">
                <div class="trust-icon blue">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                100% free &amp; enterprise ready
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="features" id="features">
    <div class="container">
        <div class="fade-in">
            <div class="section-label">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                Features
            </div>
            <h2 class="section-title">Everything you need to code faster</h2>
            <p class="section-sub">Built for the full Visual Studio — not VS Code. Repo Chat understands your entire codebase. Ask questions, make changes, and fix errors — all from a native tool panel.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card tilt-card fade-in">
                <div class="feature-icon purple">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#c084fc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <h3>Chat With Your Repo</h3>
                <p>Ask anything about your codebase. Repo Chat reads and understands your entire repository to give precise, contextual answers.</p>
            </div>

            <div class="feature-card tilt-card fade-in">
                <div class="feature-icon blue">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                </div>
                <h3>Read &amp; Write Code</h3>
                <p>Repo Chat can directly read and modify files in your repository. Describe changes in plain English and watch them happen.</p>
            </div>

            <div class="feature-card tilt-card fade-in">
                <div class="feature-icon rose">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fb7185" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                </div>
                <h3>Auto-Fix Errors</h3>
                <p>Paste a compiler error or exception and Repo Chat diagnoses the root cause and applies the fix automatically.</p>
            </div>

            <div class="feature-card tilt-card fade-in">
                <div class="feature-icon cyan">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#22d3ee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>Interactive UI Design</h3>
                <p>Open the WinForms or WPF Designer alongside Repo Chat and iterate on your UI visually — just describe what you want.</p>
            </div>

            <div class="feature-card tilt-card fade-in">
                <div class="feature-icon green">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <h3>Built for Full Visual Studio</h3>
                <p>Not a VS Code extension. Repo Chat is a native tool window for the full Visual Studio 2019, 2022, and 2026 — right where enterprise teams work.</p>
            </div>

            <div class="feature-card tilt-card fade-in">
                <div class="feature-icon amber">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>Enterprise Ready</h3>
                <p>Zero analytics, zero tracking, zero data collection. Your code never leaves your machine except for the AI call. Bring your own API key — fully auditable.</p>
            </div>
        </div>
    </div>
</section>

<!-- Showcase -->
<section class="showcase" id="showcase">
    <div class="container">

        <!-- Showcase 1: Chat with repo -->
        <div class="showcase-block fade-in">
            <div class="showcase-content">
                <div class="section-label">Understand</div>
                <h2>Ask anything about your codebase</h2>
                <p>
                    Repo Chat analyzes your entire repository and answers questions with full context.
                    Find where things are defined, understand complex logic, or get up to speed on unfamiliar code.
                </p>
                <ul class="showcase-list">
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        "Where is the authentication logic?"
                    </li>
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        "How does this API endpoint work?"
                    </li>
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        "What would break if I change this interface?"
                    </li>
                </ul>
            </div>
            <div class="showcase-screenshot">
                <!-- Replace with: <img src="screenshots/chat.png" alt="Chatting with repository"> -->
                <div class="screenshot-placeholder">
                    <div class="placeholder-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" opacity="0.3"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    <p>screenshot: chat.png</p>
                </div>
            </div>
        </div>

        <!-- Showcase 2: Error fixing -->
        <div class="showcase-block reversed fade-in">
            <div class="showcase-content">
                <div class="section-label">Fix</div>
                <h2>Paste errors, get instant fixes</h2>
                <p>
                    Copy any compiler error, runtime exception, or build failure directly into the chat.
                    Repo Chat finds the root cause in your code and applies the fix for you.
                </p>
                <ul class="showcase-list">
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        Compiler errors resolved automatically
                    </li>
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        Stack traces traced back to root cause
                    </li>
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        Build failures diagnosed and repaired
                    </li>
                </ul>
            </div>
            <div class="showcase-screenshot">
                <!-- Replace with: <img src="screenshots/error-fix.png" alt="Auto-fixing errors"> -->
                <div class="screenshot-placeholder">
                    <div class="placeholder-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" opacity="0.3"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    <p>screenshot: error-fix.png</p>
                </div>
            </div>
        </div>

        <!-- Showcase 3: UI Design -->
        <div class="showcase-block fade-in">
            <div class="showcase-content">
                <div class="section-label">Design</div>
                <h2>Design UIs interactively</h2>
                <p>
                    Open the WinForms or WPF Designer side by side with Repo Chat.
                    Describe the UI changes you want and see them reflected live in the Designer.
                </p>
                <ul class="showcase-list">
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        WinForms Designer integration
                    </li>
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        WPF / XAML Designer support
                    </li>
                    <li>
                        <span class="check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                        Describe layouts in plain English
                    </li>
                </ul>
            </div>
            <div class="showcase-screenshot">
                <!-- Replace with: <img src="screenshots/ui-design.png" alt="Interactive UI design"> -->
                <div class="screenshot-placeholder">
                    <div class="placeholder-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" opacity="0.3"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    <p>screenshot: ui-design.png</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- How It Works -->
<section class="how-it-works" id="how-it-works">
    <div class="container">
        <div class="fade-in">
            <div class="section-label">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                How It Works
            </div>
            <h2 class="section-title">Up and running in minutes</h2>
            <p class="section-sub">Three simple steps to supercharge your Visual Studio workflow with AI-powered coding.</p>
        </div>

        <div class="steps fade-in">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Install the Extension</h3>
                <p>Download the right Repo Chat version for your Visual Studio. Compatible with VS 2019, 2022, and 2026.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Open the Chat Panel</h3>
                <p>Find Repo Chat under View &rarr; Other Windows. Dock it wherever you like in your IDE layout.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Start Coding with AI</h3>
                <p>Ask questions, request code changes, paste errors, or describe the UI you need. Repo Chat does the rest.</p>
            </div>
        </div>
    </div>
</section>

<!-- Quote -->
<section class="quote-section">
    <div class="container">
        <div class="quote-card tilt-card fade-in">
            <blockquote>"Finally — an AI assistant that runs in the full Visual Studio, not just VS Code. And it doesn't phone home."</blockquote>
            <cite>— Built for enterprise .NET teams</cite>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <div class="container">
        <div class="cta-inner fade-in">
            <h2>Ready to code smarter?</h2>
            <p>Download Repo Chat for free. No analytics, no tracking, no strings attached — AI assisted coding in the full Visual Studio.</p>
            <div class="hero-actions">
                <a href="/download" class="btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Download for Visual Studio
                </a>
            </div>
        </div>
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
            <li><a href="/download">Download</a></li>
            <li><a href="mailto:support@repo.chat">Contact</a></li>
        </ul>
    </div>
</footer>

<script src="/script.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ── Step number count-up animation ── */
    var stepNums = document.querySelectorAll('.step-number');
    var stepObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                var el = entry.target;
                var target = parseInt(el.textContent);
                el.textContent = '0';
                el.classList.add('counted');
                var delay = (target - 1) * 200;
                setTimeout(function () {
                    var count = 0;
                    var interval = setInterval(function () {
                        count++;
                        el.textContent = count;
                        if (count >= target) clearInterval(interval);
                    }, 80);
                }, delay);
                stepObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    stepNums.forEach(function (el) { stepObserver.observe(el); });

    /* ── Magnetic nav CTA button ── */
    var navCta = document.querySelector('.nav-cta');
    if (navCta) {
        navCta.style.transition = 'transform 0.25s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.2s';
        document.querySelector('nav').addEventListener('mousemove', function (e) {
            var rect = navCta.getBoundingClientRect();
            var cx = rect.left + rect.width / 2;
            var cy = rect.top + rect.height / 2;
            var dx = e.clientX - cx;
            var dy = e.clientY - cy;
            var dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 200) {
                var pull = Math.pow((200 - dist) / 200, 2);
                navCta.style.transform = 'translate(' + (dx * pull * 0.35) + 'px,' + (dy * pull * 0.35) + 'px)';
            } else {
                navCta.style.transform = '';
            }
        });
        document.querySelector('nav').addEventListener('mouseleave', function () {
            navCta.style.transform = '';
        });
    }

});
</script>

</body>
</html>
