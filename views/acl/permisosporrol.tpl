<div class="row"><div class="col-xs-12"><br></div></div>
<div class="row">
	<div class="col-xs-12"><br></div>
</div>
<form method="POST" enctype="multipart/form-data" >
	<div class="col-md-6">
		<div class="box box-success">
			<div class="box-header">
				<h3 class="box-title">
					Relación de Roles
				</h3>
			</div>
			<div class="box-body">
				<ul>
					{if isset($roles) && count($roles)}
						{foreach from=$roles item=datos}
							<li><a href="{$_layoutParams.root}acl/roles/{$datos.id_role} ">{$datos.role}</a></li>
						{/foreach}
					{/if}
				</ul>
			</div>
		</div>
	</div>
</form>