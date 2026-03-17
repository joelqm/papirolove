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



<button class="show-cart">VER MIS OBSEQUIOS</button>