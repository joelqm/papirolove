<div class="row"><div class="col-xs-12"><br></div></div>
<form method="POST" enctype="multipart/form-data" >
	<div class="col-md-12">
		<div class="box box-success">
			<div class="box-header">
				<h3 class="box-title">
					Lista de Usuarios
				</h3>
			</div>
			<div class="box-body">
				{if isset($usuarios) && count($usuarios)}
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<tr>
							<th>Usuario</th>
							<th>DNI</th>
							<th>*</th>
						</tr>
						{foreach item=us from=$usuarios}
						<tr>
							<td>{$us.nombapel}</td>
							<td>{$us.dni}</td>
							<td><a href="{$_layoutParams.root}acl/rolesUsuario/{$us.dni}">Administrar</a></td>
						</tr>
						{/foreach}
					</table>
					<div class="col-md-12">
					    <div class="btn-group pull-right">
					      <input type="submit" value="Guardar" class="btn btn-primary btn-sm" />
					    </div>
					</div>
					{/if}
				</div>
			</div>
		</div>
	</div>
</form>