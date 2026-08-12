<section class="gifts-section" id="gifts">

    <div class="gf-content" data-aos="fade-up">

        <div class="gf-icon" aria-hidden="true">
            <img src="{$_layoutParams.root}views/danielayjean/imgs/icono_regalo.webp" alt="">
        </div>

        <p class="gf-intro">Elige un obsequio para</p>

        <img class="gf-logo"
             src="{$_layoutParams.root}views/danielayjean/imgs/logo_02.webp"
             alt="Daniela y Jean">

        <span class="gf-btn">Transferencia</span>

        <div class="gf-bank">
            <div class="gf-bank-block">
                <p class="gf-bank-label">Bcp</p>
                <p class="gf-bank-number">194-98611458-31</p>
            </div>
            <div class="gf-bank-block">
                <p class="gf-bank-label">CCI</p>
                <p class="gf-bank-number">00219419861145803198</p>
            </div>
        </div>

        <span class="gf-btn">Colectivo Virtual</span>

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
        background-color: #768170;
        position: relative;
        overflow: hidden;
        padding: 80px 24px 100px;
        text-align: center;
        color: #ffffff;
        min-height: 100vh;
        font-family: 'NewAthenaUnicode', serif;
    }

    #gifts .gf-content {
        position: relative;
        z-index: 1;
        max-width: 720px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.85rem;
    }

    #gifts .gf-icon {
        width: 100px;
        height: 100px;
        color: #ffffff;
        margin: 0;
    }

    #gifts .gf-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    #gifts .gf-intro,
    #gifts .gf-bank-label,
    #gifts .gf-bank-number,
    #gifts .gf-secure {
        font-family: 'NewAthenaUnicode', serif;
        font-weight: normal;
        color: #ffffff;
        margin: 0;
    }

    #gifts .gf-intro {
        font-size: 1.25rem;
        line-height: 1.3;
    }

    #gifts .gf-logo {
        width: min(340px, 82vw);
        height: auto;
        display: block;
        margin: 0.05rem 0 0.15rem;
        filter: brightness(0) invert(1);
    }

    #gifts .gf-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 220px;
        background-color: #ffffff;
        color: #768170 !important;
        font-family: 'NewAthenaUnicode', serif;
        font-size: 1.15rem;
        font-weight: normal;
        text-decoration: none;
        padding: 0.75rem 2.4rem;
        border-radius: 50px;
        line-height: 1.2;
        cursor: default;
        pointer-events: none;
        box-sizing: border-box;
    }

    #gifts .gf-bank {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.7rem;
        margin: 0;
    }

    #gifts .gf-bank-block {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.1rem;
    }

    #gifts .gf-bank-label,
    #gifts .gf-bank-number {
        font-size: 1.2rem;
        line-height: 1.35;
        letter-spacing: 0.3px;
        color: #ffffff;
    }

    #gifts .izi-wrapper {
        margin-top: 0.8rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.6rem;
        color: #ffffff;
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
        color: #ffffff;
    }

    #gifts .izi-img {
        height: 28px;
        width: auto;
    }

    #gifts .gf-secure {
        font-size: 1.05rem;
        margin: 0 0 1rem;
        color: #ffffff;
    }

    #gifts .gf-products {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1100px;
        margin: 2rem auto 0;
    }

    #gifts .content-products {
        text-align: left;
    }

    @media (max-width: 768px) {
        #gifts.gifts-section {
            padding: 60px 18px 80px;
        }

        #gifts .gf-content {
            gap: 0.75rem;
        }

        #gifts .gf-icon {
            width: 88px;
            height: 88px;
        }

        #gifts .gf-logo {
            width: min(280px, 84vw);
        }

        #gifts .gf-btn {
            min-width: 220px;
            font-size: 1.1rem;
            padding: 0.7rem 2rem;
        }

        #gifts .gf-bank-label,
        #gifts .gf-bank-number {
            font-size: 1.1rem;
            word-break: break-word;
        }
    }
</style>
{/literal}
