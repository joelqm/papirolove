<div class="row"><div class="col-xs-12"><br></div></div>
<form method="post" id="frm_campos">
	<div class="col-xs-12">
		<div class="box">
			<div class="col-md-6">
				<div class="box box-danger">
					<div class="box-header">
						<h3 class="box-title">Datos Usuario</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label>Nombres</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user"></i>
								</div>
								<input type="text" class="form-control" placeholder="Ingresar nombres" name="nombre" id="nombre" />
							</div>
						</div>
						<div class="form-group">
							<label>Apellido Paterno</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user"></i>
								</div>
								<input type="text" class="form-control" placeholder="Ingresar apellido paterno" name="app" id="app" />
							</div>
						</div>
						<div class="form-group">
							<label>Apellido Materno</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user"></i>
								</div>
								<input type="text" class="form-control" placeholder="Ingresar apellido materno" name="apm" id="apm" />
							</div>
						</div>
						<div class="form-group">
							<label>DNI</label>
							<div class="input-group">
								<div class="input-group-addon" >
									<i class="fa fa-barcode"></i>
								</div>
								<input type="text" placeholder="Ingresar dni" class="form-control" name="dni" id="dni" />
							</div>
						</div>
						<div class="form-group">
								<label> Roles:</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-edit"></i>
									</div>
									 <select class="form-control select2" name="rol" id="rol" style="width: 100%;">
										<option value="-1" selected="selected"> - Seleccionar Rol -</option>
										{if (isset($roles) && count($roles))}
											{foreach item=datos from=$roles}
												<option value="{$datos.id_role}">{$datos.role}</option>
											{/foreach}
										{/if}
									 </select>
								</div>
							</div>
					
					</div><!-- /.box-body -->
					<div class="box-footer">
						<button id="guardar" class="btn btn-primary" type="button"> Guardar</button>
						<button id="editar" class="btn btn-success" type="button"> Actualizar</button>
						<button id="nuevo" class="btn btn-info" type="button"> Nuevo</button>
					</div>
				</div><!-- /.box -->
	        </div><!-- /.col (left) -->
	        <div class="col-md-4">
				<div class="box box-primary">
					<div class="pull-left image">
						<!--<img src="{$_layoutParams.ruta}dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="col-xs-12">
		<div class="box">
			<div clss="box-header">
				<h3 class="box-title"> Relación de Usuarios</h3>
			</div>
			<div class="table-responsive">
				<table id="tb_data" class="table table-bordered table-striped dataTable" aria-describedby="tb_data_info">
					<thead>
						<th> Nombres</th>
						<th> Usuario</th>
						<th> *</th>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>-->
</form>
<div id="msjOk" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-success">
    <div class="modal-content">
	    <div class="modal-body">
	        <h4 id="m_res" class="modal-title">Se guardó satisfactoriamente</h4>
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