
<?php
            /* @var $ci type */
            $ci = get_instance();
            $ci->load->model("login_model");
            $esta_dentro = $ci->login_model->esta_dentro();
            ?>

<?php $id = $this->session->userdata("id"); ?>
        <div class="section">
            <div class="container">
            
            
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description"></td>
                                <td class="price">Precio</td>
                                <td class="quantity">Cantidad</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>

                
                            <?php foreach ($this->cart->contents() as $producto): ?>
                            
                            <tr>
                                <td class="cart_product">
                                    <!-- <a href=""><img src="<?= base_url(); ?>assets/img/cart/one.png" alt=""></a> -->
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""><?=$producto["name"]?></a></h4>
                                    <p>Web ID: <?=$producto["rowid"]?></p>
                                </td>

                                <td class="cart_price">
                                    <p><?=$producto["price"]?> €</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <?=$producto["qty"]?>
                                    
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price"></p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="<?= site_url("Carrito/remove/" . $producto["rowid"]); ?>"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            
                            <?php endforeach; ?>
                            
                            <a href="<?= site_url("Carrito/destroy/")?>"><button type="button" class="btn btn-danger">Eliminar todo</button></a>
                            </tr>
                            
                        </tbody>
                    </table>
                    <h2><b>Total:</b><?= $this->cart->total()?> €</h2>
                    
                </div>
                <?php if($this->cart->contents() != null){ ?>
                <?php if ($esta_dentro) { ?>
                    <a href="<?= site_url("Checkout/cambiaCheck/")?>"><button type="button" class="btn btn-primary btn-lg btn-block" style="background-color:#0080FF;">Proceder al pedido</button></a>
                        <?php } if (!$esta_dentro) { ?>
                            <li><a href="<?php echo site_url('login'); ?>"><button type="button" class="btn btn-primary btn-lg btn-block" style="background-color:#0080FF;">Registrate o inicia sesión para continuar</button></a></li>
                        <?php }?>
                    <?php }?>
            </div>
        </div> <!--/#cart_items-->



    </body>

    </html>