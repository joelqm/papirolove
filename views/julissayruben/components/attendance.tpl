<section class="attendance-section" id="attendance">

    <img class="att-flower att-flower-tr"
         src="{$_layoutParams.root}views/julissayruben/imgs/imagen_historia_flores_superior_izq.webp"
         alt=""
         aria-hidden="true">

    <img class="att-flower att-flower-bl"
         src="{$_layoutParams.root}views/julissayruben/imgs/imagen_historia_flores_inferior_der.webp"
         alt=""
         aria-hidden="true">

    <div class="att-content" data-aos="fade-up">

        <h2 class="att-title">Confirma tu asistencia</h2>

        <p class="att-text">
            Agradeceremos confirmar tu<br>
            asistencia hasta el
        </p>

        <p class="att-date">10.09.26</p>

        <p class="att-text">
            Aunque nos gustan los niños,<br>
            esta será una celebración<br>
            solo para adultos.
        </p>

        <a href="https://wa.link/4pegd3" class="att-button" target="_blank" rel="noopener noreferrer">
            Confirma<br>Aquí
        </a>

    </div>

</section>

{literal}
<style>
    #attendance.attendance-section {
        background-color: #6D8397;
        position: relative;
        overflow: hidden;
        padding: 80px 24px 90px;
        text-align: center;
    }

    #attendance .att-flower {
        position: absolute;
        z-index: 0;
        pointer-events: none;
    }

    #attendance .att-flower-tr {
        top: -10px;
        right: -20px;
        width: min(220px, 28vw);
        transform: scaleX(-1);
    }

    #attendance .att-flower-bl {
        bottom: -20px;
        left: -30px;
        width: min(300px, 34vw);
        transform: scaleX(-1);
    }

    #attendance .att-content {
        position: relative;
        z-index: 1;
        max-width: 560px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #attendance .att-title {
        font-family: 'AngellicaSignature', cursive;
        font-size: var(--jr-title);
        font-weight: normal;
        color: #fff;
        margin: 0 0 1.4rem;
        line-height: 1.1;
    }

    #attendance .att-text {
        font-family: 'NewAthenaUnicode', serif;
        font-weight: normal;
        color: #fff;
        font-size: var(--jr-body);
        line-height: 1.4;
        margin: 0;
    }

    #attendance .att-date {
        font-family: 'newyork', serif;
        font-weight: normal;
        color: #fff;
        font-size: clamp(2.4rem, 4.5vw, 3rem);
        letter-spacing: 2px;
        margin: 1.2rem 0;
    }

    #attendance .att-text + .att-date {
        margin-top: 1rem;
    }

    #attendance .att-button {
        display: inline-block;
        margin-top: 2rem;
        background-color: #FFFAF4;
        color: #6D8397;
        font-family: 'NewAthenaUnicode', serif;
        font-size: 1.15rem;
        line-height: 1.15;
        text-align: center;
        text-decoration: none;
        padding: 0.9rem 2.2rem;
        border-radius: 12px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
        transition: transform 0.2s ease, background-color 0.3s ease;
    }

    #attendance .att-button:hover {
        transform: translateY(-2px);
        background-color: #fff;
        color: #6D8397;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        #attendance.attendance-section {
            padding: 60px 18px 70px;
        }

        #attendance .att-flower-tr {
            width: min(150px, 40vw);
        }

        #attendance .att-flower-bl {
            width: min(180px, 46vw);
        }

        #attendance .att-text {
            font-size: var(--jr-body);
        }
    }
</style>
{/literal}
