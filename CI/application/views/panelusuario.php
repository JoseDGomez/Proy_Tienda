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
		<a href="<?=site_url('PanelUsuario/cambiaBaja')?>"><button class="btn btn-success btn-lg">Dar de baja</button></a>
	
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
					<form role="form" method="post" action="<?php echo site_url("PanelUsuario/index");?>">
                        <div class="form-group">
							<label for="password">Dirección</label>
							<input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?=$this->session->userdata("direccion") ?>"/>
                        </div>
                        <div class="form-group">
							<label for="password">Provincia</label>
							<?php echo form_dropdown('provincia', $provincias, '', 'class="form-control"');?> 
                        </div>
                        <div class="form-group">
							<label for="tlf">Telefono</label>
							<input type="text" class="form-control" name="tlf" placeholder="telefono" value="<?=$this->session->userdata("telefono") ?>"/>
                        </div>
                        <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-default" value="Realizar cambios" />
				</div>
					</form>
				</div>
				
				<!-- Modal Footer -->
				
			</div>
		</div>
	</div>

	<div class="container">
  <h2 class="text-center" style="margin-top: 30px;">Pedidos</h2>
  <br><br>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-database" aria-hidden="true"></i> Pedidos</h3>
    </div>
    <div class="panel-body">
   <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <thead>
               <tr >
                 <th>Estado</th>
                 <th>Direccion</th>
                 <th>Código Postal</th>
                 <th>DNI</th>
                 <th class="text-center">Eliminar Pedido</th>                          
               </tr>
             </thead>
             <tbody>
			   <?php foreach ($allpedidos as $row) : ?>
			   <?php $estado=$row->Estado ?>
               <tr>
                 <td><?php echo $row->Estado ?></td>
                 <td><?php echo $row->Direccion ?></td>
                 <td><?php echo $row->CP ?></td>
                 <td><?php echo $row->DNI ?></td>
				 <?php if($estado != 'A' && $estado != 'E' && $estado != 'R'){?>
                 <td><center><a href=<?=site_url('PanelUsuario/borraPedido/'.$row->idPedido)?>><button type="button" class="btn btn-danger" data-dismiss="modal">Anular</button></a></center></td>
				 <?php } ?>
               </tr>
               <?php endforeach; ?>
             </tbody>            
           </table>
    </div>
  </div>
 </div>
 <!-- view Modal -->
 <div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="margin-top: -20px;">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         <h4 class="modal-title" id="myModalLabel">Phone Details</h4>
       </div>
       <div class="modal-body">
        <!-- Place to print the fetched phone -->
         <div id="phone_result"></div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

		