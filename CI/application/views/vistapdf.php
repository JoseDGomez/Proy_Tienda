<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta dir="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>PDF</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?=base_url()?>css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/style.css"/>

</head>
<body>
    <table class="table table-condensed" style="border: 1;">
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
                            
                            
                            </tr>
                            
                        </tbody>
                    </table>
                    <h2><b>Total:</b><?= $this->cart->total()?> €</h2>
        <script src="<?=base_url()?>js/jquery.min.js"></script>
		<script src="<?=base_url()?>js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>js/slick.min.js"></script>
		<script src="<?=base_url()?>js/nouislider.min.js"></script>
		<script src="<?=base_url()?>js/jquery.zoom.min.js"></script>
		<script src="<?=base_url()?>js/main.js"></script>
</body>

</html>