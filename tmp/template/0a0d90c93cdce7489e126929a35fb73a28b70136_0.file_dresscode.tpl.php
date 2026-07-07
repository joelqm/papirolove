<?php
/* Smarty version 5.5.1, created on 2026-07-07 12:02:57
  from 'file:views/jesykaygustavo/components/dresscode.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a4d3141304aa6_85532348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a0d90c93cdce7489e126929a35fb73a28b70136' => 
    array (
      0 => 'views/jesykaygustavo/components/dresscode.tpl',
      1 => 1783443775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4d3141304aa6_85532348 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\jesykaygustavo\\components';
?><style>
  #dresscode.dresscode-container {
    padding: 70px 20px 40px;
    background-color: transparent;
    color: #293E59;
  }

  #dresscode .dresscode-content {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 4rem;
    max-width: 1000px;
    width: 100%;
    margin: 0 auto;
  }

  #dresscode .dresscode-left {
    flex: 0 1 380px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  #dresscode .dresscode-title {
    font-family: 'CastelaMolgate';
    font-size: 3.2rem;
    color: #293E59;
    font-weight: normal;
    margin: 0 0 10px;
  }

  #dresscode .dresscode-subtitle {
    font-family: 'Humanist521';
    font-size: 1.25rem;
    color: #293E59;
    margin: 0 0 24px;
  }

  #dresscode .dresscode-sample {
    width: 100%;
    max-width: 220px;
    height: auto;
    object-fit: contain;
    margin-bottom: 20px;
  }

  #dresscode .dresscode-note {
    font-family: 'Humanist521';
    font-size: 1.15rem;
    color: #293E59;
    line-height: 1.5;
    max-width: 300px;
    margin: 0 0 28px;
  }

  #dresscode .dresscode-right {
    flex: 0 1 420px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  #dresscode .dresscode-pareja {
    width: 100%;
    max-width: 420px;
    height: auto;
    object-fit: contain;
  }

  #dresscode .dresscode-button {
    display: inline-block;
    background-color: #787D63;
    color: #fff;
    padding: 10px 28px;
    border-radius: 50px;
    text-decoration: none;
    font-family: 'Noteworthy';
    font-size: 16px;
    letter-spacing: 0.5px;
    transition: background-color 0.3s, transform 0.2s;
  }

  #dresscode .dresscode-button:hover {
    background-color: #6a6f57;
    transform: translateY(-1px);
    color: #fff;
  }

  @media (max-width: 992px) {
    #dresscode .dresscode-content {
      flex-direction: column;
      gap: 2.5rem;
    }

    #dresscode .dresscode-title {
      font-size: 2.4rem;
    }

    #dresscode .dresscode-left,
    #dresscode .dresscode-right {
      flex: 1 1 auto;
      width: 100%;
    }

    #dresscode .dresscode-pareja {
      max-width: 340px;
    }
  }
</style>

<div class="dresscode-container" id="dresscode">

  <div class="dresscode-content">

    <div class="dresscode-left" data-aos="fade-up">
      <h1 class="dresscode-title">Dress Code</h1>
      <p class="dresscode-subtitle">Etiqueta estricta</p>

      <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/pareja_muestra_dresscode.webp"
        alt="Muestra de vestimenta" class="dresscode-sample">

      <p class="dresscode-note">Reserva el blanco y colores <br> claros para los novios</p>

      <a href="https://assets.pinterest.com/ext/embed.html?id=422281212243479" target="_blank"
        class="dresscode-button">Inspírate</a>
    </div>

    <div class="dresscode-right" data-aos="fade-up">
      <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/dresscode_pareja.webp" alt="Jesyka y Gustavo"
        class="dresscode-pareja">
    </div>

  </div>

</div>
<?php }
}
