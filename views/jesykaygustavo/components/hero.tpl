<style>
    .container-page {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        padding: 0;
    }

    /* Bloque central del hero: grupo superior (logo+nombres+fecha) arriba y botón abajo */
    .hero-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        text-align: center;
        width: 100%;
        padding: 60px 20px 50px;
    }

    /* Grupo pegado al top: logo, nombres y fecha */
    .hero-top {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 3px;
    }

    /* Monograma (logo JG) */
    .monogram {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .monogram-logo {
        width: 120px;
        height: auto;

    }

    /* Media Query para Tablets y Celulares */
    @media (max-width: 992px) {
        .couple-name {
            font-size: 1.8rem;
        }

        .wedding-date-2 {
            font-size: 1.9rem;
        }

        .monogram-logo {
            width: 120px;
        }

        .menu {
            flex-direction: column;
            display: none;
            /* Se activaría con tu JS del hamburguesa */
        }
    }

    /* Ajuste extra para celulares muy pequeños */
    @media (max-width: 480px) {
        .couple-name {
            font-size: 1.9rem;
        }

        .wedding-date-2 {
            font-size: 1.6rem;
        }
    }
</style>
<div class="container-page">

    <div class="background" data-aos="fade-up"></div>

    <div class="hero-content">

        <div class="hero-top">

            <div class="monogram" data-aos="fade-up">
                <img src="{$_layoutParams.root}views/jesykaygustavo/imgs/logo.webp" alt="Jesyka y Gustavo" class="monogram-logo">
            </div>

            <div class="header" style="justify-items: center;">
                <h1 class="couple-name" data-aos="fade-up">Jesyka <span class="amp">&amp;</span> Gustavo</h1>
                <p class="wedding-date-2" data-aos="fade-up">15.08.26</p>
            </div>

        </div>

        <button class="button button-calendar">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
            </svg>
            Agrega a tu calendario
        </button>

    </div>
</div>

<div class="navigation">
    <a href="javascript:void(0);" class="icon" id="hamburger-icon">
        <i class="fas fa-bars"></i>
    </a>
    <div class="menu" id="menu">
        <a data-id="new-history" href="#new-history" class="nav-item">Nuestra Historia</a>
        <a data-id="info" class="nav-item">Detalles</a>
        {* <a data-id="galery" class="nav-item">Fotos</a> *}
        <a data-id="dresscode" class="nav-item">Dress Code</a>
        <a data-id="attendance" class="nav-item">Asistencia</a>
        <a data-id="gifts" class="nav-item">Regalos</a>
    </div>
</div>