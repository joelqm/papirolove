<?php
/* Smarty version 5.5.1, created on 2026-01-23 00:16:08
  from 'file:template.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6973041807f264_49184078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01333db110068600209b32d1f6b938d1abfd1cd2' => 
    array (
      0 => 'template.tpl',
      1 => 1769145089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6973041807f264_49184078 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\layout\\construction-theme';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPIROLOVE | Próximamente</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,400&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>

    <style>
        :root {
            --color-cafe: #8c7366;
            --color-cafe-hover: #6e5a50;
            --color-ivory: rgba(237, 228, 216, 0.94);
            --text-main: #4a4a4a;
            --text-light: #666;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            color: var(--text-main);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        /* --- CORRECCIÓN DE IMAGEN DE FONDO --- */
        .bg-image {
            position: absolute;
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%;
            /* Usamos PHP echo BASE_URL y el nombre del archivo real que subiste */
            background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
public/img/fondo_papirolove.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -2;
        }

        .overlay {
            position: absolute;
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%;
            background-color: var(--color-ivory);
            backdrop-filter: blur(0px);
            z-index: -1;
        }

        .container {
            max-width: 800px;
            padding: 40px;
            z-index: 1;
            opacity: 0;
        }

        .logo-img {
            max-width: 250px;
            height: auto;
            margin-bottom: 30px;
            display: inline-block;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 400;
            line-height: 1.2;
            margin: 0 0 25px 0;
            font-style: italic;
            color: var(--color-cafe);
        }

        p.subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            font-weight: 300;
            margin-bottom: 45px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-whatsapp {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: var(--color-cafe);
            color: #fff;
            text-decoration: none;
            padding: 16px 50px;
            border-radius: 50px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 500;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(140, 115, 102, 0.3);
            border: 1px solid transparent;
        }

        .btn-whatsapp i {
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .btn-whatsapp:hover {
            background-color: var(--color-cafe-hover);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(140, 115, 102, 0.5);
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.8rem; }
            .container { padding: 20px; }
            .logo-img { max-width: 200px; }
        }
    </style>
</head>
<body>

    <div class="bg-image"></div>
    <div class="overlay"></div>

    <div class="container" id="main-content">
        
        <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
src/logo-papiro.png" alt="Papirolove" class="logo-img">
        
        <h2>En Construcción</h2>
        
        <p class="subtitle">
            Personaliza tus invitaciones virtuales con nosotros. <br>
            Estamos preparando algo especial para ti.
        </p>

        <a href="https://api.whatsapp.com/send?phone=51941034307&text=Hola%20Papirolove,%20quiero%20personalizar%20mis%20invitaciones%20virtuales." 
           class="btn-whatsapp" 
           target="_blank">
            <i class="fab fa-whatsapp"></i> Contáctanos
        </a>
    </div>

    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $("#main-content").animate({
                opacity: 1,
                paddingTop: "40px" 
            }, 1200);
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
