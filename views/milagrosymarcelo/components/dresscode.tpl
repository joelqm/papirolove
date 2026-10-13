<section class="dresscode-section" id="dresscode">

    <div class="dresscode-inner">

        <div class="dresscode-content" data-aos="fade-up" data-aos-delay="60">
            <h1 class="dc-title" data-aos="fade-up" data-aos-delay="70">Dress Code</h1>
            <p class="dc-subtitle" data-aos="fade-up" data-aos-delay="90">Formal</p>

            <img class="dc-illustration"
                 src="{$_layoutParams.root}views/milagrosymarcelo/imgs/dress_code.webp"
                 alt="Vestido y traje"
                 width="130"
                 height="123"
                 loading="lazy"
                 decoding="async"
                 data-aos="zoom-in"
                 data-aos-delay="105">

            <p class="dc-rule dc-rule-note" data-aos="fade-up" data-aos-delay="120">
                Reserva el blanco y colores<br>
                claros para la novia
            </p>
            <p class="dc-rule dc-rule-note" data-aos="fade-up" data-aos-delay="140">
                Reserva el azul para el novio
            </p>
        </div>

    </div>

</section>

{literal}
<style>
    #dresscode.dresscode-section {
        background: #fff;
        padding: 0;
        color: #8192A0;
    }

    #dresscode .dresscode-inner {
        width: 100%;
        max-width: 720px;
        margin: 0 auto;
        padding: 5rem 1.25rem 5.25rem;
        background: #fff;
        box-sizing: border-box;
    }

    #dresscode .dresscode-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        color: #8192A0;
        margin-bottom: 0;
        gap: 0;
    }

    #dresscode .dc-title {
        font-family: 'parfumerie-script', cursive;
        font-weight: normal;
        color: #8192A0;
        margin: 0 0 1.35rem;
        line-height: 1.05;
    }

    #dresscode .dc-subtitle {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 1.35rem;
        font-weight: normal;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #8192A0;
        margin: 0 0 2rem;
        -webkit-text-stroke: 0.4px #8192A0;
        paint-order: stroke fill;
    }

    #dresscode .dc-illustration {
        width: min(150px, 40vw);
        height: auto;
        display: block;
        margin: 0 auto 2rem;
    }

    #dresscode .dc-rule {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 1.1rem;
        font-weight: normal;
        letter-spacing: 1.2px;
        color: #8192A0;
        margin: 0;
        line-height: 1.5;
        -webkit-text-stroke: 0.4px #8192A0;
        paint-order: stroke fill;
    }

    #dresscode .dc-rule-note {
        font-size: 1.05rem;
        letter-spacing: 0.8px;
        text-transform: none;
        max-width: 24rem;
        margin: 0;
    }

    #dresscode .dc-rule-note + .dc-rule-note {
        margin-top: 1.15rem;
    }

    @media (max-width: 768px) {
        #dresscode .dresscode-inner {
            padding: 4.25rem 1rem 4.5rem;
        }

        #dresscode .dc-title {
            margin-bottom: 1.1rem;
            -webkit-text-stroke: 0.85px #8192A0;
            paint-order: stroke fill;
            font-variant-ligatures: none;
        }

        #dresscode .dc-subtitle {
            font-size: 1.2rem;
            margin: 0 0 1.75rem;
            -webkit-text-stroke: 0.4px #8192A0;
        }

        #dresscode .dc-illustration {
            width: min(130px, 38vw);
            margin-bottom: 1.75rem;
        }

        #dresscode .dc-rule,
        #dresscode .dc-rule-note {
            font-size: 1rem;
            -webkit-text-stroke: 0.4px #8192A0;
        }

        #dresscode .dc-rule-note + .dc-rule-note {
            margin-top: 1rem;
        }
    }

    @media (max-width: 480px) {
        #dresscode .dresscode-inner {
            padding: 3.75rem 1rem 4rem;
        }

        #dresscode .dc-subtitle {
            font-size: 1.1rem;
        }

        #dresscode .dc-rule,
        #dresscode .dc-rule-note {
            font-size: 0.95rem;
        }
    }
</style>
{/literal}
