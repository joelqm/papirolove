<?php
/* Smarty version 5.5.1, created on 2026-01-08 16:28:32
  from 'file:partials/breadcrumb.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69602180c2ae94_53041977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d43af6347a18bbf972740fbef50cb161b8b8fca' => 
    array (
      0 => 'partials/breadcrumb.tpl',
      1 => 1728641755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69602180c2ae94_53041977 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\magnumucsm\\views\\layout\\next-theme\\partials';
?><div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s"><?php echo '<?php'; ?>
 echo $title;<?php echo '?>'; ?>
</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.php"><?php echo '<?php'; ?>
 echo $subtitle;<?php echo '?>'; ?>
</a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="style-2"><?php echo '<?php'; ?>
 echo $subtitle2;<?php echo '?>'; ?>
</li>
            </ul>
        </div>
    </div>
</div><?php }
}
