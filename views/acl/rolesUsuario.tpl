<style type="text/css">

.form-control {
	padding: 6px 7px;
}
.dataTables_length{
	display: none;
}
.dataTables_info{
	display: none;
}

.vertical-center {
	display: flex;
	align-items: center;
}

.margin0 {
	margin: 0px;
}

.margin10 {
	margin-right: 10px;
}

.input-group .input-group-addon
{
	background: #eee;
}

.modal-content {
	border-radius: 8px;
}

</style>
<div class="callout callout-default margin0">
	<div class="row vertical-center">
		<div class="col-md-2">						
			<h5><b><i class="icon fa fa-users margin10"></i>Permisos por usuario</b></h5>			
		</div>					
	</div>
</div>


<div class="box box-body">
	<div class="row">
		<div class="col-md-3">

			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h5><b><i class="icon fa fa-list margin10"></i>Lista de suarios</b></h5>
				</div>
				<div class="box-body no-padding">
					{if isset($usuarios) && count($usuarios)}
					<ul class="nav nav-pills nav-stacked">
						{foreach item=us from=$usuarios}
						<li><a href="{$_layoutParams.root}acl/rolesUsuario/{$us.dni}"><i class="fa fa-user text-yellow"></i> {$us.nombapel}</a></li>
						{/foreach}
					</ul>
					{/if}
				</div>
				
			</div>			
		</div>

		<div class="col-md-9">

			<h5 class="margin10">Usuario: <b></b></h5>	

			<form method="post">
				<input type="hidden" value="{$idusuario}" id="idusuario" />
				<div class="col-xs-12">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#productos" data-toggle="tab">Productos</a></li>
							<li><a href="#proveedores" data-toggle="tab">Proveedores</a></li>
							<li><a href="#clientes" data-toggle="tab">Clientes</a></li>
							<li><a href="#inventario" data-toggle="tab">Inventario</a></li>
							<li><a href="#ventas" data-toggle="tab">Ventas</a></li>
							<li><a href="#gastos" data-toggle="tab">Gastos</a></li>
							<li><a href="#reportes" data-toggle="tab">Reportes</a></li>
							<li><a href="#graficos" data-toggle="tab">Gráficos</a></li>
							<li><a href="#alertas" data-toggle="tab">Alertas</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="productos">
					<!-- <div class="box box-success box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Permisos de Productos</h3>
						</div>				            
						<div class="box-body">
						</div>				            
					</div>
				-->
				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de productos</h3>
					</div>				            
					<div class="box-body">				             
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<tr>
										<td>Agregar</td>
										<td><input type="radio" class="minimal add_prod_key habilitar" name="add_prod_key" value="1"> </td>
										<td><input type="radio" class="minimal add_prod_key denegar" name="add_prod_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal add_prod_key ignorar" name="add_prod_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Editar</td>
										<td><input type="radio" class="minimal edi_prod_key habilitar" name="edi_prod_key" value="1"> </td>
										<td><input type="radio" class="minimal edi_prod_key denegar" name="edi_prod_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal edi_prod_key ignorar" name="edi_prod_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Eliminar</td>
										<td><input type="radio" class="minimal del_prod_key habilitar" name="del_prod_key" value="1"> </td>
										<td><input type="radio" class="minimal del_prod_key denegar" name="del_prod_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal del_prod_key ignorar" name="del_prod_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Ingreso</td>
										<td><input type="radio" class="minimal ing_prod_key habilitar" name="ing_prod_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_prod_key denegar" name="ing_prod_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_prod_key ignorar" name="ing_prod_key" value="x"> </td> -->
									</tr>
								</tbody>
							</table>
						</div>    
					</div>				            
				</div>					
			</div>
			<div class="tab-pane" id="proveedores">
				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de proveedores</h3>
					</div>				            
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<tr>
										<td>Agregar</td>
										<td><input type="radio" class="minimal add_prov_key habilitar" name="add_prov_key" value="1"> </td>
										<td><input type="radio" class="minimal add_prov_key denegar" name="add_prov_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal add_prov_key ignorar" name="add_prov_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Editar</td>
										<td><input type="radio" class="minimal edi_prov_key habilitar" name="edi_prov_key" value="1"> </td>
										<td><input type="radio" class="minimal edi_prov_key denegar" name="edi_prov_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal edi_prov_key ignorar" name="edi_prov_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Eliminar</td>
										<td><input type="radio" class="minimal del_prov_key habilitar" name="del_prov_key" value="1"> </td>
										<td><input type="radio" class="minimal del_prov_key denegar" name="del_prov_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal del_prov_key ignorar" name="del_prov_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Ingreso</td>
										<td><input type="radio" class="minimal ing_prov_key habilitar" name="ing_prov_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_prov_key denegar" name="ing_prov_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_prov_key ignorar" name="ing_prov_key" value="x"> </td> -->
									</tr>
								</tbody>
							</table>
						</div>

						
					</div>				            
				</div>
			</div>
			


			<div class="tab-pane" id="clientes">
				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de Clientes</h3>
					</div>				            
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<tr>
										<td>Agregar</td>
										<td><input type="radio" class="minimal add_clie_key habilitar" name="add_clie_key" value="1"> </td>
										<td><input type="radio" class="minimal add_clie_key denegar" name="add_clie_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal add_clie_key ignorar" name="add_clie_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Editar</td>
										<td><input type="radio" class="minimal edi_clie_key habilitar" name="edi_clie_key" value="1"> </td>
										<td><input type="radio" class="minimal edi_clie_key denegar" name="edi_clie_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal edi_clie_key ignorar" name="edi_clie_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Eliminar</td>
										<td><input type="radio" class="minimal del_clie_key habilitar" name="del_clie_key" value="1"> </td>
										<td><input type="radio" class="minimal del_clie_key denegar" name="del_clie_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal del_clie_key ignorar" name="del_clie_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Ingreso</td>
										<td><input type="radio" class="minimal ing_clie_key habilitar" name="ing_clie_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_clie_key denegar" name="ing_clie_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_clie_key ignorar" name="ing_clie_key" value="x"> </td> -->
									</tr>
								</tbody>
							</table>
						</div>
					</div>				            
				</div>
			</div>

			<div class="tab-pane" id="inventario">
				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de Inventario</h3>
					</div>				            
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<tr>
										<td>Agregar</td>
										<td><input type="radio" class="minimal add_inv_key habilitar" name="add_inv_key" value="1"> </td>
										<td><input type="radio" class="minimal add_inv_key denegar" name="add_inv_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal add_inv_key ignorar" name="add_inv_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Editar</td>
										<td><input type="radio" class="minimal edi_inv_key habilitar" name="edi_inv_key" value="1"> </td>
										<td><input type="radio" class="minimal edi_inv_key denegar" name="edi_inv_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal edi_inv_key ignorar" name="edi_inv_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Eliminar</td>
										<td><input type="radio" class="minimal del_inv_key habilitar" name="del_inv_key" value="1"> </td>
										<td><input type="radio" class="minimal del_inv_key denegar" name="del_inv_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal del_inv_key ignorar" name="del_inv_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Ingreso</td>
										<td><input type="radio" class="minimal ing_inv_key habilitar" name="ing_inv_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_inv_key denegar" name="ing_inv_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_inv_key ignorar" name="ing_inv_key" value="x"> </td> -->
									</tr>
								</tbody>
							</table>
						</div>
					</div>				            
				</div>
			</div>
			<div class="tab-pane" id="ventas">
				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de Ventas</h3>
					</div>
					
					<div class="box-body">
						<div class="table-responsive">						
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<!--<tr>
										<td>Agregar</td>
										<td><input type="radio" class="minimal add_cot habilitar" name="add_cot" value="1"> </td>
										<td><input type="radio" class="minimal add_cot denegar" name="add_cot" value=""> </td>
										 <td><input type="radio" class="minimal add_cot ignorar" name="add_cot" value="x"> </td> 
									</tr>-->
									<!--<tr>
										<td>Agregar Ventas para Cliente Recurrente</td>
										<td><input type="radio" class="minimal add_vent_cli_rec_key habilitar" name="add_vent_cli_rec_key" value="1"> </td>
										<td><input type="radio" class="minimal add_vent_cli_rec_key denegar" name="add_vent_cli_rec_key" value=""> </td>
										 <td><input type="radio" class="minimal add_vent_cli_rec_key ignorar" name="add_vent_cli_rec_key" value="x"> </td> 
									</tr>-->
									<!--<tr>
										<td>Agregar Ventas para Cliente Nuevo</td>
										<td><input type="radio" class="minimal add_vent_cli_new_key habilitar" name="add_vent_cli_new_key" value="1"> </td>
										<td><input type="radio" class="minimal add_vent_cli_new_key denegar" name="add_vent_cli_new_key" value=""> </td>
										 <td><input type="radio" class="minimal add_vent_cli_new_key ignorar" name="add_vent_cli_new_key" value="x"> </td> 
									</tr>-->
									<tr>
										<td>Ingreso a ventas</td>
										<td><input type="radio" class="minimal ing_vent_key habilitar" name="ing_vent_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_vent_key denegar" name="ing_vent_key" value=""> </td>
									</tr>

									<tr>
										<td>Nueva venta</td>
										<td><input type="radio" class="minimal add_vent_nuevo_key habilitar" name="add_vent_nuevo_key" value="1"> </td>
										<td><input type="radio" class="minimal add_vent_nuevo_key denegar" name="add_vent_nuevo_key" value=""> </td>
									</tr>

									<tr>
										<td>Lista de ventas</td>
										<td><input type="radio" class="minimal ing_vent_lista_key habilitar" name="ing_vent_lista_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_vent_lista_key denegar" name="ing_vent_lista_key" value=""> </td>
									</tr>
									<tr>
										<td>Mensaje</td>
										<td><input type="radio" class="minimal ing_vent_mensaje_key habilitar" name="ing_vent_mensaje_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_vent_mensaje_key denegar" name="ing_vent_mensaje_key" value=""> </td>
									</tr>

									

								</tbody>
							</table>
						</div>
					</div>				            
				</div>
			</div>
			<div class="tab-pane" id="gastos">

				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de Gastos</h3>
					</div>				            
					<div class="box-body">
						<div class="table-responsive">						
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<tr>
										<td>Ingreso General</td>
										<td><input type="radio" class="minimal ing_gast_key habilitar" name="ing_gast_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_gast_key denegar" name="ing_gast_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_gast_key ignorar" name="ing_gast_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Ingreso Costos Variables</td>
										<td><input type="radio" class="minimal ing_gast_cos_var_key habilitar" name="ing_gast_cos_var_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_gast_cos_var_key denegar" name="ing_gast_cos_var_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_gast_cos_var_key ignorar" name="ing_gast_cos_var_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Agregar Costos Variables</td>
										<td><input type="radio" class="minimal add_gast_cos_var_key habilitar" name="add_gast_cos_var_key" value="1"> </td>
										<td><input type="radio" class="minimal add_gast_cos_var_key denegar" name="add_gast_cos_var_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal add_gast_cos_var_key ignorar" name="add_gast_cos_var_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Editar Costos Variables</td>
										<td><input type="radio" class="minimal edi_gast_cos_var_key habilitar" name="edi_gast_cos_var_key" value="1"> </td>
										<td><input type="radio" class="minimal edi_gast_cos_var_key denegar" name="edi_gast_cos_var_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal edi_gast_cos_var_key ignorar" name="edi_gast_cos_var_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Eliminar Costos Variables</td>
										<td><input type="radio" class="minimal del_gast_cos_var_key habilitar" name="del_gast_cos_var_key" value="1"> </td>
										<td><input type="radio" class="minimal del_gast_cos_var_key denegar" name="del_gast_cos_var_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal del_gast_cos_var_key ignorar" name="del_gast_cos_var_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Ingreso Costos Fijos</td>
										<td><input type="radio" class="minimal ing_gast_cos_fij_key habilitar" name="ing_gast_cos_fij_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_gast_cos_fij_key denegar" name="ing_gast_cos_fij_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_gast_cos_fij_key ignorar" name="ing_gast_cos_fij_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Agregar Costos Fijos</td>
										<td><input type="radio" class="minimal add_gast_cos_fij_key habilitar" name="add_gast_cos_fij_key" value="1"> </td>
										<td><input type="radio" class="minimal add_gast_cos_fij_key denegar" name="add_gast_cos_fij_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal add_gast_cos_fij_key ignorar" name="add_gast_cos_fij_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Editar Costos Fijos</td>
										<td><input type="radio" class="minimal edi_gast_cos_fij_key habilitar" name="edi_gast_cos_fij_key" value="1"> </td>
										<td><input type="radio" class="minimal edi_gast_cos_fij_key denegar" name="edi_gast_cos_fij_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal edi_gast_cos_fij_key ignorar" name="edi_gast_cos_fij_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Eliminar Costos Fijos</td>
										<td><input type="radio" class="minimal del_gast_cos_fij_key habilitar" name="del_gast_cos_fij_key" value="1"> </td>
										<td><input type="radio" class="minimal del_gast_cos_fij_key denegar" name="del_gast_cos_fij_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal del_gast_cos_fij_key ignorar" name="del_gast_cos_fij_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Ingreso a Envios</td>
										<td><input type="radio" class="minimal ing_gast_env_key habilitar" name="ing_gast_env_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_gast_env_key denegar" name="ing_gast_env_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_gast_env_key ignorar" name="ing_gast_env_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Agregar Envios</td>
										<td><input type="radio" class="minimal add_gast_env_key habilitar" name="add_gast_env_key" value="1"> </td>
										<td><input type="radio" class="minimal add_gast_env_key denegar" name="add_gast_env_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal add_gast_env_key ignorar" name="add_gast_env_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Editar Envios</td>
										<td><input type="radio" class="minimal edi_gast_env_key habilitar" name="edi_gast_env_key" value="1"> </td>
										<td><input type="radio" class="minimal edi_gast_env_key denegar" name="edi_gast_env_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal edi_gast_env_key ignorar" name="edi_gast_env_key" value="x"> </td> -->
									</tr>
									<tr>
										<td> Eliminar Envios</td>
										<td><input type="radio" class="minimal del_gast_env_key habilitar" name="del_gast_env_key" value="1"> </td>
										<td><input type="radio" class="minimal del_gast_env_key denegar" name="del_gast_env_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal del_gast_env_key ignorar" name="del_gast_env_key" value="x"> </td> -->
									</tr>
								</tbody>
							</table>
						</div>
					</div>				            
				</div>
				
			</div>
			<div class="tab-pane" id="reportes">
				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de Reportes</h3>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<tr>
										<td> Ingreso reporte ventas</td>
										<td><input type="radio" class="minimal ing_repo_ven_key habilitar" name="ing_repo_ven_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_ven_key denegar" name="ing_repo_ven_key" value=""> </td>
									</tr>

									<!-- <tr>
										<td> Ingreso General a Reportes</td>
										<td><input type="radio" class="minimal ing_repo_gen_key habilitar" name="ing_repo_gen_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_gen_key denegar" name="ing_repo_gen_key" value=""> </td>
									</tr>
									<tr>
										<td>Ingresar a Reportes</td>
										<td><input type="radio" class="minimal ing_repo_key habilitar" name="ing_repo_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_key denegar" name="ing_repo_key" value=""> </td>
									</tr>
									
									<tr>
										<td>Reportes Stock Productos</td>
										<td><input type="radio" class="minimal ing_repo_sto_pro_key habilitar" name="ing_repo_sto_pro_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_sto_pro_key denegar" name="ing_repo_sto_pro_key" value=""> </td>
									</tr>
									
									<tr>
										<td>Reportes Venta por Producto</td>
										<td><input type="radio" class="minimal ing_repo_ven_pro_key habilitar" name="ing_repo_ven_pro_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_ven_pro_key denegar" name="ing_repo_ven_pro_key" value=""> </td>
									</tr>
									<tr>
										<td>Reportes Total Costo Fijo</td>
										<td><input type="radio" class="minimal ing_repo_cos_fij_key habilitar" name="ing_repo_cos_fij_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_cos_fij_key denegar" name="ing_repo_cos_fij_key" value=""> </td>
									</tr>
									<tr>
										<td>Reportes Total Costo Variable</td>
										<td><input type="radio" class="minimal ing_repo_cos_var_key habilitar" name="ing_repo_cos_var_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_cos_var_key denegar" name="ing_repo_cos_var_key" value=""> </td>
									</tr>
									<tr>
										<td>Reportes Total Envio</td>
										<td><input type="radio" class="minimal ing_repo_tot_env_key habilitar" name="ing_repo_tot_env_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_tot_env_key denegar" name="ing_repo_tot_env_key" value=""> </td>
									</tr>
									<tr>
										<td>Reportes Total Venta</td>
										<td><input type="radio" class="minimal ing_repo_tot_ven_key habilitar" name="ing_repo_tot_ven_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_tot_ven_key denegar" name="ing_repo_tot_ven_key" value=""> </td>
									</tr>
									<tr>
										<td>Reportes Total Utilidad</td>
										<td><input type="radio" class="minimal ing_repo_tot_uti_key habilitar" name="ing_repo_tot_uti_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_tot_uti_key denegar" name="ing_repo_tot_uti_key" value=""> </td>
									</tr>
									<tr>
										<td>Reportes Caja Diario</td>
										<td><input type="radio" class="minimal ing_repo_caj_dia_key habilitar" name="ing_repo_caj_dia_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_caj_dia_key denegar" name="ing_repo_caj_dia_key" value=""> </td>
									</tr> -->
									
								</tbody>
							</table>
						</div>
					</div>				            
				</div>
			</div>



			<div class="tab-pane" id="graficos">
				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de gráficos</h3>
					</div>				            
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<!--<tr>
										<td>Ingresar a Graficos</td>
										<td><input type="radio" class="minimal ing_repo_gra_key habilitar" name="ing_repo_gra_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_gra_key denegar" name="ing_repo_gra_key" value=""> </td>
										 <td><input type="radio" class="minimal ing_repo_gra_key ignorar" name="ing_repo_gra_key" value="x"> </td> 
									</tr>-->
									<tr>
										<td>Graficos Operaciones Diarias</td>
										<td><input type="radio" class="minimal ing_graf_ope_dia_key habilitar" name="ing_graf_ope_dia_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_graf_ope_dia_key denegar" name="ing_graf_ope_dia_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_graf_ope_dia_key ignorar" name="ing_graf_ope_dia_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Graficos Monto Tipo Venta</td>
										<td><input type="radio" class="minimal ing_graf_tip_ven_key habilitar" name="ing_graf_tip_ven_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_graf_tip_ven_key denegar" name="ing_graf_tip_ven_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_graf_tip_ven_key ignorar" name="ing_graf_tip_ven_key" value="x"> </td> -->
									</tr>
								</tbody>
							</table>
						</div>						
					</div>				            
				</div>
			</div>


			<div class="tab-pane" id="alertas">
				<div class="box box-success box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Permisos de alertas</h3>
					</div>				            
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<th> Permiso</th>
									<th> Habilitar</th>
									<th> Denegar</th>
									<!-- <th> Ignorar</th> -->
								</thead>
								<tbody>
									<tr>
										<td>Alerta Porcentaje Meta</td>
										<td><input type="radio" class="minimal ing_repo_por_met_key habilitar" name="ing_repo_por_met_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_por_met_key denegar" name="ing_repo_por_met_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_repo_por_met_key ignorar" name="ing_repo_por_met_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Alerta Ticket Promedio</td>
										<td><input type="radio" class="minimal ing_repo_tic_pro_key habilitar" name="ing_repo_tic_pro_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_tic_pro_key denegar" name="ing_repo_tic_pro_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_repo_tic_pro_key ignorar" name="ing_repo_tic_pro_key" value="x"> </td> -->
									</tr>
									<tr>
										<td>Alerta Promedio Venta</td>
										<td><input type="radio" class="minimal ing_repo_pro_ven_key habilitar" name="ing_repo_pro_ven_key" value="1"> </td>
										<td><input type="radio" class="minimal ing_repo_pro_ven_key denegar" name="ing_repo_pro_ven_key" value=""> </td>
										<!-- <td><input type="radio" class="minimal ing_repo_pro_ven_key ignorar" name="ing_repo_pro_ven_key" value="x"> </td> -->
									</tr>
								</tbody>
							</table>
						</div>						
					</div>				            
				</div>
			</div>



		</div>
	</div>
</div>
</form>










</div>
</div>
</div>





<div id="msjOk" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-success">
		<div class="modal-content">
			<div class="modal-body">
				<h4 id="m_res" class="modal-title">Permiso habilitado</h4>
			</div>
		</div>
	</div>
</div>

<div id="msjDenegar" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-danger">
		<div class="modal-content">
			<div class="modal-body">
				<h4 id="m_res" class="modal-title">Permiso denegado</h4>
			</div>
		</div>
	</div>
</div>




<div id="msjErr" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-danger">
		<div class="modal-content">
			<div class="modal-body">
				<h4 id="m_res" class="modal-title">Hubo un error al intentar guardar</h4>
			</div>
		</div>
	</div>
</div>