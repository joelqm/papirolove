<div class="dresscode-container" id="dresscode">

    <div class="decor-corner-top-left" aria-hidden="true"></div>

    <div class="dresscode-content" data-aos="fade-up">

        <div class="dc-left">
            <h1 class="dc-title">Dress Code</h1>
            <p class="dc-subtitle">Etiqueta estricta</p>

            <div class="dc-genders">
                <div class="dc-gender">
                    <img src="{$_layoutParams.root}views/gabrielayalberth/imgs/imagen_ellas.webp" alt="Ellas" class="dc-icon">
                    <p class="dc-gender-label">Ellas</p>
                    <p class="dc-gender-text">Vestido Largo</p>
                </div>
                <div class="dc-gender">
                    <img src="{$_layoutParams.root}views/gabrielayalberth/imgs/imagen_ellos.webp" alt="Ellos" class="dc-icon">
                    <p class="dc-gender-label">Ellos</p>
                    <p class="dc-gender-text">Traje y corbata</p>
                </div>
            </div>

            <p class="dc-palette-title">Paleta de inspiración</p>
            <img src="{$_layoutParams.root}views/gabrielayalberth/imgs/paleta_colores.png"
                 alt="Paleta de colores"
                 class="dc-palette">
            <p class="dc-note">Reserva las tonalidades claras para la novia</p>
        </div>

        <div class="dc-right">
            <span class="dc-inspiration-label">Inspiración</span>
            <img src="{$_layoutParams.root}views/gabrielayalberth/imgs/dress_code.webp"
                 alt="Inspiración dress code"
                 class="dc-inspiration-img">
        </div>

    </div>

    <!-- ===== TIMELINE ===== -->
    <div class="dc-timeline" data-aos="fade-up">
        <h2 class="dc-title dc-timeline-title">Timeline</h2>

        <ul class="tl-list">
            <li class="tl-item">
                <span class="tl-icon"
                      style="-webkit-mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_iglesia.webp');mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_iglesia.webp');"
                      aria-hidden="true"></span>
                <div class="tl-text">
                    <p class="tl-time">11:30 am</p>
                    <p class="tl-label">Ceremonia Religiosa</p>
                </div>
            </li>

            <li class="tl-item">
                <span class="tl-icon"
                      style="-webkit-mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_copas.webp');mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_copas.webp');"
                      aria-hidden="true"></span>
                <div class="tl-text">
                    <p class="tl-time">1:30 pm</p>
                    <p class="tl-label">Cocktail de Bienvenida</p>
                </div>
            </li>

            <li class="tl-item">
                <span class="tl-icon"
                      style="-webkit-mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_anillos.webp');mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_anillos.webp');"
                      aria-hidden="true"></span>
                <div class="tl-text">
                    <p class="tl-time">2:30 pm</p>
                    <p class="tl-label">Ceremonia Civil</p>
                </div>
            </li>

            <li class="tl-item">
                <span class="tl-icon"
                      style="-webkit-mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_cocina.webp');mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_cocina.webp');"
                      aria-hidden="true"></span>
                <div class="tl-text">
                    <p class="tl-time">3:00 pm</p>
                    <p class="tl-label">Almuerzo &amp; Discursos</p>
                </div>
            </li>

            <li class="tl-item">
                <span class="tl-icon"
                      style="-webkit-mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_ramo.webp');mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_ramo.webp');"
                      aria-hidden="true"></span>
                <div class="tl-text">
                    <p class="tl-time">4:30 pm</p>
                    <p class="tl-label">Bouquet</p>
                </div>
            </li>

            <li class="tl-item">
                <span class="tl-icon"
                      style="-webkit-mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_musica.webp');mask-image:url('{$_layoutParams.root}views/gabrielayalberth/imgs/icono_musica.webp');"
                      aria-hidden="true"></span>
                <div class="tl-text">
                    <p class="tl-time">5:00 pm</p>
                    <p class="tl-label">Apertura de la Pista</p>
                </div>
            </li>
        </ul>
    </div>

</div>

