<?php
            /* @var $ci type */
            $ci = get_instance();
            $ci->load->model("login_model");
            $esta_dentro = $ci->login_model->esta_dentro();
            ?>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Panel del usuario</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Blank</li>
						</ul>
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
			<!-- Button to trigger modal -->
		<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">Cambiar datos</button>
	
	<!-- Modal -->
	<div class="modal fade" id="modalForm" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Contact Form</h4>
				</div>
				
				<!-- Modal Body -->
				<div class="modal-body">
					<p class="statusMsg"></p>
					<form role="form">
						<div class="form-group">
							<label for="inputName">Nombre</label>
							<input type="text" class="form-control" id="inputName" placeholder="Introduce tu usuario" value="<?=$this->session->userdata("nombre_usuario") ?>"/>
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Introduce tu correo" value="<?=$this->session->userdata("correo") ?>"/>
						</div>
						<div class="form-group">
							<label for="password">Contraseña</label>
							<input type="password" class="form-control" id="password" placeholder="Contraseña" value="<?=$this->session->userdata("pass") ?>"/>
                        </div>
                        <div class="form-group">
							<label for="password">Dirección</label>
							<input type="text" class="form-control" id="password" placeholder="Contraseña" value="<?=$this->session->userdata("direccion") ?>"/>
                        </div>
                        <div class="form-group">
							<label for="password">Provincia</label>
							<input type="text" class="form-control" id="password" placeholder="Contraseña" value="<?=$this->session->userdata("provincia") ?>"/>
                        </div>
                        <div class="form-group">
							<label for="tlf">Telefono</label>
							<input type="text" class="form-control" id="tlf" placeholder="Contraseña" value="<?=$this->session->userdata("telefono") ?>"/>
                        </div>
                        
					</form>
				</div>
				
				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
				</div>
			</div>
		</div>
	</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		