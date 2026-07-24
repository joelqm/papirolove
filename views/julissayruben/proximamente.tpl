<style>
    @font-face {
        font-family: 'Baskervville-Regular';
        src: url("{$_layoutParams.root}views/julissayruben/fonts/Baskervville-Regular.ttf");
        font-display: swap;
    }
    @font-face {
        font-family: 'CalliforniaSignature';
        src: url("{$_layoutParams.root}views/julissayruben/fonts/CalliforniaSignature.ttf");
        font-display: swap;
    }

    @font-face {
        font-family: 'newyork';
        src: url("{$_layoutParams.root}views/julissayruben/fonts/newyork.otf") format("opentype");
        font-display: swap;
    }

    .coming-soon-page {
        min-height: 100vh;
        background: #6D8397;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem 1.5rem;
        text-align: center;
        color: #fff;
        font-family: 'Baskervville-Regular', Georgia, serif;
    }

    .coming-soon-card {
        background: #f9f4ef;
        border-radius: 24px;
        padding: 3rem 2rem;
        max-width: 520px;
        width: 100%;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        color: #6D8397;
    }

    .coming-soon-logo {
        width: 130px;
        height: auto;
        margin-bottom: 1.2rem;
    }

    .coming-soon-names {
        font-family: 'newyork', cursive;
        font-size: 3rem;
        line-height: 1;
        color: #6D8397;
        margin: 0 0 0.5rem;
    }

    .coming-soon-date {
        font-family: 'Baskervville-Regular', Georgia, serif;
        font-size: 1.1rem;
        letter-spacing: 4px;
        color: #6D8397;
        margin: 0 0 2rem;
    }

    .coming-soon-date .dot {
        display: inline-block;
        margin: 0 0.4em;
        font-size: 1.2em;
        line-height: 1;
        vertical-align: middle;
    }

    .coming-soon-divider {
        width: 60px;
        height: 1px;
        background: #8FA3B5;
        margin: 0 auto 1.5rem;
    }

    .coming-soon-title {
        font-family: 'Baskervville-Regular', Georgia, serif;
        font-size: 1.6rem;
        font-weight: normal;
        color: #4A5C6B;
        margin: 0 0 0.6rem;
    }

    .coming-soon-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #6D8397;
        margin: 0 0 1.5rem;
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
             src="{$_layoutParams.root}views/julissayruben/imgs/logo.png"
             alt="Julissa y Rubén">

        <h1 class="coming-soon-names">Julissa &amp; Rubén</h1>

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
