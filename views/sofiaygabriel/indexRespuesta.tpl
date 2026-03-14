<div class="response-container">
    <div class="stepper-container">
        <div class="stepper-wrapper">


            <div class="content-wrapper">
                <h2 class="section-title"></h2>
                <p class="section-message"></p>
                <a href="{$_layoutParams.root}sofiaygabriel/" class="back-link">
                    <span class="back-icon"></span> Volver
                </a>
            </div>
        </div>
    </div>

</div>
<style>
    @font-face {
        font-family: 'Dulcinea';
        src: url("../fonts/Dulcinea.ttf");/
    }


    @font-face {
        font-family: 'Forum';
        src: url("../fonts/Forum-Regular.ttf");/
    }

    .response-container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    /* Container Styles */
    .stepper-container {

        max-width: 600px;
        height: 200px;
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

    /* Stepper Styles */
    .stepper {
        width: 100%;
        margin-bottom: 40px;
    }

    .stepper-progress {
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
        padding: 0;
        margin: 0;
        position: relative;
    }

    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        z-index: 1;
        flex: 1;
    }

    .step-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #888;
        border: 2px solid #ddd;
        position: relative;
        transition: all 0.3s ease;
    }

    .step-line {
        position: absolute;
        top: 25px;
        left: 50%;
        width: 100%;
        height: 2px;
        background-color: #ddd;
    }

    .step:last-child .step-line {
        display: none;
    }

    /* Step States */
    .step.completed .step-circle {
        background-color: #dbb8b8;
        border-color: #dbb8b8;
        color: white;
    }

    .step.completed .step-line {
        background-color: #dbb8b8;
    }

    .step.active .step-circle {
        background-color: #fff;
        border-color: #dbb8b8;
        color: #dbb8b8;
        box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
        transform: scale(1.1);
    }

    /* Content Styles */
    .content-wrapper {
        text-align: center;
        width: 100%;
    }

    .section-title {
        font-family: "Dulcinea";
        color: #333;
        margin-bottom: 15px;
        font-size: 28px;
        font-weight: 600;
    }

    .section-message {
        font-family: "Forum";
        color: #666;
        line-height: 1.6;
        margin-bottom: 30px;
        font-size: 16px;
    }

    .back-link {
        font-family: "Forum";
        display: inline-flex;
        align-items: center;
        color: #dbb8b8;
        text-decoration: none;
        font-weight: 500;
        padding: 10px 20px;
        border: 1px solid #dbb8b8;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .back-link:hover {
        background-color: #dbb8b8;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(76, 175, 80, 0.2);
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

        .step-circle {
            width: 40px;
            height: 40px;
            font-size: 14px;
        }

        .step-line {
            top: 20px;
        }

        .section-title {
            font-size: 24px;
        }
    }

    @media (max-width: 480px) {
        .step-circle {
            width: 35px;
            height: 35px;
            font-size: 12px;
        }

        .step-line {
            top: 17px;
        }

        .section-title {
            font-size: 20px;
        }

        .section-message {
            font-size: 14px;
        }
    }
</style>
<input type="hidden" type="text" name="resultPayment" id="resultPayment" value="{$resultPayment}">
<input type="hidden" type="text" name="hash" id="hash" value="{$hash}">
<input type="hidden" type="text" name="resultPaymentCode" id="resultPaymentCode" value="{$resultPaymentCode}">