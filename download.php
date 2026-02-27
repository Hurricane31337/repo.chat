<?php
$pageTitle       = 'Download — Repo Chat for Visual Studio 2026, 2022 &amp; 2019';
$pageDescription = 'Download Repo Chat for the full Visual Studio — not VS Code. Choose your version: VS 2026, 2022, or 2019. Free, no analytics, no tracking. Enterprise ready.';
require __DIR__ . '/includes/header.php';
?>
    <style>
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
            position: relative;
            overflow: hidden;
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
            position: relative;
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

        /* ── Page-specific responsive ── */
        @media (max-width: 600px) {
            .page-header { padding: 130px 0 48px; }
            .download-card { padding: 36px 24px; }
            .install-card-header,
            .install-steps { padding-left: 20px; padding-right: 20px; }
        }
    </style>
</head>
<body>

<?php require __DIR__ . '/includes/nav.php'; ?>

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
        <div class="download-card tilt-card fade-in">
            <div class="download-card-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--purple-400)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"/><line x1="12" y1="22" x2="12" y2="15.5"/><polyline points="22 8.5 12 15.5 2 8.5"/></svg>
            </div>

            <label class="download-label" for="vs-version">Select your Visual Studio version</label>
            <select class="version-select" id="vs-version">
                <option value="2026" data-file="RepoChatVS2026.vsix" data-detail="Target 18.x &middot; .NET / 64-bit">Visual Studio 2026</option>
                <option value="2022" data-file="RepoChatVS2022.vsix" data-detail="Target 17.x &middot; .NET / 64-bit">Visual Studio 2022</option>
                <option value="2019" data-file="RepoChatVS2019.vsix" data-detail="Target 16.x &middot; .NET Framework">Visual Studio 2019</option>
            </select>
            <div class="version-detail" id="version-detail">Target 18.x &middot; .NET / 64-bit</div>

            <a href="/downloads/RepoChatVS2026.vsix" class="btn-download" id="download-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                Download .vsix
            </a>
            <div class="file-name" id="file-name">RepoChatVS2026.vsix</div>
        </div>
    </div>
</section>

<!-- Installation Instructions -->
<section class="install-info">
    <div class="install-card tilt-card fade-in">
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

<?php require __DIR__ . '/includes/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ── Version chooser ── */
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
