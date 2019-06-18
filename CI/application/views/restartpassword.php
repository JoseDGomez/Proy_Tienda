<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Reestablecer contraseña</h3>
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

	
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    	<!-- SECTION -->
		<div class="section">
	
        <form action="<?=site_url('PanelUsuario/updatePassword/'.$id.'/'.$token)?>" method="post">
			Nueva contraseña:<br>
				<input type="password" name="pass1">
				<?php echo form_error('pass1'); ?>
			<br>
			Repita la nueva contraseña:<br>
				<input type="password" name="pass2">
				<?php echo form_error('pass2'); ?>
			<br>
				<input type="submit" value="Submit">
				
		</form> 
			</div>
		</div>
	</div>