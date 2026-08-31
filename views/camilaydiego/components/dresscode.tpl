<section class="dresscode-section" id="dresscode">

    <div class="dresscode-inner">

        <div class="dresscode-content" data-aos="fade-up">
            <h1 class="dc-title">Dress Code</h1>
            <p class="dc-subtitle">Formal Elegante</p>

            <img class="dc-illustration"
                 src="{$_layoutParams.root}views/camilaydiego/imgs/dress_code.webp"
                 alt="Vestido y traje">

            <p class="dc-rule">ELLOS: Traje y Corbata</p>
            <p class="dc-rule">ELLAS: Vestido Largo</p>
        </div>

        <img class="dc-bottom-image"
             src="{$_layoutParams.root}views/camilaydiego/imgs/dress_code_1.webp"
             alt=""
             data-aos="fade-up">

    </div>

</section>

{literal}
<style>
    #dresscode.dresscode-section {
        background: #fff;
        padding: 0;
        color: #908C70;
    }

    #dresscode .dresscode-inner {
        width: 100%;
        max-width: 720px;
        margin: 0 auto;
        padding: 1.5rem 1.25rem 2rem;
        background: #fff;
        box-sizing: border-box;
    }

    #dresscode .dresscode-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        color: #908C70;
        margin-bottom: 0.65rem;
        gap: 0;
    }

    #dresscode .dc-title {
        font-family: 'parfumerie-script', cursive;
        font-weight: normal;
        color: #908C70;
        margin: 0;
        line-height: 1.05;
    }

    #dresscode .dc-subtitle {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 1.05rem;
        font-weight: normal;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: #908C70;
        margin: 0.2rem 0 0.4rem;
        -webkit-text-stroke: 0.4px #908C70;
        paint-order: stroke fill;
    }

    #dresscode .dc-illustration {
        width: min(130px, 36vw);
        height: auto;
        display: block;
        margin: 0 auto 0.35rem;
    }

    #dresscode .dc-rule {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 1.05rem;
        font-weight: normal;
        letter-spacing: 1.5px;
        color: #908C70;
        margin: 0;
        line-height: 1.2;
        -webkit-text-stroke: 0.4px #908C70;
        paint-order: stroke fill;
    }

    #dresscode .dc-bottom-image {
        width: 100%;
        max-width: 520px;
        height: auto;
        display: block;
        margin: 0.35rem auto 0;
    }

    @media (max-width: 768px) {
        #dresscode .dresscode-inner {
            padding: 1.25rem 1rem 1.75rem;
        }

        #dresscode .dc-subtitle {
            font-size: 0.95rem;
            margin: 0.15rem 0 0.35rem;
        }

        #dresscode .dc-illustration {
            width: min(115px, 34vw);
            margin-bottom: 0.3rem;
        }

        #dresscode .dc-rule {
            font-size: 0.98rem;
        }
    }

    @media (max-width: 480px) {
        #dresscode .dc-subtitle,
        #dresscode .dc-rule {
            font-size: 0.9rem;
        }
    }
</style>
{/literal}
