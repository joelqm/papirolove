<?php
/* Smarty version 5.5.1, created on 2026-07-03 09:49:13
  from 'file:views/jesykaygustavo/components/cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a47cbe9ee0b55_29549633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c8004a372a7ad2dbc4bba1fabf4f98d0b278997' => 
    array (
      0 => 'views/jesykaygustavo/components/cart.tpl',
      1 => 1772639988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a47cbe9ee0b55_29549633 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\jesykaygustavo\\components';
?><style>
  .emoji-warning {
    font-size: 0.85rem;
    color: #777;
    margin-top: 4px;
  }
</style>
<div class="cart" style="display: none;">
  <div class="cart-title">
    <h2>Tus obsequios</h2>
    <i class="fa-solid fa-xmark" id="close-cart"></i>
  </div>
  <div class="cart-items">


  </div>
  <div class="cart-total">
    <span>Total: </span><span class="total-price">S/. 0</span>
  </div>
  <button class="checkout-button">ENVIAR OBSEQUIO</button>
</div>

<div class="form" style="display: none;">

  <div class="form-overlay"></div>

  <div class="form-container">
    <i class="fa-solid fa-xmark form-close"></i>
    <h2 class="form-title">Acompaña tu obsequio con una dedicatoria</h2>
    <form class="message-form" id="giftForm">
      <input type="number" hidden name="messageId" id="messageId">
      <div class="form-group">
        <label for="message" class="form-label">Tu Dedicatoria</label>
        <textarea id="message" name="message" class="form-control"
          placeholder="Escribe tu dedicatoria aquí."></textarea>
        <p class="emoji-warning"> * Los emojis no se guardarán correctamente, por favor evita usarlos.</p>
      </div>

      <div class="form-group">
        <label for="signature" class="form-label">Firma</label>
        <div class="signature-field">
          <input type="text" id="signature" name="signature" class="signature-input" placeholder="Escribe una firma">
          <span class="signature-hint">Deja una firma</span>
        </div>
      </div>


      <button type="submit" class="submit-btn font-forum">Obsequiar</button>
    </form>

  </div>
</div>



<button class="show-cart" aria-label="Ver mis obsequios">
  <i class="fas fa-gift"></i>
</button><?php }
}
