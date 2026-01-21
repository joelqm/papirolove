<div class="row"><div class="col-xs-12"><br></div></div>
<form id="form_role" method="post" enctype="multipart/form-data">
	<div class="col-md-6">
		<input type="hidden" id="insertar" name="insertar" value="1" />
		<div class="box box-success">
			<div class="box-header">
				<h3 class="box-title">
					Mantenimiento Roles
				</h3>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label> Descripción</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-file-text-o"></i>
						</div>
						<input id="role" name="role" class="form-control" placeholder="Ingrese descripción" value="{if isset($datos.role)}{$datos.role}{/if}" />
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="btn-group">
					<input class="btn btn-primary btn-sm" type="submit" id="guardar" name="guardar" value="Guardar" />
				</div>
			</div>
		</div>
	</div>
</form>