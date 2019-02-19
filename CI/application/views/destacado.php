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
								<a href="#" class="cta-btn">Shop now<i class="fa fa-arrow-circle-right"></i></a>
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
							<h3 class="title">Novedades</h3>
							
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
                                        <?php foreach($destacado as $value){ ?>
										
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src=<?=base_url('img/'.$value->Imagen)?> alt="" >
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?=$value->Nombre?></a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
                                        <?php } ?>
										
										
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
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

