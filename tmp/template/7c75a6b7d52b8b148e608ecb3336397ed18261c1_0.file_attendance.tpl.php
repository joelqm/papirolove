<?php
/* Smarty version 5.5.1, created on 2026-05-06 16:04:29
  from 'file:views/mariaalejandraydiego/components/attendance.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69fbacdd5b5655_11970094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c75a6b7d52b8b148e608ecb3336397ed18261c1' => 
    array (
      0 => 'views/mariaalejandraydiego/components/attendance.tpl',
      1 => 1778101443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fbacdd5b5655_11970094 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mariaalejandraydiego\\components';
?><div class="attendace-container" id="attendance" style="position: relative; overflow: hidden;">

    <div class="gift-section" data-aos="fade-up">
        <!-- <h5>CONFIRMA</h5> -->
        <h1 class="gift-title-small">Confirma tu Asistencia</h1>
        <!-- <p class="big">tu Asistencia</p> -->

        <p class="text">
            Agradeceremos confirmar tu asistencia hasta el
        </p>

        <h3 class="date">15.05.26</h3>

        <a href="https://wa.link/p6d4yp" class="button-3">
            Confirma Aquí
        </a>

    </div>

    <!-- <img class="attendance-decor"
         src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/img_001.png"
         alt=""
         aria-hidden="true"> -->

</div>


<style>
    #attendance .attendance-decor {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 340px;
        height: auto;
        pointer-events: none;
        z-index: 0;
    }
    #attendance .gift-section {
        position: relative;
        z-index: 1;
    }
    @media (max-width: 992px) {
        #attendance .attendance-decor { width: 240px; }
    }
    @media (max-width: 768px) {
        #attendance .attendance-decor { width: 0px; opacity: 0px; }
    }
    @media (max-width: 480px) {
        #attendance .attendance-decor { width: 0px; opacity: 0px; }
    }
</style>
<?php }
}
