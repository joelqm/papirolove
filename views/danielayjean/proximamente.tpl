<style>
    @font-face {
        font-family: 'Baskervville-Regular';
        src: url("{$_layoutParams.root}views/layout/fonts/Baskervville-Regular.ttf");
        font-display: swap;
    }
    @font-face {
        font-family: 'CalliforniaSignature';
        src: url("{$_layoutParams.root}views/layout/fonts/CalliforniaSignature.ttf");
        font-display: swap;
    }

    @font-face {
        font-family: 'newyork';
        src: url("{$_layoutParams.root}views/layout/fonts/newyork_personal_use.otf") format("opentype");
        font-display: swap;
    }

    .coming-soon-page {
        min-height: 100vh;
        background: #768170;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem 1rem;
    }

    .coming-soon-card {
        background: rgba(255, 255, 255, 0.93);
        border-radius: 16px;
        padding: 3.5rem 3rem;
        max-width: 520px;
        width: 100%;
        text-align: center;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        backdrop-filter: blur(8px);
    }

    .coming-soon-logo {
        max-width: 160px;
        margin-bottom: 1.5rem;
    }

    .coming-soon-names {
        font-family: 'CalliforniaSignature', cursive;
        font-size: 3rem;
        color: #3B4B5A;
        margin: 0 0 0.5rem;
        font-weight: normal;
    }

    .coming-soon-date {
        font-family: 'newyork', serif;
        font-size: 1.2rem;
        color: #6D8397;
        letter-spacing: 4px;
        margin: 0 0 2rem;
    }

    .coming-soon-date .dot {
        margin: 0 6px;
        font-size: 0.8rem;
    }

    .coming-soon-divider {
        width: 60px;
        height: 2px;
        background: #B0C0CF;
        margin: 0 auto 2rem;
    }

    .coming-soon-title {
        font-family: 'CalliforniaSignature', cursive;
        font-size: 1.6rem;
        color: #3B4B5A;
        font-weight: normal;
        margin: 0 0 0.6rem;
    }

    .coming-soon-text {
        font-family: 'Baskervville-Regular', serif;
        font-size: 1rem;
        line-height: 1.6;
        color: #556877;
        margin: 0;
    }

    .coming-soon-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #8FA3B5;
        color: #fff;
        font-family: 'Baskervville-Regular', Georgia, serif;
        font-size: 0.85rem;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        margin-top: 1.5rem;
    }

    .coming-soon-pulse {
        width: 8px;
        height: 8px;
        background: #fff;
        border-radius: 50%;
        animation: comingSoonPulse 1.4s ease-in-out infinite;
    }

    @keyframes comingSoonPulse {
        0%, 100% { opacity: 0.4; transform: scale(1); }
        50%      { opacity: 1;   transform: scale(1.4); }
    }

    @media (max-width: 480px) {
        .coming-soon-card { padding: 2.2rem 1.5rem; }
        .coming-soon-names { font-size: 2.4rem; }
        .coming-soon-title { font-size: 1.3rem; }
        .coming-soon-date { font-size: 0.95rem; letter-spacing: 3px; }
    }
</style>

<div class="coming-soon-page">
    <div class="coming-soon-card">

        <img class="coming-soon-logo"
             src="{$_layoutParams.root}views/danielayjean/imgs/logo.png"
             alt="Flavia y Aníbal">

        <h1 class="coming-soon-names">Flavia &amp; Aníbal</h1>

        <p class="coming-soon-date">
            30<span class="dot">·</span>05<span class="dot">·</span>26
        </p>

        <div class="coming-soon-divider"></div>

        <h2 class="coming-soon-title">Pronto más novedades</h2>

        <p class="coming-soon-text">
            Estamos preparando con mucho amor cada detalle de nuestra invitación.
            Muy pronto podrás conocer toda la información de nuestra boda.
        </p>

        <span class="coming-soon-badge">
            <span class="coming-soon-pulse"></span>
            Sitio en construcción
        </span>

    </div>
</div>
