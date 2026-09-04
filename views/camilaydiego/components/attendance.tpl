<section class="attendance-section" id="attendance">

    <div class="attendance-inner" data-aos="fade-up">
        <h2 class="attendance-title">Con&#8203;firma tu asistencia</h2>

        <p class="attendance-text">
            Agradeceremos confirmar<br>
            tu asistencia hasta el<br>
            <span class="attendance-date">10.10.26</span>
        </p>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdvHdisG6v0bLwHmqW8sjKJWmm7HKNvLZ2uSeJMA3nWjg1eoA/viewform?usp=sharing&ouid=116663290609750251722"
           class="attendance-btn"
           target="_blank"
           rel="noopener noreferrer">
            Confirma Aqu&iacute;
        </a>
    </div>

</section>

{literal}
<style>
    #attendance.attendance-section {
        background: #CBD7DF;
        padding: 3.5rem 1.25rem 3.75rem;
        text-align: center;
        color: #908C70;
    }

    #attendance .attendance-inner {
        max-width: 28rem;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #attendance .attendance-title {
        font-family: 'parfumerie-script', cursive;
        font-weight: normal;
        color: #908C70;
        margin: 0 0 1.25rem;
        line-height: 1.05;
        font-variant-ligatures: none;
        font-feature-settings: "liga" 0, "clig" 0;
    }

    #attendance .attendance-text {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 0.95rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #908C70;
        margin: 0 0 1.35rem;
        line-height: 1.45;
        -webkit-text-stroke: 0.35px #908C70;
        paint-order: stroke fill;
    }

    #attendance .attendance-date {
        display: inline-block;
        margin-top: 0.15rem;
        font-size: 1.05rem;
        letter-spacing: 2.5px;
    }

    #attendance .attendance-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 150px;
        padding: 0.55rem 1.6rem;
        border-radius: 999px;
        background: #CFB89D;
        color: #fff !important;
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
        text-decoration: none;
        transition: opacity 0.3s ease;
        -webkit-text-stroke: 0;
    }

    #attendance .attendance-btn:hover {
        opacity: 0.88;
        text-decoration: none;
        color: #fff !important;
    }

    @media (max-width: 768px) {
        #attendance.attendance-section {
            padding: 3rem 1rem 3.25rem;
        }

        #attendance .attendance-title {
            margin-bottom: 1rem;
            -webkit-text-stroke: 0.85px #908C70;
            paint-order: stroke fill;
            font-variant-ligatures: none;
            font-feature-settings: "liga" 0, "clig" 0;
        }

        #attendance .attendance-text {
            font-size: 0.88rem;
            margin-bottom: 1.15rem;
            -webkit-text-stroke: 0.4px #908C70;
        }
    }

    @media (max-width: 480px) {
        #attendance .attendance-text {
            font-size: 0.84rem;
        }
    }
</style>
{/literal}
