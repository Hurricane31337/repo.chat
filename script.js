/* ══════════════════════════════════════
   Shared scripts — repo.chat
   ══════════════════════════════════════ */

/* Expose mouse position globally so page-specific scripts can use it */
window.mouseX = -1000;
window.mouseY = -1000;

document.addEventListener('DOMContentLoaded', function () {

    /* ── Fade-in on scroll ── */
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

    /* ── Theme toggle ── */
    document.getElementById('theme-toggle').addEventListener('click', function () {
        var isLight = document.documentElement.classList.toggle('light');
        localStorage.setItem('theme', isLight ? 'light' : 'dark');
    });

    /* ── Mouse tracking (for particles + tilt) ── */
    document.addEventListener('mousemove', function (e) {
        window.mouseX = e.clientX;
        window.mouseY = e.clientY;
    });

    /* ── Mobile hamburger menu ── */
    var navToggle = document.getElementById('nav-toggle');
    var navOverlay = document.getElementById('nav-mobile-overlay');
    navToggle.addEventListener('click', function () {
        navToggle.classList.toggle('open');
        navOverlay.classList.toggle('open');
    });
    navOverlay.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            navToggle.classList.remove('open');
            navOverlay.classList.remove('open');
        });
    });

    /* ── Scroll progress bar ── */
    var progressBar = document.getElementById('scroll-progress');
    window.addEventListener('scroll', function () {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        var docHeight = document.documentElement.scrollHeight - window.innerHeight;
        var pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        progressBar.style.width = pct + '%';
    }, { passive: true });

    /* ── Scroll parallax for background glow ── */
    var bgGlow = document.querySelector('.bg-glow');
    window.addEventListener('scroll', function () {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        bgGlow.style.transform = 'translateY(' + (-scrollTop * 0.08) + 'px)';
    }, { passive: true });

    /* ── 3D Tilt on .tilt-card elements ── */
    document.querySelectorAll('.tilt-card').forEach(function (card) {
        var shine = document.createElement('div');
        shine.className = 'tilt-shine';
        card.appendChild(shine);

        card.addEventListener('mousemove', function (e) {
            var rect = card.getBoundingClientRect();
            var x = e.clientX - rect.left;
            var y = e.clientY - rect.top;
            var centerX = rect.width / 2;
            var centerY = rect.height / 2;
            var rotateX = ((y - centerY) / centerY) * -6;
            var rotateY = ((x - centerX) / centerX) * 6;

            card.style.transform = 'perspective(800px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) scale(1.02)';
            shine.style.opacity = '1';
            shine.style.setProperty('--shine-x', ((x / rect.width) * 100) + '%');
            shine.style.setProperty('--shine-y', ((y / rect.height) * 100) + '%');
        });

        card.addEventListener('mouseleave', function () {
            card.style.transform = '';
            shine.style.opacity = '0';
        });
    });

    /* ── Floating particles (scrolls with page) ── */
    var canvas = document.getElementById('particles');
    var ctx = canvas.getContext('2d');
    var particles = [];
    var PARTICLE_COUNT = 60;

    function resizeCanvas() {
        var docH = document.documentElement.scrollHeight;
        canvas.width = window.innerWidth;
        canvas.height = docH;
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    function isLightTheme() {
        return document.documentElement.classList.contains('light');
    }

    for (var i = 0; i < PARTICLE_COUNT; i++) {
        particles.push({
            x: Math.random() * window.innerWidth,
            y: Math.random() * document.documentElement.scrollHeight,
            size: Math.random() * 2.5 + 0.8,
            speedX: (Math.random() - 0.5) * 0.3,
            speedY: (Math.random() - 0.5) * 0.3,
            opacity: Math.random() * 0.5 + 0.15,
            hue: Math.random() > 0.5 ? 270 : 220
        });
    }

    (function animateParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        var light = isLightTheme();
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        var mxDoc = window.mouseX;
        var myDoc = window.mouseY + scrollTop;

        for (var i = 0; i < particles.length; i++) {
            var p = particles[i];
            p.x += p.speedX;
            p.y += p.speedY;

            if (p.x < 0) p.x = canvas.width;
            if (p.x > canvas.width) p.x = 0;
            if (p.y < 0) p.y = canvas.height;
            if (p.y > canvas.height) p.y = 0;

            /* Repel from cursor */
            var dx = p.x - mxDoc;
            var dy = p.y - myDoc;
            var dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 150) {
                var force = (150 - dist) / 150;
                p.x += (dx / dist) * force * 2;
                p.y += (dy / dist) * force * 2;
            }

            var alpha = light ? p.opacity * 0.7 : p.opacity;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
            ctx.fillStyle = 'hsla(' + p.hue + ', 70%, ' + (light ? '45%' : '60%') + ', ' + alpha + ')';
            ctx.fill();
        }

        /* Draw faint lines between nearby particles */
        for (var i = 0; i < particles.length; i++) {
            for (var j = i + 1; j < particles.length; j++) {
                var dx = particles[i].x - particles[j].x;
                var dy = particles[i].y - particles[j].y;
                var dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 120) {
                    var lineAlpha = (1 - dist / 120) * 0.08;
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = 'rgba(147, 51, 234, ' + lineAlpha + ')';
                    ctx.lineWidth = 0.5;
                    ctx.stroke();
                }
            }
        }

        requestAnimationFrame(animateParticles);
    })();

    /* ── Click ripple effect ── */
    document.addEventListener('click', function (e) {
        var ripple = document.createElement('div');
        ripple.style.cssText = 'position:fixed;border-radius:50%;pointer-events:none;z-index:9998;' +
            'width:0;height:0;left:' + e.clientX + 'px;top:' + e.clientY + 'px;' +
            'border:2px solid rgba(147,51,234,0.3);transform:translate(-50%,-50%);' +
            'transition:width 0.6s ease-out,height 0.6s ease-out,opacity 0.6s ease-out;opacity:1;';
        document.body.appendChild(ripple);

        requestAnimationFrame(function () {
            ripple.style.width = '200px';
            ripple.style.height = '200px';
            ripple.style.opacity = '0';
        });

        setTimeout(function () { ripple.remove(); }, 700);
    });

    /* ── Secret word "hack" → Terminal takeover ── */
    var secretBuffer = '';
    var hackOverlay = document.getElementById('hack-overlay');
    var hackTerminal = document.getElementById('hack-terminal');

    document.addEventListener('keydown', function (e) {
        if (hackOverlay.classList.contains('active')) return;
        if (e.key.length === 1) {
            secretBuffer += e.key.toLowerCase();
            if (secretBuffer.length > 10) secretBuffer = secretBuffer.slice(-10);
            if (secretBuffer.endsWith('hack')) {
                secretBuffer = '';
                triggerHack();
            }
        }
    });

    function triggerHack() {
        hackOverlay.classList.add('active');
        hackTerminal.innerHTML = '';

        var lines = [
            '> Analyzing website and VS extension code...',
            '> Scanning repo.chat for analytics scripts... <span style="color:#4ade80">CLEAN</span>',
            '> Scanning extension binary for telemetry... <span style="color:#4ade80">CLEAN</span>',
            '> Outbound network calls: <span style="color:#fbbf24">only your configured LLM API</span>',
            '> Hidden tracking endpoints: <span style="color:#f87171">0</span>',
            '> Data collection services: <span style="color:#f87171">NONE</span>',
            '> Fingerprinting or device IDs: <span style="color:#f87171">NONE</span>',
            '> ',
            '> <span style="color:#22d3ee">VERDICT: 100% clean. Your code never leaves your machine.</span>',
            '> <span style="color:#c084fc">Nothing to hide — that\'s the whole point.</span>',
            '> ',
            '> <span style="color:#64748b">Press any key to exit...</span>'
        ];

        var lineIndex = 0;
        function typeLine() {
            if (lineIndex >= lines.length) {
                document.addEventListener('keydown', dismissHack, { once: true });
                hackOverlay.addEventListener('click', dismissHack, { once: true });
                return;
            }

            var line = lines[lineIndex];
            var span = document.createElement('div');
            hackTerminal.appendChild(span);

            var plainText = line.replace(/<[^>]*>/g, '');
            var charIndex = 0;

            function typeChar() {
                if (charIndex < plainText.length) {
                    charIndex++;
                    span.innerHTML = line.substring(0, findHtmlIndex(line, charIndex)) + '<span class="cursor-blink"></span>';
                    setTimeout(typeChar, 15 + Math.random() * 25);
                } else {
                    span.innerHTML = line;
                    lineIndex++;
                    setTimeout(typeLine, 100);
                }
            }
            typeChar();
        }
        typeLine();
    }

    function findHtmlIndex(html, plainIndex) {
        var plain = 0, i = 0;
        while (i < html.length && plain < plainIndex) {
            if (html[i] === '<') {
                while (i < html.length && html[i] !== '>') i++;
                i++;
            } else {
                plain++;
                i++;
            }
        }
        return i;
    }

    function dismissHack() {
        hackOverlay.classList.remove('active');
        setTimeout(function () { hackTerminal.innerHTML = ''; }, 300);
    }

});
