<?php
/* Smarty version 5.5.1, created on 2026-01-08 16:53:58
  from 'file:partials/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_696027769a91f2_50783753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9990deb880220f95ea06503411ce5264e67762f2' => 
    array (
      0 => 'partials/header.tpl',
      1 => 1767909229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696027769a91f2_50783753 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\magnumucsm\\views\\layout\\next-theme\\partials';
?><header id="header-sticky" class="header-3 <?php if ((true && ($_smarty_tpl->hasVariable('header_style') && null !== ($_smarty_tpl->getValue('header_style') ?? null))) && $_smarty_tpl->getValue('header_style') == 'dark') {?>header-dark<?php }?>">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="sticky-logo">
                    <a href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
">
                        <?php if ((true && ($_smarty_tpl->hasVariable('header_style') && null !== ($_smarty_tpl->getValue('header_style') ?? null))) && $_smarty_tpl->getValue('header_style') == 'dark') {?>
                        <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_img'];?>
logo/white-logo.svg" alt="logo-white">
                        <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_img'];?>
logo/black-logo.svg" alt="logo-black">
                        <?php }?>
                    </a>
                </div>
                <div class="header-left">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown active menu-thumb">
                                        <a href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
about">About</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
services">Services</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
contact">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="header-button">
                        <a href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
contact" class="theme-btn bg-2">Get A Quote</a>
                    </div>
                    <div class="header__hamburger d-xl-block my-auto">
                        <div class="sidebar__toggle">
                            <i class="far fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php }
}
