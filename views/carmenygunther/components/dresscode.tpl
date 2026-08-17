<section class="dresscode-section" id="dresscode">

    <div class="dresscode-pattern-layer">
        <div class="dresscode-inner">

            <div class="dresscode-content" data-aos="fade-up">
                <h1 class="dc-title">Dress Code</h1>
                <p class="dc-subtitle">Etiqueta estricta</p>

                <div class="dc-genders">
                    <div class="dc-gender">
                        <img src="{$_layoutParams.root}views/carmenygunther/imgs/imagen_ellas.webp" alt="Ellas" class="dc-icon">
                        <p class="dc-gender-label">Ellas</p>
                        <p class="dc-gender-text">Vestido Largo</p>
                    </div>
                    <div class="dc-gender">
                        <img src="{$_layoutParams.root}views/carmenygunther/imgs/imagen_ellos.webp" alt="Ellos" class="dc-icon">
                        <p class="dc-gender-label">Ellos</p>
                        <p class="dc-gender-text">Traje y corbata</p>
                    </div>
                </div>

                <div class="dc-reserved-colors">
                    <p>Reserva estos colores<br>para los novios</p>
                    <div class="dc-color-swatches" aria-label="Colores reservados para los novios">
                        <span class="dc-color-swatch dc-color-swatch--white" title="Blanco"></span>
                        <span class="dc-color-swatch dc-color-swatch--cream" title="Crema"></span>
                        <span class="dc-color-swatch dc-color-swatch--navy" title="Azul marino"></span>
                    </div>
                </div>
            </div>

            {include file="views/carmenygunther/components/attendance.tpl"}

        </div>
    </div>

</section>

{literal}
<style>
    #dresscode .dresscode-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 600px;
        margin: 0 auto;
        color: #99948C;
        text-align: center;
        gap: 0;
    }

    #dresscode .dc-title {
        font-family: 'photograph_signature', cursive;
        font-size: 3.2rem;
        font-weight: normal;
        color: #99948C;
        margin: 0;
        line-height: 1;
    }

    #dresscode .dc-subtitle,
    #dresscode .dc-gender-text {
        font-family: 'newyork_personal', serif;
        color: #99948C;
        font-weight: normal;
        margin: 0;
    }

    #dresscode .dc-subtitle {
        font-size: 1.25rem;
        margin: 0.35rem 0 1.15rem;
        -webkit-text-stroke: 0.4px #99948C;
    }

    #dresscode .dc-genders {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2.75rem;
        max-width: 400px;
        margin: 0 auto;
    }

    #dresscode .dc-gender {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0;
    }

    #dresscode .dc-icon {
        width: 100px;
        height: auto;
        margin: 0 0 0.3rem;
    }

    #dresscode .dc-gender-label {
        font-family: 'photograph_signature', cursive;
        font-size: 2.15rem;
        color: #99948C;
        margin: 0;
        line-height: 1;
    }

    #dresscode .dc-gender-text {
        font-size: 1.08rem;
        line-height: 1.25;
        margin: 0.2rem 0 0;
        -webkit-text-stroke: 0.4px #99948C;
    }

    #dresscode .dc-reserved-colors {
        margin-top: 1.2rem;
        font-family: 'newyork_personal', serif;
        font-size: 1rem;
        line-height: 1.25;
        color: #99948C;
    }

    #dresscode .dc-reserved-colors p {
        margin: 0;
    }

    #dresscode .dc-color-swatches {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.6rem;
        margin-top: 0.55rem;
    }

    #dresscode .dc-color-swatch {
        display: block;
        width: 26px;
        height: 26px;
        border-radius: 50%;
    }

    #dresscode .dc-color-swatch--white {
        background: #fff;
        border: 1px solid #bcb8af;
    }

    #dresscode .dc-color-swatch--cream {
        background: #eee4d2;
    }

    #dresscode .dc-color-swatch--navy {
        background: #07304d;
    }

    #dresscode .attendace-container {
        background: transparent;
        padding: 1.35rem 0 0;
        color: #99948C;
    }

    #dresscode #attendance .gift-title-small {
        margin: 0;
        font-size: 3rem;
        line-height: 1;
        color: #99948C !important;
    }

    #dresscode #attendance .gift-section .text {
        width: auto;
        max-width: 22rem;
        margin: 0.5rem auto 0;
        padding: 0;
        font-size: 1.12rem;
        line-height: 1.3;
    }

    #dresscode #attendance .gift-section .date {
        width: auto;
        margin: 0.35rem 0 0.65rem;
        padding: 0;
        font-size: 2.5rem;
        line-height: 1.2;
    }

    #dresscode #attendance .button-3 {
        min-width: 110px;
        padding: 0.5rem 1.1rem;
        border-radius: 12px;
        background: #99948C;
        color: #fff;
        font-size: 1rem;
        line-height: 1;
    }

    @media (max-width: 900px) {
        #dresscode .dc-title {
            font-size: 2.3rem;
        }

        #dresscode .dc-subtitle,
        #dresscode .dc-gender-text {
            font-size: 1.05rem;
        }

        #dresscode .dc-gender-label {
            font-size: 1.85rem;
        }

        #dresscode .dc-icon {
            width: 80px;
        }

        #dresscode #attendance .gift-title-small {
            font-size: 2.35rem !important;
        }
    }

    @media (max-width: 480px) {
        #dresscode .dc-title {
            font-size: 2.1rem;
        }

        #dresscode .dc-gender-label {
            font-size: 1.7rem;
        }

        #dresscode .dc-subtitle,
        #dresscode .dc-gender-text {
            font-size: 1rem;
        }

        #dresscode .dc-genders {
            gap: 1.25rem;
        }

        #dresscode .dc-subtitle {
            margin-bottom: 0.95rem;
        }

        #dresscode .dc-reserved-colors {
            margin-top: 1rem;
        }

        #dresscode .attendace-container {
            padding-top: 1.1rem;
        }
    }
</style>
{/literal}
