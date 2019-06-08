
<?php
            /* @var $ci type */
            $ci = get_instance();
            $ci->load->model("login_model");
            $esta_dentro = $ci->login_model->esta_dentro();
            ?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Dirección de envío</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Nombre" placeholder="First Name" value="<?=$this->session->userdata("nombre");?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Apellidos" placeholder="Last Name" value="<?=$this->session->userdata("apellido");?>">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="Correo" placeholder="Email" value="<?=$this->session->userdata("correo");?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Direccion" placeholder="Address" value="<?=$this->session->userdata("direccion");?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Provincia" placeholder="City" value="<?=$this->session->userdata("provincia");?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="DNI" placeholder="Country" value="<?=$this->session->userdata("dni");?>">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="CP" placeholder="ZIP Code" value="<?=$this->session->userdata("cp");?>">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="Telefono" placeholder="Telephone" value="<?=$this->session->userdata("telefono");?>">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										¿No tienes cuenta?<a href="">Registrate</a>
									</label>
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Ship to a diffrent address?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Address">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Country">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telephone">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>
					
					<!-- Order Details -->
					
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						
						</div>
						<?php foreach ($this->cart->contents() as $producto): ?>
						<div class="order-summary">
						
							<div class="order-col">
							
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div><?=$producto["name"]?></div>
									<div><?=$producto["price"]?></div>
									
								</div>
							
							</div>
							<?php endforeach; ?>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?= $this->cart->total()?> €</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<li><a href="<?= site_url("Checkout/checkout/".$this->session->userdata("id"))?>" class="primary-btn order-submit">Place order</a>
						
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- jQuery Plugins
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script> -->

	</body>

