<?php
/* Smarty version 5.5.1, created on 2026-08-13 10:32:30
  from 'file:views/cynthiyakevin/components/dresscode.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7de38e417516_80021099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0cd583507edc84d248632766a60ce580223c087' => 
    array (
      0 => 'views/cynthiyakevin/components/dresscode.tpl',
      1 => 1786635001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a7de38e417516_80021099 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiyakevin\\components';
?><div class="dresscode-container" id="dresscode">

    <div class="dresscode-content" data-aos="fade-up">

        <div class="dc-left">
            <h1 class="dc-title">Dress Code</h1>
            <p class="dc-subtitle">Etiqueta estricta</p>

            <div class="dc-genders">
                <div class="dc-gender">
                    <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/imagen_ellas.webp" alt="Ellas" class="dc-icon">
                    <p class="dc-gender-label">Ellas</p>
                    <p class="dc-gender-text">Vestido Largo</p>
                </div>
                <div class="dc-gender">
                    <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/imagen_ellos.webp" alt="Ellos" class="dc-icon">
                    <p class="dc-gender-label">Ellos</p>
                    <p class="dc-gender-text">Traje y corbata</p>
                </div>
            </div>

            <p class="dc-palette-title">Paleta de inspiración</p>
            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/paleta_colores.png"
                 alt="Paleta de colores"
                 class="dc-palette">
            <p class="dc-note">Reserva las tonalidades claras para la novia</p>
        </div>

        <div class="dc-right">
            <span class="dc-inspiration-label">Inspiración</span>
            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/dress_code.webp"
                 alt="Inspiración dress code"
                 class="dc-inspiration-img">
        </div>

    </div>

</div>


<style>
    #dresscode.dresscode-container {
        background: transparent;
        color: #002640;
        padding: 70px 24px 40px;
    }

    #dresscode .dresscode-content {
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 3rem;
        align-items: start;
        max-width: 980px;
        margin: 0 auto;
        color: #002640;
    }

    #dresscode .dc-left {
        text-align: center;
    }

    #dresscode .dc-title {
        font-family: 'photograph_signature', cursive;
        font-size: 3.4rem;
        font-weight: normal;
        color: #002640;
        margin: 0 0 0.35rem;
        line-height: 1.1;
    }

    #dresscode .dc-subtitle,
    #dresscode .dc-gender-text,
    #dresscode .dc-palette-title,
    #dresscode .dc-note {
        font-family: 'newyork_personal', serif;
        color: #002640;
        font-weight: normal;
        margin: 0;
    }

    #dresscode .dc-subtitle {
        font-size: 1.35rem;
        margin-bottom: 2rem;
        -webkit-text-stroke: 0.4px #002640;
    }

    #dresscode .dc-genders {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        max-width: 420px;
        margin: 0 auto 2rem;
    }

    #dresscode .dc-gender {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #dresscode .dc-icon {
        width: 110px;
        height: auto;
        margin-bottom: 0.6rem;
    }

    #dresscode .dc-gender-label {
        font-family: 'photograph_signature', cursive;
        font-size: 2.4rem;
        color: #002640;
        margin: 0 0 0.2rem;
        line-height: 1.1;
    }

    #dresscode .dc-gender-text {
        font-size: 1.15rem;
        -webkit-text-stroke: 0.4px #002640;
    }

    #dresscode .dc-palette-title {
        font-size: 1.3rem;
        margin-bottom: 0.9rem;
        -webkit-text-stroke: 0.4px #002640;
    }

    #dresscode .dc-palette {
        width: min(260px, 80%);
        height: auto;
        display: block;
        margin: 0 auto 0.9rem;
    }

    #dresscode .dc-note {
        font-size: 1.05rem;
        -webkit-text-stroke: 0.35px #002640;
    }

    #dresscode .dc-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.9rem;
    }

    #dresscode .dc-inspiration-label {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 180px;
        background-color: #002640;
        color: #F3F0E2;
        font-family: 'newyork_personal', serif;
        font-size: 1.15rem;
        padding: 0.7rem 2rem;
        border-radius: 12px;
        cursor: default;
        pointer-events: none;
        -webkit-text-stroke: 0.4px #F3F0E2;
    }

    #dresscode .dc-inspiration-img {
        width: min(340px, 100%);
        height: auto;
        display: block;
        border-radius: 4px;
    }

    @media (max-width: 900px) {
        #dresscode .dresscode-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        #dresscode .dc-title {
            font-size: 2.4rem;
        }

        #dresscode .dc-subtitle,
        #dresscode .dc-gender-text,
        #dresscode .dc-palette-title,
        #dresscode .dc-note,
        #dresscode .dc-inspiration-label {
            font-size: 1.15rem;
        }

        #dresscode .dc-gender-label {
            font-size: 2rem;
        }

        #dresscode .dc-icon {
            width: 90px;
        }

        #dresscode .dc-inspiration-img {
            width: min(280px, 88%);
        }
    }

    @media (max-width: 480px) {
        #dresscode .dc-title {
            font-size: 2.2rem;
        }

        #dresscode .dc-gender-label {
            font-size: 1.85rem;
        }

        #dresscode .dc-subtitle,
        #dresscode .dc-gender-text,
        #dresscode .dc-palette-title,
        #dresscode .dc-note,
        #dresscode .dc-inspiration-label {
            font-size: 1.05rem;
        }
    }
</style>

<?php }
}