{literal}
<style>
    #dresscode.dresscode-container {
        background: transparent;
        color: #314028;
        padding: 70px 24px 40px;
    }

    #dresscode .dresscode-content {
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 3rem;
        align-items: start;
        max-width: 980px;
        margin: 0 auto;
        color: #314028;
    }

    #dresscode .dc-left {
        text-align: center;
    }

    #dresscode .dc-title {
        font-family: 'photograph_signature', cursive;
        font-size: 3.4rem;
        font-weight: normal;
        color: #314028;
        margin: 0 0 0.35rem;
        line-height: 1.1;
    }

    #dresscode .dc-subtitle,
    #dresscode .dc-gender-text,
    #dresscode .dc-palette-title,
    #dresscode .dc-note {
        font-family: 'newyork_personal', serif;
        color: #314028;
        font-weight: normal;
        margin: 0;
    }

    #dresscode .dc-subtitle {
        font-size: 1.35rem;
        margin-bottom: 2rem;
        -webkit-text-stroke: 0.4px #314028;
    }

    #dresscode .dc-genders {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        max-width: 420px;
        margin: 0 auto 2rem;
    }

    #dresscode .dc-gender {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #dresscode .dc-icon {
        width: 110px;
        height: auto;
        margin-bottom: 0.6rem;
    }

    #dresscode .dc-gender-label {
        font-family: 'photograph_signature', cursive;
        font-size: 2.4rem;
        color: #314028;
        margin: 0 0 0.2rem;
        line-height: 1.1;
    }

    #dresscode .dc-gender-text {
        font-size: 1.15rem;
        -webkit-text-stroke: 0.4px #314028;
    }

    #dresscode .dc-palette-title {
        font-size: 1.3rem;
        margin-bottom: 0.9rem;
        -webkit-text-stroke: 0.4px #314028;
    }

    #dresscode .dc-palette {
        width: min(260px, 80%);
        height: auto;
        display: block;
        margin: 0 auto 0.9rem;
    }

    #dresscode .dc-note {
        font-size: 1.05rem;
        -webkit-text-stroke: 0.35px #314028;
    }

    #dresscode .dc-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.9rem;
    }

    #dresscode .dc-inspiration-label {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 180px;
        background-color: #314028;
        color: #F3F0E2;
        font-family: 'newyork_personal', serif;
        font-size: 1.15rem;
        padding: 0.7rem 2rem;
        border-radius: 12px;
        cursor: default;
        pointer-events: none;
        -webkit-text-stroke: 0.4px #F3F0E2;
    }

    #dresscode .dc-inspiration-img {
        width: min(340px, 100%);
        height: auto;
        display: block;
        border-radius: 4px;
    }

    /* Timeline */
    #dresscode .dc-timeline {
        max-width: 420px;
        margin: 4rem auto 0;
        text-align: center;
    }

    #dresscode .dc-timeline-title {
        margin-bottom: 2rem;
    }

    #dresscode .tl-list {
        list-style: none;
        margin: 0 auto;
        padding: 0;
        max-width: 360px;
    }

    #dresscode .tl-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.35rem;
    }

    #dresscode .tl-icon {
        width: 68px;
        height: 68px;
        flex-shrink: 0;
        display: inline-block;
        background-color: #314028;
        -webkit-mask-size: contain;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-size: contain;
        mask-repeat: no-repeat;
        mask-position: center;
    }

    #dresscode .tl-text {
        text-align: left;
        flex: 1;
    }

    #dresscode .tl-time,
    #dresscode .tl-label {
        font-family: 'newyork_personal', serif;
        font-weight: normal;
        color: #314028;
        margin: 0;
        line-height: 1.35;
        font-size: 1.2rem;
        -webkit-text-stroke: 0.35px #314028;
    }

    @media (max-width: 900px) {
        #dresscode .dresscode-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        #dresscode .dc-title {
            font-size: 2.4rem;
        }

        #dresscode .dc-subtitle,
        #dresscode .dc-gender-text,
        #dresscode .dc-palette-title,
        #dresscode .dc-note,
        #dresscode .dc-inspiration-label,
        #dresscode .tl-time,
        #dresscode .tl-label {
            font-size: 1.15rem;
        }

        #dresscode .dc-gender-label {
            font-size: 2rem;
        }

        #dresscode .dc-icon {
            width: 90px;
        }

        #dresscode .dc-inspiration-img {
            width: min(280px, 88%);
        }

        #dresscode .dc-timeline {
            margin-top: 3rem;
        }

        #dresscode .tl-icon {
            width: 58px;
            height: 58px;
        }
    }

    @media (max-width: 480px) {
        #dresscode .dc-title {
            font-size: 2.2rem;
        }

        #dresscode .dc-gender-label {
            font-size: 1.85rem;
        }

        #dresscode .dc-subtitle,
        #dresscode .dc-gender-text,
        #dresscode .dc-palette-title,
        #dresscode .dc-note,
        #dresscode .dc-inspiration-label,
        #dresscode .tl-time,
        #dresscode .tl-label {
            font-size: 1.05rem;
        }
    }
</style>
{/literal}
