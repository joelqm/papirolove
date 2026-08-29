<style>
    @font-face {
        font-family: 'Baskervville-Regular';
        src: url("{$_layoutParams.root}views/layout/fonts/Baskervville-Regular.ttf");
        font-display: swap;
    }
    @font-face {
        font-family: 'newyork_personal';
        src: url("{$_layoutParams.root}font.php?f=newyork_personal_use.woff2") format("woff2"),
            url("{$_layoutParams.root}font.php?f=newyork_personal_use.otf") format("opentype");
        font-display: swap;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        border: none;
        overflow-x: hidden;
        background: #D9CBB8;
    }

    body > footer {
        display: none;
    }

    .coming-soon-page {
        position: relative;
        min-height: 100vh;
        width: 100%;
        background-color: #D9CBB8;
        background-image: url("{$_layoutParams.root}views/camilaydiego/imgs/backgroundprincipal.webp");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem 1.5rem;
        box-sizing: border-box;
        text-align: center;
        color: #F5EFE6;
        font-family: 'Baskervville-Regular', Georgia, serif;
    }

    .coming-soon-page::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            linear-gradient(
                to bottom,
                rgba(20, 14, 10, 0.45) 0%,
                rgba(20, 14, 10, 0.55) 45%,
                rgba(20, 14, 10, 0.65) 100%
            );
        pointer-events: none;
        z-index: 0;
    }

    .coming-soon-card {
        position: relative;
        z-index: 1;
        border-radius: 20px;
        padding: 2.5rem 2rem;
        max-width: 520px;
        width: 100%;
        color: #F5EFE6;
    }

    .coming-soon-names {
        font-family: 'newyork_personal', cursive;
        font-size: 3.4rem;
        line-height: 1.1;
        color: #E8D4A8;
        margin: 0 0 1.5rem;
        text-shadow: 0 2px 12px rgba(0, 0, 0, 0.45);
    }

    .coming-soon-divider {
        width: 60px;
        height: 1px;
        background: #C9A86C;
        margin: 0 auto 1.5rem;
        opacity: 0.9;
    }

    .coming-soon-title {
        font-family: 'Baskervville-Regular', Georgia, serif;
        font-size: 1.4rem;
        font-weight: normal;
        letter-spacing: 5px;
        color: #F5EFE6;
        margin: 0 0 1.5rem;
        text-transform: uppercase;
        text-shadow: 0 1px 8px rgba(0, 0, 0, 0.4);
    }

    .coming-soon-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(74, 52, 40, 0.92);
        color: #F5EFE6;
        font-family: 'Baskervville-Regular', Georgia, serif;
        font-size: 0.8rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 0.55rem 1.3rem;
        border-radius: 50px;
        border: 1px solid rgba(201, 168, 108, 0.35);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.25);
    }

    .coming-soon-pulse {
        width: 8px;
        height: 8px;
        background: #C9A86C;
        border-radius: 50%;
        animation: comingSoonPulse 1.4s ease-in-out infinite;
    }

    @keyframes comingSoonPulse {
        0%, 100% { opacity: 0.4; transform: scale(1); }
        50%      { opacity: 1;   transform: scale(1.4); }
    }

    @media (max-width: 480px) {
        .coming-soon-card { padding: 1.5rem 1rem; }
        .coming-soon-names { font-size: 2.6rem; }
        .coming-soon-title { font-size: 1.1rem; letter-spacing: 4px; }
    }
</style>

<div class="coming-soon-page">
    <div class="coming-soon-card">

        <h1 class="coming-soon-names">Camila &amp; Diego</h1>

        <div class="coming-soon-divider"></div>

        <h2 class="coming-soon-title">MUY PRONTO</h2>

        <span class="coming-soon-badge">
            <span class="coming-soon-pulse"></span>
            Sitio en construcción
        </span>

    </div>
</div>
