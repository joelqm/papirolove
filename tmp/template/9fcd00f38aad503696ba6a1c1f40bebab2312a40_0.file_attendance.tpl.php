<?php
/* Smarty version 5.5.1, created on 2026-07-08 09:20:05
  from 'file:views/jesykaygustavo/components/attendance.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a4e5c955b77c0_08737274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fcd00f38aad503696ba6a1c1f40bebab2312a40' => 
    array (
      0 => 'views/jesykaygustavo/components/attendance.tpl',
      1 => 1783520377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e5c955b77c0_08737274 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\jesykaygustavo\\components';
?><style>
  #attendance.attendace-container {
    padding: 50px 20px 70px;
    background-color: transparent;
    color: #293E59;
    position: relative;
    overflow: hidden;
  }

  #attendance .gift-section {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  #attendance .attendance-title {
    font-family: 'CastelaMolgate';
    font-size: var(--fs-section-title);
    color: #293E59;
    font-weight: normal;
    margin: 0 0 16px;
    line-height: 1.15;
  }

  #attendance .attendance-text {
    font-family: 'Humanist521';
    font-size: var(--fs-body);
    color: #293E59;
    margin: 0 0 8px;
    max-width: 340px;
    line-height: 1.5;
    -webkit-text-stroke: 0;
  }

  #attendance .attendance-date {
    font-family: 'Humanist521';
    font-size: var(--fs-subtitle);
    color: #293E59;
    letter-spacing: 3px;
    margin: 0 0 24px;
    font-weight: normal;
    line-height: 1.2;
  }

  #attendance .attendance-button {
    display: inline-block;
    background-color: #787D63;
    color: #fff;
    padding: 10px 28px;
    border-radius: 50px;
    text-decoration: none;
    font-family: 'Noteworthy';
    font-size: var(--fs-button);
    letter-spacing: 0.5px;
    transition: background-color 0.3s, transform 0.2s;
    margin-bottom: 28px;
  }

  #attendance .attendance-button:hover {
    background-color: #6a6f57;
    transform: translateY(-1px);
    color: #fff;
  }

  #attendance .attendance-note {
    font-family: 'Humanist521';
    font-size: var(--fs-body-note);
    color: #293E59;
    max-width: 360px;
    line-height: 1.5;
    margin: 0;
    -webkit-text-stroke: 0;
  }

  @media (max-width: 992px) {
    #attendance.attendace-container {
      padding: 24px 16px 50px;
    }

    #attendance .attendance-title {
      font-size: var(--fs-section-title-sm);
    }

    #attendance .attendance-text {
      font-size: var(--fs-body-sm);
    }

    #attendance .attendance-date {
      font-size: var(--fs-subtitle-sm);
    }

    #attendance .attendance-button {
      font-size: var(--fs-button-sm);
      padding: 10px 24px;
    }

    #attendance .attendance-note {
      font-size: var(--fs-body-note-sm);
      padding: 0 8px;
    }
  }
</style>

<div class="attendace-container" id="attendance">

  <div class="gift-section" data-aos="fade-up">
    <h1 class="attendance-title">Confirma tu asistencia</h1>

    <p class="attendance-text">
      Agradeceremos confirmar tu <br>  asistencia hasta el
    </p>

    <h3 class="attendance-date">01.08.26</h3>

    <a href="https://wa.link/pby5al" target="_blank" class="attendance-button">
      Confirma Aquí
    </a>

    <p class="attendance-note">
      En esta ocasión, nuestra celebración será exclusivamente para adultos
    </p>
  </div>

</div>
<?php }
}
