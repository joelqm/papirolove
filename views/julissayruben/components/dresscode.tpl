<section class="dresscode-container" id="dresscode">

    <img class="dc-flower dc-flower-br"
         src="{$_layoutParams.root}views/julissayruben/imgs/imagen_historia_flores_inferior_der.webp"
         alt=""
         aria-hidden="true">

    <div class="dc-grid">

        <!-- ===== TIMELINE ===== -->
        <div class="dc-timeline" data-aos="fade-up">
            <h2 class="dc-title">Timeline</h2>

            <ul class="tl-list">
                <li class="tl-item">
                    <span class="tl-icon">
                        <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_iglesia.webp" alt="">
                    </span>
                    <div class="tl-text">
                        <p class="tl-time">11:30 am</p>
                        <p class="tl-label">Ceremonia Religiosa</p>
                    </div>
                </li>

                <li class="tl-item">
                    <span class="tl-icon">
                        <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_copas.webp" alt="">
                    </span>
                    <div class="tl-text">
                        <p class="tl-time">2:30 pm</p>
                        <p class="tl-label">Cocktail de Bienvenida</p>
                    </div>
                </li>

                <li class="tl-item">
                    <span class="tl-icon">
                        <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_anillos.webp" alt="">
                    </span>
                    <div class="tl-text">
                        <p class="tl-time">3:00 pm</p>
                        <p class="tl-label">Ceremonia Civil</p>
                    </div>
                </li>

                <li class="tl-item">
                    <span class="tl-icon">
                        <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_cocina.webp" alt="">
                    </span>
                    <div class="tl-text">
                        <p class="tl-time">4:00 pm</p>
                        <p class="tl-label">Cena &amp; Discursos</p>
                    </div>
                </li>

                <li class="tl-item">
                    <span class="tl-icon">
                        <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_musica.webp" alt="">
                    </span>
                    <div class="tl-text">
                        <p class="tl-time">5:30 pm</p>
                        <p class="tl-label">Apertura de la Pista</p>
                    </div>
                </li>

                <li class="tl-item">
                    <span class="tl-icon">
                        <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_ramo.webp" alt="">
                    </span>
                    <div class="tl-text">
                        <p class="tl-time">6:00 pm</p>
                        <p class="tl-label">Bouquet</p>
                    </div>
                </li>

                <li class="tl-item">
                    <span class="tl-icon">
                        <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_botella.webp" alt="">
                    </span>
                    <div class="tl-text">
                        <p class="tl-time">6:30 pm</p>
                        <p class="tl-label">¡Lo mejor esta<br>por venir!</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- ===== DRESS CODE ===== -->
        <div class="dc-dress" data-aos="fade-up">
            <h2 class="dc-title">Dress Code</h2>

            <p class="dc-elegante">Elegante</p>

            <div class="dc-attire" aria-hidden="true">
                <span class="dc-attire-icon">
                    <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_varon.webp" alt="">
                </span>
                <span class="dc-attire-icon">
                    <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_dama.webp" alt="">
                </span>
            </div>

            <p class="dc-subtitle">Recepción en jardín</p>

            <p class="dc-note">
                Les recomendamos considerar un calzado adecuado para césped,
                especialmente si usarán tacones.
            </p>
        </div>

    </div>

</section>

{literal}
<style>
    #dresscode.dresscode-container {
        background-color: #FFFAF4;
        position: relative;
        overflow: hidden;
        padding: 80px 24px 100px;
        color: #6D8397;
    }

    #dresscode .dc-flower {
        position: absolute;
        z-index: 0;
        pointer-events: none;
        width: min(320px, 36vw);
    }

    #dresscode .dc-flower-br {
        bottom: -20px;
        right: -30px;
    }

    #dresscode .dc-grid {
        position: relative;
        z-index: 1;
        max-width: 980px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        align-items: start;
    }

    #dresscode .dc-title {
        font-family: 'AngellicaSignature', cursive;
        font-size: var(--jr-title);
        font-weight: normal;
        color: #6D8397;
        text-align: center;
        margin: 0 0 2rem;
        line-height: 1.1;
        -webkit-text-stroke: 0.5px #6D8397;
    }

    /* Timeline */
    #dresscode .tl-list {
        list-style: none;
        margin: 0 auto;
        padding: 0;
        max-width: 360px;
    }

    #dresscode .tl-item {
        display: flex;
        align-items: center;
        gap: 0.55rem;
        margin-bottom: 1.4rem;
    }

    #dresscode .tl-icon {
        width: 68px;
        height: 68px;
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    #dresscode .tl-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        mix-blend-mode: screen;
    }

    #dresscode .tl-text {
        text-align: center;
        flex: 1;
    }

    #dresscode .tl-time,
    #dresscode .tl-label {
        font-family: 'NewAthenaUnicode', serif;
        font-weight: normal;
        color: #6D8397;
        margin: 0;
        line-height: 1.35;
        font-size: var(--jr-body);
    }

    /* Dress Code */
    #dresscode .dc-dress {
        text-align: center;
    }

    #dresscode .dc-elegante,
    #dresscode .dc-subtitle,
    #dresscode .dc-note {
        font-family: 'NewAthenaUnicode', serif;
        font-weight: normal;
        color: #6D8397;
    }

    #dresscode .dc-elegante {
        font-size: var(--jr-body);
        margin: 0 0 1.5rem;
    }

    #dresscode .dc-attire {
        display: flex;
        justify-content: center;
        align-items: flex-end;
        gap: 1.5rem;
        margin-bottom: 1.8rem;
    }

    #dresscode .dc-attire-icon {
        width: 120px;
        height: 120px;
        display: inline-flex;
    }

    #dresscode .dc-attire-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        mix-blend-mode: screen;
    }

    #dresscode .dc-subtitle {
        font-size: var(--jr-body);
        margin: 0 0 1.5rem;
    }

    #dresscode .dc-note {
        font-size: var(--jr-body);
        max-width: 380px;
        margin: 0 auto;
        line-height: 1.55;
    }

    @media (max-width: 768px) {
        #dresscode.dresscode-container {
            padding: 60px 18px 100px;
        }

        #dresscode .dc-grid {
            grid-template-columns: 1fr;
            gap: 3.5rem;
        }

        #dresscode .dc-flower {
            width: min(180px, 46vw);
        }

        #dresscode .tl-icon {
            width: 58px;
            height: 58px;
        }

        #dresscode .dc-attire-icon {
            width: 96px;
            height: 96px;
        }

        #dresscode .dc-note {
            margin-bottom: 3rem;
        }
    }
</style>
{/literal}
