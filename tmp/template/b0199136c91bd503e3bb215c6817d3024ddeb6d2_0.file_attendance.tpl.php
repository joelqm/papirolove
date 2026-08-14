<?php
/* Smarty version 5.5.1, created on 2026-08-14 09:35:27
  from 'file:views/cynthiaykevin/components/attendance.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7f27af43a8c7_35743752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0199136c91bd503e3bb215c6817d3024ddeb6d2' => 
    array (
      0 => 'views/cynthiaykevin/components/attendance.tpl',
      1 => 1786718009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a7f27af43a8c7_35743752 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiaykevin\\components';
?><div class="attendace-container" id="attendance" style="position: relative; overflow: hidden;">

    <div class="gift-section" data-aos="fade-up">
        <!-- <h5>CONFIRMA</h5> -->
        <h1 class="gift-title-small">Confirma tu asistencia</h1>
        <!-- <p class="big">tu Asistencia</p> -->

        <p class="text">
            Agradeceremos confirmar tu asistencia hasta el
        </p>

        <h3 class="date">01.09.26</h3>

        <a href="https://wa.link/qk10sq" class="button-3">
            Confirma Aquí
        </a>

    </div>

    <!-- <img class="attendance-decor"
         src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiaykevin/imgs/img_001.png"
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
