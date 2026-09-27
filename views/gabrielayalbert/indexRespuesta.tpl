<div class="response-container">
    <div class="stepper-container">
        <div class="stepper-wrapper">


            <div class="content-wrapper">
                <h2 class="section-title"></h2>
                <p class="section-message"></p>
                <p class="couple-thanks-name font-photograph_signature">Gabriela <span>&amp;</span> Alberth</p>
                <a href="{$_layoutParams.root}gabrielayalbert/" class="back-link">
                    <span class="back-icon"></span> Volver
                </a>
            </div>
        </div>
    </div>

</div>
<style>
    @font-face {
        font-family: 'photograph_signature';
        src: url("../fonts/photograph_signature.woff2") format("woff2"),
            url("../fonts/photograph_signature.ttf") format("truetype");
        font-display: swap;
    }

    @font-face {
        font-family: 'Forum';
        src: url("../fonts/Forum-Regular.ttf");
    }

    .response-container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #F8F9F5;
    }


    /* Container Styles */
    .stepper-container {

        max-width: 600px;
        min-height: 200px;
        margin: 40px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .stepper-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Content Styles */
    .content-wrapper {
        text-align: center;
        width: 100%;
    }

    .section-title {
        font-family: "photograph_signature", cursive;
        color: #314028;
        margin-bottom: 15px;
        font-size: 2.6rem;
        font-weight: normal;
    }

    .section-message {
        font-family: "Forum", serif;
        color: #314028;
        line-height: 1.6;
        margin-bottom: 18px;
        font-size: 16px;
    }

    .couple-thanks-name {
        font-family: "photograph_signature", cursive;
        color: #314028;
        font-size: 2.4rem;
        font-weight: normal;
        letter-spacing: 1px;
        line-height: 1.1;
        margin: 0 0 24px;
    }

    .couple-thanks-name span {
        margin: 0 0.35rem;
    }

    .back-link {
        font-family: "Forum", serif;
        display: inline-flex;
        align-items: center;
        color: #314028;
        text-decoration: none;
        font-weight: 500;
        padding: 10px 20px;
        border: 1px solid #314028;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .back-link:hover {
        background-color: #314028;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(49, 64, 40, 0.25);
    }

    .back-icon {
        margin-right: 8px;
        font-size: 18px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .stepper-container {
            padding: 20px;
            margin: 20px;
        }

        .section-title {
            font-size: 2.2rem;
        }

        .couple-thanks-name {
            font-size: 2rem;
        }

        .section-message {
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        .section-title {
            font-size: 2rem;
        }

        .couple-thanks-name {
            font-size: 1.85rem;
        }
    }
</style>
