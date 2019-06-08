		<!-- SECTION -->
		<?php foreach($categoria as $result){ ?>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					.
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src=<?=base_url('img/'.$result->Imagen)?> alt="">
							</div>
							<div class="shop-body">
								<h3><?=$result->Nombre?><br></h3>
								<?php ($id = $result->idCategoria); ?>
								<a href=<?=site_url('Inicio/muestraCategoria/'.$id)?> class="cta-btn">Shop now<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<?php }?>
					<!-- /shop -->
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			
			<div class="container">
				<!-- row -->
				<div class="row">
				
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
						<?php foreach($categoria as $result){ ?>
							<h3 class="title"><?= $result->Nombre ?></h3>
							<?php }?>
						</div>
					</div>
			
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
                                        <?php foreach($producto as $value){ ?>
											<?php ($idPro = $value->idProductos); ?>
										<?php $rebaja=$value->Precio_Venta-(($value->Precio_Venta * $value->Descuento)/100); ?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src=<?=base_url('img/'.$value->Imagen)?> alt="" >
												<div class="product-label">
													<span class="sale"><?=$value->Descuento; echo " %"?></span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href=<?=site_url('Producto/muestraProducto/'.$idPro)?>><?=$value->Nombre?></a></h3>
												<h4 class="product-price"><?= $rebaja; echo " €";?><del class="product-old-price"><?=$value->Precio_Venta; echo " €"?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											
										</div>
										<!-- /product -->
                                        <?php } ?>
										
										
									</div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?=$this->pagination->create_links()?>