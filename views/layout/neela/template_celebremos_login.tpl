<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Celebremos Perú</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{$_layoutParams.root}views/layout/neela/css/bootstrap_index.min.css" rel="stylesheet" />
    <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Template Main CSS File -->
    <link href="{$_layoutParams.root}views/layout/neela/css/style_index.css" rel="stylesheet" />
</head>
<style>
    html,
    body {  
        font-family: 'Roboto Serif', serif;
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important;
        display: flex !important;
        flex-direction: column !important;
        background: url("{$_layoutParams.root}views/layout/neela/images/background.webp") top center no-repeat !important;
        background-size: cover !important;
        position: fixed !important;
    }

    .bg-white {
        background-color: #9caf88 !important;
        border: 0px solid #4f5851 !important;
        color: white;
    }

    .img_logo_celebremos {
        width: 26%;
    }

    @media only screen and (max-width: 500px) {
        .img_logo_celebremos {
            width: 100%;
        }
    }

</style>
<body>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">
        <header class="mb-auto">
        </header>
        <main class="px-3">
            <!-- <h1 style="font-size: 60px;"><strong>Celebremos Perú</strong></h1> -->
            <img src="{$_layoutParams.root}views/layout/neela/images/logo-white-2023.png" alt="Celebremos.pe"  class="img_logo_celebremos"/>
            <p class="lead" style="font-size: 2rem;">Celebra con nosotros... <br> "Colectivo virtual"</p>
            
            <p class="lead">
                <a href="https://wa.me/+51941034307" class="btn btn-lg btn-light fw-bold border-white bg-white">Contáctanos</a>
            </p>
            
        </main>
        <footer class="mt-auto text-white-50">
            <p>&copy; Copyright <strong><span>Celebremos Perú</span></strong>. Todos los derechos reservados</p>
        </footer>
    </div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>