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
    <style>
        /* ── Brand colors (constant) ── */
        :root {
            --purple-400: #c084fc;
            --purple-500: #a855f7;
            --purple-600: #9333ea;
            --purple-700: #7e22ce;
            --blue-500: #3b82f6;
            --blue-600: #2563eb;
            --cyan-400: #22d3ee;
        }

        /* ── Dark theme (default) ── */
        :root {
            --bg: #020617;
            --bg-card: rgba(15, 23, 42, 0.5);
            --bg-nav: rgba(2, 6, 23, 0.7);
            --bg-titlebar: rgba(30, 41, 59, 0.6);
            --bg-screenshot: rgba(15, 23, 42, 0.6);
            --bg-btn-secondary: rgba(148, 163, 184, 0.08);
            --bg-btn-secondary-hover: rgba(148, 163, 184, 0.14);
            --bg-dot: rgba(148, 163, 184, 0.15);
            --bg-icon-subtle: rgba(148, 163, 184, 0.05);
            --bg-step-num: rgba(148, 163, 184, 0.08);
            --bg-badge: rgba(147, 51, 234, 0.1);
            --bg-quote: linear-gradient(135deg, rgba(147, 51, 234, 0.06), rgba(59, 130, 246, 0.06));
            --bg-check: rgba(34, 197, 94, 0.12);
            --bg-icon-purple: rgba(147, 51, 234, 0.12);
            --bg-icon-blue: rgba(59, 130, 246, 0.12);
            --bg-icon-cyan: rgba(34, 211, 238, 0.12);
            --bg-icon-green: rgba(34, 197, 94, 0.12);
            --bg-icon-amber: rgba(245, 158, 11, 0.12);
            --bg-icon-rose: rgba(244, 63, 94, 0.12);
            --text-heading: #ffffff;
            --text-body: #e2e8f0;
            --text-muted: #94a3b8;
            --text-faint: #64748b;
            --text-dimmed: #475569;
            --text-link-hover: #ffffff;
            --text-badge: #d8b4fe;
            --text-label: #c084fc;
            --border: rgba(148, 163, 184, 0.06);
            --border-card: rgba(148, 163, 184, 0.06);
            --border-card-hover: rgba(147, 51, 234, 0.2);
            --border-btn-secondary: rgba(148, 163, 184, 0.12);
            --border-badge: rgba(147, 51, 234, 0.2);
            --border-screenshot: rgba(148, 163, 184, 0.1);
            --shadow-screenshot: 0 0 0 1px rgba(148, 163, 184, 0.05), 0 25px 80px rgba(0, 0, 0, 0.5), 0 0 80px rgba(147, 51, 234, 0.08);
            --shadow-showcase: 0 25px 60px rgba(0, 0, 0, 0.3);
            --shadow-btn: 0 0 30px rgba(147, 51, 234, 0.2);
            --shadow-btn-hover: 0 0 40px rgba(147, 51, 234, 0.35);
            --glow-purple: rgba(147, 51, 234, 0.08);
            --glow-blue: rgba(59, 130, 246, 0.06);
            --gradient-text-from: var(--purple-400);
            --gradient-text-to: var(--cyan-400);
            --logo-text: #ffffff;
        }

        /* ── Light theme ── */
        :root.light {
                --bg: #f8fafc;
                --bg-card: rgba(255, 255, 255, 0.7);
                --bg-nav: rgba(248, 250, 252, 0.8);
                --bg-titlebar: rgba(241, 245, 249, 0.8);
                --bg-screenshot: rgba(241, 245, 249, 0.6);
                --bg-btn-secondary: rgba(100, 116, 139, 0.08);
                --bg-btn-secondary-hover: rgba(100, 116, 139, 0.14);
                --bg-dot: rgba(100, 116, 139, 0.2);
                --bg-icon-subtle: rgba(100, 116, 139, 0.06);
                --bg-step-num: rgba(100, 116, 139, 0.08);
                --bg-badge: rgba(147, 51, 234, 0.08);
                --bg-quote: linear-gradient(135deg, rgba(147, 51, 234, 0.04), rgba(59, 130, 246, 0.04));
                --bg-check: rgba(34, 197, 94, 0.1);
                --bg-icon-purple: rgba(147, 51, 234, 0.1);
                --bg-icon-blue: rgba(59, 130, 246, 0.1);
                --bg-icon-cyan: rgba(34, 211, 238, 0.1);
                --bg-icon-green: rgba(34, 197, 94, 0.1);
                --bg-icon-amber: rgba(245, 158, 11, 0.1);
                --bg-icon-rose: rgba(244, 63, 94, 0.1);
                --text-heading: #0f172a;
                --text-body: #334155;
                --text-muted: #64748b;
                --text-faint: #94a3b8;
                --text-dimmed: #94a3b8;
                --text-link-hover: #0f172a;
                --text-badge: #7e22ce;
                --text-label: #9333ea;
                --border: rgba(100, 116, 139, 0.1);
                --border-card: rgba(100, 116, 139, 0.1);
                --border-card-hover: rgba(147, 51, 234, 0.3);
                --border-btn-secondary: rgba(100, 116, 139, 0.15);
                --border-badge: rgba(147, 51, 234, 0.2);
                --border-screenshot: rgba(100, 116, 139, 0.12);
                --shadow-screenshot: 0 0 0 1px rgba(100, 116, 139, 0.08), 0 25px 80px rgba(0, 0, 0, 0.08), 0 0 40px rgba(147, 51, 234, 0.03);
                --shadow-showcase: 0 25px 60px rgba(0, 0, 0, 0.06);
                --shadow-btn: 0 0 30px rgba(147, 51, 234, 0.12);
                --shadow-btn-hover: 0 0 40px rgba(147, 51, 234, 0.2);
                --glow-purple: rgba(147, 51, 234, 0.04);
                --glow-blue: rgba(59, 130, 246, 0.03);
                --gradient-text-from: var(--purple-700);
                --gradient-text-to: #0891b2;
                --logo-text: #0f172a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg);
            color: var(--text-body);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ── Ambient background ── */
        .bg-glow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }
        .bg-glow::before {
            content: '';
            position: absolute;
            top: -40%;
            left: -20%;
            width: 80%;
            height: 80%;
            background: radial-gradient(ellipse, var(--glow-purple) 0%, transparent 70%);
            animation: drift 20s ease-in-out infinite;
        }
        .bg-glow::after {
            content: '';
            position: absolute;
            bottom: -30%;
            right: -20%;
            width: 70%;
            height: 70%;
            background: radial-gradient(ellipse, var(--glow-blue) 0%, transparent 70%);
            animation: drift 25s ease-in-out infinite reverse;
        }
        @keyframes drift {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(60px, 30px); }
        }

        /* ── Layout ── */
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
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 16px 0;
            background: var(--bg-nav);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            transition: background 0.3s;
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
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--purple-600), var(--blue-600));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
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
        .nav-links a:hover {
            color: var(--text-link-hover);
        }
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
            font-size: 0.82rem;
            color: var(--text-faint);
        }
        .vs-versions span {
            display: flex;
            align-items: center;
            gap: 6px;
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
        }
        .feature-card:hover {
            border-color: var(--border-card-hover);
            transform: translateY(-4px);
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

        /* ── Footer ── */
        footer {
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
        .footer-links a:hover {
            color: var(--text-body);
        }

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
            footer .container {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }
            .quote-card {
                padding: 40px 24px;
            }
            .quote-card blockquote {
                font-size: 1.15rem;
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
    </div>
</nav>

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
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    VS 2019
                </span>
                <span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    VS 2022
                </span>
                <span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    VS 2026
                </span>
            </div>
        </div>

        <!-- Hero Screenshot -->
        <div class="hero-screenshot fade-in">
            <div class="screenshot-frame">
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
            <div class="feature-card fade-in">
                <div class="feature-icon purple">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#c084fc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <h3>Chat With Your Repo</h3>
                <p>Ask anything about your codebase. Repo Chat reads and understands your entire repository to give precise, contextual answers.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon blue">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                </div>
                <h3>Read &amp; Write Code</h3>
                <p>Repo Chat can directly read and modify files in your repository. Describe changes in plain English and watch them happen.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon rose">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fb7185" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                </div>
                <h3>Auto-Fix Errors</h3>
                <p>Paste a compiler error or exception and Repo Chat diagnoses the root cause and applies the fix automatically.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon cyan">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#22d3ee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>Interactive UI Design</h3>
                <p>Open the WinForms or WPF Designer alongside Repo Chat and iterate on your UI visually — just describe what you want.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon green">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <h3>Built for Full Visual Studio</h3>
                <p>Not a VS Code extension. Repo Chat is a native tool window for the full Visual Studio 2019, 2022, and 2026 — right where enterprise teams work.</p>
            </div>

            <div class="feature-card fade-in">
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
        <div class="quote-card fade-in">
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

<!-- Scroll animations & theme toggle -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.08 });
    document.querySelectorAll('.fade-in').forEach(function (el) {
        observer.observe(el);
    });

    document.getElementById('theme-toggle').addEventListener('click', function () {
        var isLight = document.documentElement.classList.toggle('light');
        localStorage.setItem('theme', isLight ? 'light' : 'dark');
    });
});
</script>

</body>
</html>
