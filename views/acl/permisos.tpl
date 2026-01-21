<div class="row"><div class="col-xs-12"><br></div></div>
<form method="POST" enctype="multipart/form-data" >
	<div class="col-md-12">
		<input type="hidden" name="save" value="1" />
		<div class="box box-success">
			<div class="box-header">
				<h3 class="box-title">
					Role: {$role.descripcion}
				</h3>
			</div>
			<div class="box-body">
				{if isset($permisos) && count($permisos)}
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<th> Permiso</th>
							<th> Habilitado</th>
							<th> Denegado</th>
							<th> Ignorado</th>
						</thead>
						<tbody>
							{foreach item=pr from=$permisos}
								<tr>
									<td>{$pr.nombre}</td>
									<td>
										<input type="radio" name="perm_{$pr.id}" value="1" {if ($pr.valor == 1)} checked="checked"{/if} />
									</td>
									<td>
										<input type="radio" name="perm_{$pr.id}" value="" {if ($pr.valor == "")} checked="checked"{/if} />
									</td>
									<td>
										<input type="radio" name="perm_{$pr.id}" value="x" {if ($pr.valor === "x")} checked="checked"{/if} />
									</td>
								</tr>
							{/foreach}
						</tbody>
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