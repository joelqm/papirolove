<div class="dresscode-container" id="dresscode">

    <div class="dresscode-content" data-aos="fade-up">

        <div class="dc-left">
            <h1 class="dc-title">Dress Code</h1>
            <p class="dc-subtitle">Etiqueta estricta</p>

            <div class="dc-genders">
                <div class="dc-gender">
                    <img src="{$_layoutParams.root}views/cynthiaykevin/imgs/imagen_ellas.webp" alt="Ellas" class="dc-icon">
                    <p class="dc-gender-label">Ellas</p>
                    <p class="dc-gender-text">Vestido Largo</p>
                </div>
                <div class="dc-gender">
                    <img src="{$_layoutParams.root}views/cynthiaykevin/imgs/imagen_ellos.webp" alt="Ellos" class="dc-icon">
                    <p class="dc-gender-label">Ellos</p>
                    <p class="dc-gender-text">Traje y corbata</p>
                </div>
            </div>
        </div>

        <div class="dc-right">
            <a class="dc-inspiration-label" href="https://pin.it/5I4YV1cCa" target="_blank" rel="noopener noreferrer">Inspiración</a>
            <img src="{$_layoutParams.root}views/cynthiaykevin/imgs/dress_code.webp"
                 alt="Inspiración dress code"
                 class="dc-inspiration-img">
        </div>

    </div>

</div>

{literal}
<style>
    #dresscode.dresscode-container {
        background: transparent;
        color: #525432;
        padding: 70px 24px 40px;
    }

    #dresscode .dresscode-content {
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 3rem;
        align-items: start;
        max-width: 980px;
        margin: 0 auto;
        color: #525432;
    }

    #dresscode .dc-left {
        text-align: center;
    }

    #dresscode .dc-title {
        font-family: 'photograph_signature', cursive;
        font-size: 3.4rem;
        font-weight: normal;
        color: #525432;
        margin: 0 0 0.35rem;
        line-height: 1.1;
    }

    #dresscode .dc-subtitle,
    #dresscode .dc-gender-text {
        font-family: 'newyork_personal', serif;
        color: #525432;
        font-weight: normal;
        margin: 0;
    }

    #dresscode .dc-subtitle {
        font-size: 1.35rem;
        margin-bottom: 2rem;
        -webkit-text-stroke: 0.4px #525432;
    }

    #dresscode .dc-genders {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        max-width: 420px;
        margin: 0 auto;
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
        color: #525432;
        margin: 0 0 0.55rem;
        line-height: 1.25;
    }

    #dresscode .dc-gender-text {
        font-size: 1.15rem;
        line-height: 1.45;
        margin-top: 0.15rem;
        -webkit-text-stroke: 0.4px #525432;
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
        background-color: #525432;
        color: #F3F0E2;
        font-family: 'newyork_personal', serif;
        font-size: 1.15rem;
        padding: 0.7rem 2rem;
        border-radius: 12px;
        cursor: pointer;
        text-decoration: none;
        -webkit-text-stroke: 0.4px #F3F0E2;
    }

    #dresscode .dc-inspiration-img {
        width: min(340px, 100%);
        height: auto;
        display: block;
        border-radius: 4px;
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
        #dresscode .dc-inspiration-label {
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
        #dresscode .dc-inspiration-label {
            font-size: 1.05rem;
        }
    }
</style>
{/literal}
