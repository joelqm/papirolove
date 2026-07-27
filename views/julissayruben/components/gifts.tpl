<section class="gifts-section" id="gifts">

    <img class="gf-flower gf-flower-tl"
         src="{$_layoutParams.root}views/julissayruben/imgs/imagen_historia_flores_superior_izq.webp"
         alt=""
         aria-hidden="true">

    <div class="gf-content" data-aos="fade-up">

        <div class="gf-icon" aria-hidden="true">
            <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_regalo.webp" alt="">
        </div>

        <p class="gf-intro">Elige un obsequio para</p>

        <h2 class="gf-names">Julissa &amp; Rubén</h2>

        <p class="gf-text">
            Celebrar este día a tu lado es el regalo más valioso que podemos recibir.<br>
            Sin embargo, si deseas obsequiarnos un detalle<br>
            para esta nueva etapa, hemos preparado algunas<br>
            sugerencias con mucho cariño
        </p>

        <a class="gf-btn" href="https://wa.me/51984464752" target="_blank" rel="noopener noreferrer">Yape</a>

        <p class="gf-phone">984 464 752</p>

        <a class="gf-btn" href="https://wa.me/51984464752?text=Hola%2C%20quiero%20participar%20del%20colectivo%20virtual" target="_blank" rel="noopener noreferrer">Colectivo Virtual</a>

        <div class="izi-wrapper">
            <div class="izi-wrapper2">
                <p>Powered by</p>
                <img class="izi-img" src="{$_layoutParams.root}views/layout/neela/images/izipay.png"
                    alt="Logotipo de Izipay">
            </div>
            <img class="izi-img" src="{$_layoutParams.root}views/layout/neela/images/cards.png" alt="Tarjetas de pago"
                style="width: 100px;">
        </div>

        <p class="gf-secure">Todas tus transacciones son 100% seguras</p>

    </div>

    <div class="gf-products" data-aos="fade-up">
        <div class="content-products">
            <aside class="sidebar">
                <button class="category-button primary" data-id="0">TODAS LAS CATEGORÍAS</button>
                <button class="category-button" data-id="1">LUNA DE MIEL</button>
                <button class="category-button" data-id="2">MOBILIARIO &amp; DECORACION</button>
                <button class="category-button" data-id="4">TECNOLOGIA</button>
                <button class="category-button" data-id="5">REGALO LIBRE</button>
            </aside>

            <main class="products">
            </main>
        </div>
    </div>

</section>

{literal}
<style>
    #gifts.gifts-section {
        background-color: #FFFAF4;
        position: relative;
        overflow: hidden;
        padding: 80px 24px 100px;
        text-align: center;
        color: #6D8397;
    }

    #gifts .gf-flower {
        position: absolute;
        z-index: 0;
        pointer-events: none;
    }

    #gifts .gf-flower-tl {
        top: -10px;
        left: -20px;
        width: min(280px, 34vw);
    }

    #gifts .gf-content {
        position: relative;
        z-index: 1;
        max-width: 720px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #gifts .gf-icon {
        width: 110px;
        height: 110px;
        margin-bottom: 1.2rem;
        color: #6D8397;
    }

    #gifts .gf-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        mix-blend-mode: screen;
    }

    #gifts .gf-intro,
    #gifts .gf-text,
    #gifts .gf-phone,
    #gifts .gf-secure {
        font-family: 'NewAthenaUnicode', serif;
        font-weight: normal;
        color: #6D8397;
        margin: 0;
    }

    #gifts .gf-intro {
        font-size: var(--jr-body);
        margin-bottom: 0.4rem;
    }

    #gifts .gf-names {
        font-family: 'AngellicaSignature', cursive;
        font-size: var(--jr-title);
        font-weight: normal;
        color: #6D8397;
        margin: 0 0 1.4rem;
        line-height: 1.1;
        -webkit-text-stroke: 0.5px #6D8397;
    }

    #gifts .gf-text {
        font-size: var(--jr-body);
        line-height: 1.5;
        margin-bottom: 2rem;
        max-width: 680px;
        width: 100%;
    }

    #gifts .gf-btn {
        display: inline-block;
        background-color: #6D8397;
        color: #fff !important;
        font-family: 'NewAthenaUnicode', serif;
        font-size: var(--jr-body);
        font-weight: normal;
        text-decoration: none;
        padding: 0.7rem 2.6rem;
        border-radius: 999px;
        transition: background-color 0.25s ease, transform 0.2s ease;
    }

    #gifts .gf-btn:hover {
        background-color: #5a7184;
        color: #fff !important;
        text-decoration: none;
        transform: translateY(-1px);
    }

    #gifts .gf-phone {
        font-size: var(--jr-body);
        margin: 0.9rem 0;
        letter-spacing: 1px;
    }

    #gifts .izi-wrapper {
        margin-top: 2.2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.6rem;
        color: #6D8397;
        font-family: 'NewAthenaUnicode', serif;
    }

    #gifts .izi-wrapper2 {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    #gifts .izi-wrapper2 p {
        margin: 0;
        font-size: 0.95rem;
    }

    #gifts .izi-img {
        height: 28px;
        width: auto;
    }

    #gifts .gf-secure {
        font-size: 1.05rem;
        margin-top: 0.8rem;
        margin-bottom: 2.5rem;
    }

    #gifts .gf-products {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
    }

    #gifts .content-products {
        text-align: left;
    }

    @media (max-width: 768px) {
        #gifts.gifts-section {
            padding: 60px 18px 80px;
        }

        #gifts .gf-flower-tl {
            width: min(180px, 48vw);
        }

        #gifts .gf-icon {
            width: 90px;
            height: 90px;
        }

        #gifts .gf-text {
            font-size: 1.1rem;
            max-width: 100%;
        }
    }
</style>
{/literal}
