<style>


@font-face {
    font-family: 'Dulcinea';
    src: url("../fonts/Dulcinea.ttf");/
}


@font-face {
    font-family: 'Forum';
    src: url("../fonts/Forum-Regular.ttf");/
}


    *{
        font-family: 'Forum' !important;
        color: #828383 !important;
    }

    .title-names{

        font-family: 'Forum' !important;
        font-size: 40px;
        width: 200px;
        margin: 0 auto ;
        margin-bottom: 25px;
        line-height: 0.7; 
    }
    .title-names-y{
        font-family: 'Forum' !important;
        font-size: 17px;
        position: absolute;
        top: 45px;
     
        
    }

   
    .colorone {
        background-color: #828383 !important;
        color: white !important;
        --offset: 7px;
        --border-size: 1px;
        display: inline-block;
        position: relative;
        margin: 15px;
        padding: 15px 35px;
        border: 1px solid currentcolor;
        font-weight: 400;
        font-size: 1rem;
        font-family: AftaSansThin !important;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        line-height: 1;
        outline: none;
        cursor: pointer;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;

    }

    .colorone:hover {
        background-color: #828383 !important;
        color: white !important;
    }

    .section-title, .cta{
        color: #828383 !important;
    }

    .footer-widget-area{
        background: #CDD9C5 !important;
    }

    .copyright{
        background: #828383 !important;
        color: #fff;
    }
    /* Estilos para la tabla */
.table-container {
    max-height: 400px; /* Ajusta la altura máxima según sea necesario */
    overflow-y: auto;  /* Habilita el desplazamiento vertical */
    overflow-x: auto;  /* Habilita el desplazamiento horizontal si es necesario */
    border: 1px solid #ddd; /* Añade un borde alrededor de la tabla */
    border-radius: 4px;   /* Añade bordes redondeados */
}

.table-container table {
    width: 100%;
    border-collapse: collapse; /* Colapsa los bordes de las celdas */
}

.table-container th, .table-container td {
    padding: 10px; /* Añade espacio dentro de las celdas */
    border: 1px solid #ddd; /* Añade un borde a las celdas */
    text-align: left; /* Alinea el texto a la izquierda */
}

.table-container th {
    background-color: #f4f4f4; /* Color de fondo para el encabezado */
    font-weight: bold; /* Negrita para el encabezado */
}

.table-container tr:nth-child(even) {
    background-color: #f9f9f9; /* Color de fondo alternante para las filas */
}


    #btn_ver {
        background-color: #b57966;
        display: inline-block;
        color: #fff !important;
        padding: 0.3125rem 0.375rem;
        font-size: 75%;
        font-weight: 500;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.125rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        padding-right: 0.4375rem;
        padding-left: 0.4375rem;
        border-radius: 10rem;
    }

    .side-flowers::before {
        content: "" !important;
        background-image: none !important;
    }

    .side-flowers::after {
        content: "" !important;
        background-image: none !important;
    }


    #footer {
        
        /*position: sticky;*/
        /*bottom: 0px;*/
    background-color: black;
        position: absolute;
        bottom: 30px;
        width: 100%;
        height: 40px;
        color: white;
    }
    .name-top{
        margin-top: 20px;
        font-family: Brittany !important;
    }
    .nav{
        width: 100%;
        height: 4rem;
        
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        background: #b57966;
        
    }
    .nav a{
        color: #fff !important;
    }
    

</style>


    <!-- <link href="{$_layoutParams.root}views/layout/neela/css/icomoon/styles.css" rel="stylesheet" />
    <link href="{$_layoutParams.root}views/layout/neela/css/fontawesome/styles.min.css" rel="stylesheet" /> -->



    

    <!--
    <input type="hidden" type="text" name="resultPayment" id="resultPayment" value="{$resultPayment}">
    <input type="hidden" type="text" name="resultPaymentCode" id="resultPaymentCode" value="{$resultPaymentCode}">
    -->

	<!-- BEGIN PRELOADER -->
	<!-- <div id="preloader">
		<div class="loading-heart">
			<svg viewBox="0 0 512 512" width="100">
				<path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
			</svg>
			<div class="preloader-title">
				Isabella<br>
				<small>&</small><br>

			</div>
		</div>
	</div> -->
	<!-- END PRELOADER -->
	
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">

		<!-- BEGIN PAGE HEADER -->		
        <!--
        <div class="page-header section-divider-bottom-1 section-divider-bg-
        
        
        ">
			<div class="container">
				<div class="row">
					<div class="col center">
						<h1 class="page-title">Registros totales</h1>
					</div>
				</div>
			</div>
		</div>
        -->
		<!-- END PAGE HEADER -->

		<!-- BEGIN PAGE CONTENT -->
		<div class="page-content no-padding">
				
			<!-- BEGIN MAIN CONTENT -->
			<main class="main">

				<!-- BEGIN CONTACT FORM SECTION -->
				<section class="section-bg-color overflow-content-over" style="padding: 30px 0;">
					<div class="side-flowers"></div>
					
					<div class="container">
						<div class="row gx-6">
							<div class="col-xl-12 col-lg-12 overflow-image-wrapper center">

                            

								<h2 class="title">Lista total de registrados</h2>

                                <table id="tb_data" class="display compact responsive" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-priority="1" style="text-align: center;">Fecha / Hora</th>
                                            <th data-priority="1" style="text-align: center;">Nombre</th>
                                            <th data-priority="1" style="text-align: center;">Mensaje</th>
                                            <th data-priority="1" style="text-align: center;">Total</th>
                                            <th style="text-align: center;">Tipo</th>
                                            <th style="text-align: center;">*</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"></td>
                                        </tr>
                                    </tbody>
                                </table>
								
							</div>
				
						</div>
					</div>


				</section>
				<!-- END CONTACT FORM SECTION -->
			</main>
			<!-- END MAIN CONTENT -->
			
		</div>
		<!-- END PAGE CONTENT -->

	
	</div>
	<!-- END WRAPPER -->