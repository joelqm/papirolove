<style>
	/* Efecto hover específico para el botón */
	.hover-btn {
		position: relative;
		overflow: hidden;
		z-index: 9;
	}

	.hover-btn::before,
	.hover-btn::after {
		position: absolute;
		top: 50%;
		content: "";
		width: 20px;
		height: 20px;
		background-color: var(--header);
		border-radius: 50%;
		z-index: -1;
	}

	.hover-btn::before {
		left: -20px;
		transform: translate(-50%, -50%);
	}

	.hover-btn::after {
		right: -20px;
		transform: translate(50%, -50%);
	}

	.hover-btn:hover {
		color: var(--white) !important;
		transition-delay: 0.5s;

		background-color: var(--header) !important;
	}

	.hover-btn:hover::before {
		animation: criss-cross-left 0.8s both;
		animation-direction: alternate;
	}

	.hover-btn:hover::after {
		animation: criss-cross-right 0.8s both;
		animation-direction: alternate;
	}

	.alert-success {
		background-color: #d4edda;
		color: #155724;
		border: 1px solid #c3e6cb;
	}

	.alert-danger {
		background-color: #f8d7da;
		color: #721c24;
		border: 1px solid #f5c6cb;
	}

	input:invalid {
		border-color: #ff0000 !important;
	}

	input:valid {
		border-color: var(--border) !important;
	}

	.hero-1 {
		padding: 30px 0 !important;
		position: relative;
	}

	/* Estilos para el badge promocional */
	.promo-badge {
		/* display: inline-flex; */
		align-items: center;
		gap: 10px;
		background: linear-gradient(45deg, var(--ratting), #ffd700);
		color: var(--black);
		padding: 12px 25px;
		border-radius: 50px;
		font-weight: 700;
		font-size: 1.1rem;
		box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
		animation: pulse 2s infinite;
		border: 2px solid rgba(255, 255, 255, 0.3);
		transition: all 0.3s ease;
		width: 100%;
		text-align: center;
	}

	.promo-badge:hover {
		transform: translateY(-3px);
		box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
	}

	.promo-badge i {
		font-size: 1.3rem;
		animation: bounce 1.5s infinite;
		margin-right: 10px;
	}

	@keyframes pulse {
		0% {
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
		}

		50% {
			box-shadow: 0 4px 25px rgba(255, 215, 0, 0.4);
		}

		100% {
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
		}
	}

	@keyframes bounce {

		0%,
		100% {
			transform: translateY(0);
		}

		50% {
			transform: translateY(-5px);
		}
	}

	@keyframes shine {
		0% {
			background-position: -200% center;
		}

		100% {
			background-position: 200% center;
		}
	}


	/* Estilos para los mensajes de error */
	.error-message {
		color: #ff0000 !important;
		font-size: 12px !important;
		margin-top: 5px !important;
		display: none;
	}

	.error-text {
		color: #dc3545;
		font-size: 12px;
		margin-top: 4px;
		display: none;
	}

	.form-clt input {
		width: 100%;
		padding: 10px;
		border-radius: 6px;
	}

	.btn-enviar:disabled {
		background-color: #adb5bd;
		cursor: not-allowed;
		opacity: 0.8;
	}
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Hero Section Start -->
<section class="hero-section hero-1 bg-cover fix" style="background-color: var(--header);">
	<div class="container">
		<div class="row g-4 justify-content-between">

			<div class="col-lg-12">
				<div class="hero-content" style="margin-bottom: 15px;">
					<div class="row justify-content-center align-items-center mb-50 wow fadeInUp" data-wow-delay=".1s"
						style="min-height: 150px;">
						<div class="col-md-4 text-center mb-3 d-flex justify-content-center align-items-center">
							<img src="{$_layoutParams.root}public/img/logo_ucsm.png"
								alt="Universidad Católica de Santa María"
								style="max-width: 230px; height: auto; opacity: 1 !important; filter: none !important;">
						</div>
						<div class="col-md-4 text-center mb-3 d-flex justify-content-center align-items-center">
							<img src="{$_layoutParams.root}public/img/logo_postgrado.png" alt="Escuela de Postgrado"
								style="max-width: 230px; height: auto; opacity: 1 !important; filter: none !important;">
						</div>
						<div class="col-md-4 text-center mb-3 d-flex justify-content-center align-items-center">
							<img src="{$_layoutParams.root}public/img/LG4.png" alt="MAGNUM"
								style="max-width: 180px; height: auto; opacity: 1 !important; filter: none !important;">
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="hero-content">
					<h2 class="wow fadeInUp" data-wow-delay=".2s" style="color: var(--white);font-size: 2.5rem;">
						DIPLOMADO EN 
						DIRECCIÓN COMERCIAL 
						Y GESTIÓN ESTRATÉGICA
					</h2>
					<div class="hero-button mt-4">
						<span class="theme-btn wow fadeInUp" data-wow-delay=".4s"
							style="background-color: var(--ratting); color: var(--black); border: none;  display: inline-block;">
							<strong>"PARA PROFESIONALES QUE BUSCAN ASCENDER Y LIDERAR CON RESULTADOS"</strong>
							<i class="far fa-arrow-right"></i>
						</span>
					</div>

					<div class="mt-4 wow fadeInUp" data-wow-delay=".5s">
						<img src="{$_layoutParams.root}public/img/porque-elegirnos.jpeg" alt="¿Por qué elegirnos?" class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto; border: 2px solid rgba(255,255,255,0.1);">
					</div>


					<!-- Cards para las características -->
					<div class="row mt-50 wow fadeInUp" data-wow-delay=".6s">
						<div class="col-md-4 mb-3">
							<div class="card text-center h-100"
								style="background-color: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 10px; padding: 20px;">
								<div class="card-body">
									<i class="fas fa-users fa-2x mb-3" style="color: var(--ratting);"></i>
									<h5 style="color: var(--white); margin-bottom: 10px;">Cupos Limitados</h5>

								</div>
							</div>
						</div>

						<div class="col-md-4 mb-3">
							<div class="card text-center h-100"
								style="background-color: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 10px; padding: 20px;">
								<div class="card-body">
									<i class="fas fa-laptop fa-2x mb-3" style="color: var(--ratting);"></i>
									<h5 style="color: var(--white); margin-bottom: 10px;">Modalidad 100% Online</h5>

								</div>
							</div>
						</div>

						<div class="col-md-4 mb-3">
							<div class="card text-center h-100"
								style="background-color: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 10px; padding: 20px;">
								<div class="card-body">
									<i class="fas fa-video fa-2x mb-3" style="color: var(--ratting);"></i>
									<h5 style="color: var(--white); margin-bottom: 10px;">Clases en Tiempo Real</h5>

								</div>
							</div>
						</div>



					</div>


					<div class="mt-50 wow fadeInUp" data-wow-delay=".7s">
						<h4 style="color: var(--white); font-size: 1.4rem; margin-bottom: 20px; line-height: 1.4;text-transform:initial ">
							Resolución Universitaria N• 9617-CU-26 que aprueba el Diplomado de Postgrado en Dirección Comercial y Gestión Estratégica
						</h4>
						<img src="{$_layoutParams.root}public/img/resolucion.jpeg" alt="Resolución Universitaria" class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto; border: 2px solid rgba(255,255,255,0.1);">
					</div>



				</div>
			</div>

			<div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">

				<div class="hero-content">

					<div class="wow fadeInUp mb-3" data-wow-delay=".4s">
						<div class="promo-badge">
							<i class="fas fa-gift "></i>
							<span>PREINSCRÍBETE Y OBTÉN: <br>MATRÍCULA GRATIS + PDF INFORMATIVO</span>
						</div>
					</div>

				</div>

				<div class="hero-contact-box">
					<h4 style="color: var(--header);">Completa el siguiente formulario para concretar tu preinscripción
					</h4>
					<!-- <p style="color: var(--text); margin-bottom: 20px;"></p> -->

					<form method="post" id="frm_preinscripcion" class="contact-form-item">
						<div class="row g-4">

							<!-- NOMBRES -->
							<div class="col-lg-6">
								<div class="form-clt">
									<label>Nombres</label>
									<input type="text" name="txt_nombres" id="txt_nombres">
									<small class="error-text" id="error_txt_nombres"></small>
								</div>
							</div>

							<!-- APELLIDOS -->
							<div class="col-lg-6">
								<div class="form-clt">
									<label>Apellidos</label>
									<input type="text" name="txt_apellidos" id="txt_apellidos">
									<small class="error-text" id="error_txt_apellidos"></small>
								</div>
							</div>
							<!-- CELULAR -->
							<div class="col-lg-6">
								<div class="form-clt">
									<label>Celular (WhatsApp)</label>
									<input type="text" name="txt_celular" id="txt_celular">
									<small class="error-text" id="error_txt_celular"></small>
								</div>
							</div>
							<!-- DNI -->
							<div class="col-lg-6">
								<div class="form-clt">
									<label>DNI</label>
									<input type="text" name="txt_dni" id="txt_dni">
									<small class="error-text" id="error_txt_dni"></small>
								</div>
							</div>
							<!-- EMAIL -->
							<div class="col-lg-12">
								<div class="form-clt">
									<label>Correo Electrónico</label>
									<input type="email" name="txt_email" id="txt_email">
									<small class="error-text" id="error_txt_email"></small>
								</div>
							</div>
							<!-- BOTÓN -->
							<div class="col-lg-12">
								<button type="button" id="btn_enviar"
									style="width:100%; padding:12px; border:none; background:#ffc107; color:#000; font-weight:bold; cursor:pointer;">
									Enviar →
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->

<footer class="footer-section ">
	<div class="container">
		<!-- Información de contacto en 5 columnas -->
		<div class="row py-5 wow fadeInUp" data-wow-delay=".2s" style="background-color: var(--body);">
			<div class="col-md-3 col-12 mb-3">
				<div class="text-center">
					<i class="fas fa-phone fa-1.5x mb-3" style="color: var(--bg2);"></i>
					<p style="color: var(--text); margin-bottom: 0;">947705045</p>
				</div>
			</div>

			<div class="col-md-3 col-12 mb-3">
				<div class="text-center">
					<i class="fas fa-envelope fa-1.5x mb-3" style="color: var(--bg2);"></i>
					<p style="color: var(--text); margin-bottom: 0;">informes@magnumucsm.edu.pe</p>
				</div>
			</div>

			<div class="col-md-3 col-12 mb-3">
				<div class="text-center">
					<i class="fas fa-envelope fa-1.5x mb-3" style="color: var(--bg2);"></i>
					<p style="color: var(--text); margin-bottom: 0;">inscripciones@magnumucsm.edu.pe</p>
				</div>
			</div>

			<div class="col-md-3 col-12 mb-3">
				<div class="text-center">
					<i class="fab fa-instagram fa-1.5x mb-3" style="color: var(--bg2);"></i>
					<p style="color: var(--text); margin-bottom: 0;">@magnumucsm</p>
				</div>
			</div>
		</div>

		<div class="footer-bottom text-center" style="background-color: var(--white);">
			<div class="container">
				<div class="footer-wrapper d-flex align-items-center justify-content-center text-center">
					<p class="wow fadeInUp" data-wow-delay=".6s" style="color: var(--text);">
						© <a href="#" style="color: var(--text);">2026 MAGNUM UCSM</a> -
						Todos los derechos reservados
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>