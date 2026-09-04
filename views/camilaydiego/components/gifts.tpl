<div class="gift-container" id="gifts">

    <div class="gifts-layout" data-aos="fade-up">
        <div class="gifts-content">
            <h1 class="gifts-title">Regalos</h1>

            <p class="gifts-intro">
                Si deseas hacernos llegar un detalle, puedes hacerlo aqu&iacute;.
            </p>

            <div class="gifts-block">
                <h2 class="gifts-heading">Colectivo Virtual</h2>
                <button type="button" class="gifts-btn js-gifts-colectivo">Regala Aqu&iacute;</button>
            </div>

            <div class="gifts-block">
                <h2 class="gifts-heading">Transferencia</h2>
                <button type="button" class="gifts-btn js-gifts-transfer">Regala Aqu&iacute;</button>
            </div>

            <div class="gifts-bank" id="gifts-bank" x-ms-format-detection="none">
                <p class="gifts-bank-line">Cuenta en Soles</p>
                <p class="gifts-bank-line">BCP</p>
                <p class="gifts-bank-line"><span class="gifts-bank-num">215-18952469-0-03</span></p>
                <p class="gifts-bank-line gifts-bank-line--cci">CCI: <span class="gifts-bank-num">00221511895246900329</span></p>

                <p class="gifts-bank-line gifts-bank-line--spaced">Cuenta en D&oacute;lares</p>
                <p class="gifts-bank-line">BCP</p>
                <p class="gifts-bank-line"><span class="gifts-bank-num">215-08471486-1-52</span></p>
                <p class="gifts-bank-line gifts-bank-line--cci">CCI: <span class="gifts-bank-num">00221510847148615226</span></p>
            </div>
        </div>

        <img class="gifts-cats"
             src="{$_layoutParams.root}views/camilaydiego/imgs/regalos_1.webp"
             alt=""
             width="509"
             height="540"
             loading="lazy"
             decoding="async"
             aria-hidden="true">
    </div>

</div>

<div class="gifts-modal" id="gifts-modal" hidden aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="gifts-modal-title">
    <div class="gifts-modal__overlay js-gifts-modal-close" aria-hidden="true"></div>
    <div class="gifts-modal__dialog">
        <button type="button" class="gifts-modal__close js-gifts-modal-close" aria-label="Cerrar">&times;</button>

        <header class="gifts-modal__header">
            <h2 class="gifts-modal__title" id="gifts-modal-title">Colectivo Virtual</h2>
            <button type="button" class="gifts-modal__cart-toggle js-gifts-cart-toggle" aria-label="Ver carrito">
                <i class="fas fa-gift" aria-hidden="true"></i>
                <span class="gifts-modal__cart-badge" data-count="0">0</span>
            </button>
        </header>

        <div class="gifts-modal__layout gifts-modal__products">
            <aside class="sidebar gifts-modal__sidebar" id="gifts-modal-categories">
                <button type="button" class="category-button primary" data-id="0">TODAS LAS CATEGOR&Iacute;AS</button>
            </aside>

            <div class="gifts-modal__catalog">
                <div class="gifts-modal__loader" id="gifts-modal-loader" hidden aria-live="polite">
                    <div class="gifts-modal__spinner" aria-hidden="true"></div>
                    <p>Cargando obsequios&hellip;</p>
                </div>
                <main class="products gifts-modal__products-grid" id="gifts-modal-products"></main>
                <p class="gifts-modal__empty" id="gifts-modal-empty" hidden>No hay obsequios en esta categor&iacute;a.</p>
            </div>

            <aside class="gifts-modal__cart" id="gifts-modal-cart" aria-label="Tus obsequios">
                <div class="gifts-modal__cart-head">
                    <h3>Tus obsequios</h3>
                </div>
                <div class="gifts-modal__cart-items"></div>
                <div class="gifts-modal__cart-empty">A&uacute;n no has elegido ning&uacute;n regalo.</div>
                <div class="gifts-modal__cart-foot">
                    <div class="gifts-modal__cart-total">
                        <span>Total:</span>
                        <span class="gifts-modal__total-price">S/. 0</span>
                    </div>
                    <button type="button" class="gifts-modal__checkout checkout-button">ENVIAR OBSEQUIO</button>
                </div>
            </aside>
        </div>
    </div>
</div>

