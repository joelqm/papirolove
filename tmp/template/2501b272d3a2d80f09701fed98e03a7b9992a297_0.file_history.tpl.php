<?php
/* Smarty version 5.5.1, created on 2026-04-30 14:39:42
  from 'file:views/fernandayromme/components/history.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69f3affe16dba4_27126308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2501b272d3a2d80f09701fed98e03a7b9992a297' => 
    array (
      0 => 'views/fernandayromme/components/history.tpl',
      1 => 1777577931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f3affe16dba4_27126308 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayromme\\components';
?><section class="history-section">

    <!-- <div class="flower-left"></div> -->
    <div class="container-history" id="new-history">

        <div class="section">
            <div class="history-title" data-aos="fade-up">
                <!-- <h1 class="history-title-small">NUESTRA HISTORIA</h1> -->
                <p class="history-title-big">Nuestra Historia</p>
            </div>
            <p class="text-body" data-aos="fade-up">
                Si alguien nos hubiera dicho aquella noche que una foto
                nos llevaría hasta aquí, quizás no lo habríamos creído.
                Pero aquí estamos, demostrando que el amor aparece cuando menos lo esperas… y se queda cuando es
                de verdad.Lo que comenzó como una curiosidad, se convirtió en conversaciones, risas, miradas cómplices…
                y poco a poco, sin darnos cuenta, en un amor profundo. Un amor que creció con el tiempo, que aprendió a ser paciente, fuerte y verdadero.
            </p>
            <p class="text-body" data-aos="fade-up">
                Han pasado 9 años desde ese primer paso. 9 años de momentos que nos han construido: alegrías inmensas, desafíos que nos hicieron más fuertes, sueños compartidos y un camino que nunca dejamos de recorrer juntos. Hoy no solo celebramos una historia bonita, celebramos una historia real. De esas que se eligen todos los días. De esas que no se rinden.
            </p>
            <p class="text-body" data-aos="fade-up">
                Porque amarnos no fue casualidad… fue destino.
                Hoy, con la bendición de Dios, frente a todos, daremos el paso más importante: prometernos seguir caminando juntos, seguir creciendo, seguir soñando… pero ahora como esposos.
            </p>
        </div>

        <!-- <div class="rm-container">
            <img class="history-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/imgs/logo.webp" alt="logo">
        </div> -->
        <div class="divider"></div>

        <div class="history-images" data-aos="fade-up">
            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/imgs/preboda-2.webp" alt="Foto de la pareja"
                class="circular-image">
            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/imgs/preboda-1.webp" alt="Pareja en las vías del tren"
                class="rectangular-image">
        </div>


        


    </div>


    <p class="wedding-date">Faltan</p>

    <div class="count" id="countdown">
        <div class="countdown-item">
            <span class="countdown-number" id="counter1">00</span>
            <span class="countdown-label">DÍAS</span>
        </div>

        <div class="countdown-item">
            <span class="countdown-number" id="counter2">00</span>
            <span class="countdown-label">HORAS</span>
        </div>

        <div class="countdown-item">
            <span class="countdown-number" id="counter3">00</span>
            <span class="countdown-label">MINUTOS</span>
        </div>
    </div>
    
</section><?php }
}