<style>
    #gifts.gift-container {
        background: #CFB89D;
        color: #fff;
        padding: 3.75rem 1.25rem 4.5rem;
        position: relative;
        overflow: hidden;
    }

    #gifts .gifts-layout {
        position: relative;
        max-width: 34rem;
        margin: 0 auto;
        z-index: 1;
    }

    #gifts .gifts-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding-bottom: 7rem;
    }

    #gifts .gifts-title {
        font-family: 'parfumerie-script', cursive;
        font-weight: normal;
        color: #fff;
        margin: 0 0 1rem;
        line-height: 1.05;
    }

    #gifts .gifts-intro {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 1rem;
        letter-spacing: 1.8px;
        text-transform: uppercase;
        color: #fff;
        margin: 0 auto 2rem;
        max-width: 26rem;
        line-height: 1.45;
        -webkit-text-stroke: 0.4px #fff;
        paint-order: stroke fill;
    }

    #gifts .gifts-block {
        width: 100%;
        margin-bottom: 1.75rem;
    }

    #gifts .gifts-heading {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 1.55rem;
        font-weight: normal;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: #fff;
        margin: 0 0 0.85rem;
        line-height: 1.15;
        -webkit-text-stroke: 0.4px #fff;
        paint-order: stroke fill;
    }

    #gifts .gifts-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 150px;
        padding: 0.55rem 1.6rem;
        border: none;
        border-radius: 999px;
        background: #CBD7DF;
        color: #908C70;
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: opacity 0.3s ease;
    }

    #gifts .gifts-btn:hover {
        opacity: 0.88;
    }

    #gifts .gifts-bank {
        margin-top: 0.25rem;
        width: 100%;
    }

    #gifts .gifts-bank-line {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 0.95rem;
        letter-spacing: 1px;
        color: #fff;
        margin: 0;
        line-height: 1.4;
        -webkit-text-stroke: 0.35px #fff;
        paint-order: stroke fill;
    }

    /* Evitar que iOS/Safari pinte números como links azules */
    #gifts .gifts-bank-line a,
    #gifts .gifts-bank-num,
    #gifts .gifts-bank-line a:link,
    #gifts .gifts-bank-line a:visited,
    #gifts .gifts-bank-line a:hover,
    #gifts .gifts-bank-line a:active,
    #gifts .gifts-bank a[x-apple-data-detectors] {
        color: #fff !important;
        -webkit-text-fill-color: #fff !important;
        text-decoration: none !important;
        border-bottom: none !important;
        pointer-events: none;
        cursor: text;
    }

    #gifts .gifts-bank-line--cci {
        margin-bottom: 0.85rem;
    }

    #gifts .gifts-bank-line--spaced {
        margin-top: 0.35rem;
    }

    #gifts .gifts-cats {
        position: absolute;
        right: -12.75rem;
        bottom: 0;
        width: min(220px, 52vw);
        height: auto;
        pointer-events: none;
        z-index: 2;
    }

    .gifts-modal {
        position: fixed;
        inset: 0;
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
    }

    .gifts-modal[hidden] {
        display: none !important;
    }

    body.gifts-modal-open {
        overflow: hidden;
    }

    body.gifts-modal-open .cart,
    body.gifts-modal-open .show-cart {
        display: none !important;
    }

    .gifts-modal__overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
    }

    .gifts-modal__dialog {
        position: relative;
        z-index: 1;
        width: min(1180px, 100%);
        height: min(85vh, 820px);
        max-height: 85vh;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        background: #fff;
        border-radius: 18px;
        padding: 1.25rem 1.25rem 1rem;
        box-shadow: 0 18px 50px rgba(0, 0, 0, 0.22);
    }

    .gifts-modal__close {
        position: absolute;
        top: 0.65rem;
        right: 0.85rem;
        border: none;
        background: transparent;
        color: #908C70;
        font-size: 2rem;
        line-height: 1;
        cursor: pointer;
        padding: 0;
        z-index: 3;
    }

    .gifts-modal__header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        flex-shrink: 0;
        padding: 0 2.25rem 0.85rem 0.25rem;
        border-bottom: 1px solid #ece8e2;
    }

    .gifts-modal__title {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 1.35rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #908C70;
        margin: 0;
        line-height: 1.2;
    }

    .gifts-modal__cart-toggle {
        display: none;
        align-items: center;
        justify-content: center;
        gap: 0.35rem;
        min-width: 44px;
        min-height: 44px;
        padding: 0.4rem 0.75rem;
        border: 1px solid #CBD7DF;
        border-radius: 999px;
        background: #fff;
        color: #908C70;
        cursor: pointer;
    }

    .gifts-modal__cart-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 1.35rem;
        height: 1.35rem;
        padding: 0 0.3rem;
        border-radius: 999px;
        background: #CFB89D;
        color: #fff;
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 0.75rem;
        line-height: 1;
    }

    .gifts-modal__cart-badge[data-count="0"] {
        display: none;
    }

    .gifts-modal__layout {
        flex: 1;
        min-height: 0;
        display: grid !important;
        grid-template-columns: 210px minmax(0, 1fr) 280px;
        gap: 1rem;
        padding: 0.75rem 0 0 !important;
        background: transparent;
        overflow: hidden;
        align-items: stretch;
    }

    .gifts-modal__sidebar {
        width: auto !important;
        min-height: 0;
        max-height: 100%;
        overflow-y: auto;
        overflow-x: hidden;
        padding-right: 0.15rem;
        -webkit-overflow-scrolling: touch;
    }

    .gifts-modal__catalog {
        position: relative;
        min-height: 0;
        max-height: 100%;
        height: 100%;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .gifts-modal__products-grid.products {
        flex: 1 1 auto;
        min-height: 0;
        max-height: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto !important;
        overscroll-behavior: contain;
        -webkit-overflow-scrolling: touch;
        align-content: start;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 0.85rem;
        padding: 0 0.35rem 0.5rem 0;
        scrollbar-gutter: stable;
    }

    .gifts-modal__loader {
        position: absolute;
        inset: 0;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        background: rgba(255, 255, 255, 0.92);
        color: #908C70;
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
    }

    .gifts-modal__loader[hidden] {
        display: none !important;
    }

    .gifts-modal__spinner {
        width: 42px;
        height: 42px;
        border: 3px solid #e5dfd7;
        border-top-color: #CFB89D;
        border-radius: 50%;
        animation: gifts-spin 0.75s linear infinite;
    }

    @keyframes gifts-spin {
        to { transform: rotate(360deg); }
    }

    .gifts-modal__empty {
        margin: 2rem auto;
        text-align: center;
        color: #999;
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 0.95rem;
    }

    .gifts-modal__empty[hidden] {
        display: none !important;
    }

    .gifts-modal__catalog.is-loading .gifts-modal__products-grid,
    .gifts-modal__catalog.is-loading .gifts-modal__empty {
        visibility: hidden;
    }

    .gifts-modal__products-grid .product-image {
        height: 140px;
    }

    .gifts-modal__products-grid .product-info {
        padding: 12px;
    }

    .gifts-modal__products-grid .product-title {
        font-size: 14px;
        line-height: 1.25;
    }

    .gifts-modal__products-grid .button-gift,
    .gifts-modal__products-grid .button-free-gift {
        width: 100%;
        margin-top: 0.5rem;
        padding: 0.5rem 0.75rem;
        border: none;
        border-radius: 999px;
        background: #CFB89D;
        color: #fff;
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 0.82rem;
        cursor: pointer;
    }

    .gifts-modal__cart {
        min-height: 0;
        display: flex;
        flex-direction: column;
        background: #f7f5f2;
        border-radius: 14px;
        padding: 0.85rem 0.85rem 0.75rem;
        overflow: hidden;
    }

    .gifts-modal__cart-head h3 {
        margin: 0 0 0.65rem;
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 1rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #908C70;
    }

    .gifts-modal__cart-items {
        flex: 1;
        min-height: 0;
        overflow-y: auto;
        margin-bottom: 0.65rem;
    }

    .gifts-modal__cart-items .cart-item {
        background: #fff;
        border-radius: 10px;
        padding: 0.55rem;
        margin-bottom: 0.55rem;
        border-bottom: none;
    }

    .gifts-modal__cart-items .cart-item-image {
        width: 52px;
        height: 52px;
    }

    .gifts-modal__cart-items .cart-item-name {
        font-size: 0.82rem;
        line-height: 1.25;
    }

    .gifts-modal__cart-items .cart-item-price {
        font-size: 0.82rem;
    }

    .gifts-modal__cart-empty {
        display: none;
        text-align: center;
        color: #999;
        font-size: 0.88rem;
        padding: 1.5rem 0.5rem;
    }

    .gifts-modal__cart.is-empty .gifts-modal__cart-empty {
        display: block;
    }

    .gifts-modal__cart.is-empty .gifts-modal__cart-items {
        display: none;
    }

    .gifts-modal__cart-foot {
        flex-shrink: 0;
        border-top: 1px solid #e5dfd7;
        padding-top: 0.65rem;
    }

    .gifts-modal__cart-total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: 'Athelas-Regular', Georgia, serif;
        color: #908C70;
        margin-bottom: 0.55rem;
        font-size: 0.95rem;
    }

    .gifts-modal__total-price {
        font-size: 1.05rem;
        font-weight: 600;
    }

    .gifts-modal__checkout {
        width: 100%;
        margin-top: 0;
        border-radius: 999px;
        background: #908C70;
        font-size: 0.88rem;
        letter-spacing: 0.5px;
    }

    .gifts-modal__products .category-button {
        font-family: 'Athelas-Regular', Georgia, serif;
        font-size: 12px;
        padding: 0.7rem 0.85rem;
        border-radius: 999px;
    }

    .gifts-modal__products .category-button.primary {
        background-color: #CBD7DF;
        color: #908C70;
        border: none;
    }

    @media (min-width: 1100px) {
        .gifts-modal__products-grid.products {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    @media (max-width: 900px) {
        .gifts-modal__layout {
            grid-template-columns: 180px minmax(0, 1fr) 250px;
        }
    }

    @media (max-width: 768px) {
        #gifts.gift-container {
            padding: 3.25rem 1rem 4rem;
        }

        #gifts .gifts-title {
            -webkit-text-stroke: 0.9px #fff;
            paint-order: stroke fill;
            font-variant-ligatures: none;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.12);
        }

        #gifts .gifts-intro {
            font-size: 0.9rem;
            margin-bottom: 1.75rem;
            -webkit-text-stroke: 0.4px #fff;
        }

        #gifts .gifts-heading {
            font-size: 1.25rem;
            -webkit-text-stroke: 0.45px #fff;
        }

        #gifts .gifts-content {
            padding-bottom: 6.5rem;
        }

        #gifts .gifts-cats {
            width: min(175px, 46vw);
            right: -1.25rem;
        }

        .gifts-modal {
            padding: 0;
            align-items: flex-end;
        }

        .gifts-modal__dialog {
            width: 100%;
            height: 92vh;
            max-height: 92vh;
            border-radius: 16px 16px 0 0;
            padding: 1rem 0.85rem 0.85rem;
        }

        .gifts-modal__header {
            padding-right: 2rem;
        }

        .gifts-modal__cart-toggle {
            display: inline-flex;
        }

        .gifts-modal__layout {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .gifts-modal__sidebar {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            gap: 0.5rem;
            overflow-x: auto;
            overflow-y: hidden;
            padding-bottom: 0.15rem;
            flex-shrink: 0;
        }

        .gifts-modal__sidebar .category-button {
            flex: 0 0 auto;
            white-space: nowrap;
        }

        .gifts-modal__catalog {
            flex: 1;
            min-height: 0;
            max-height: none;
            overflow: hidden;
        }

        .gifts-modal__products-grid.products {
            flex: 1;
            min-height: 0;
            max-height: 100%;
            overflow-y: auto !important;
        }

        .gifts-modal__cart {
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10002;
            height: min(72vh, 520px);
            border-radius: 16px 16px 0 0;
            box-shadow: 0 -8px 30px rgba(0, 0, 0, 0.18);
            transform: translateY(110%);
            transition: transform 0.3s ease;
        }

        body.gifts-modal-cart-open .gifts-modal__cart {
            display: flex;
            transform: translateY(0);
        }

        body.gifts-modal-cart-open .gifts-modal__overlay {
            background: rgba(0, 0, 0, 0.65);
        }

        .gifts-modal__products-grid.products {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 480px) {
        #gifts .gifts-intro {
            font-size: 0.86rem;
        }

        #gifts .gifts-heading {
            font-size: 1.2rem;
        }

        #gifts .gifts-bank-line {
            font-size: 0.88rem;
        }

        #gifts .gifts-cats {
            width: min(150px, 40vw);
            right: -0.5rem;
        }

        #gifts .gifts-content {
            padding-bottom: 10.5rem;
        }
    }
</style>

<script>
    $(document).ready(function () {
        $(".js-gifts-transfer").on("click", function () {
            var $bank = $("#gifts-bank");
            if (!$bank.length) {
                return;
            }
            $("html, body").animate({
                scrollTop: $bank.offset().top - 120
            }, 500);
        });
    });
</script>
