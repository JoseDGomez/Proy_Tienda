<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('Grocery/admin_Productos')?>'>Productos</a> |
		<a href='<?php echo site_url('Grocery/admin_Usuarios')?>'>Usuarios</a> |
		<a href='<?php echo site_url('Grocery/admin_Pedidos')?>'>Pedidos</a> |
		<a href='<?php echo site_url('Grocery/admin_Categorias')?>'>Categorias</a> | 
		<a href='<?php echo site_url('Grocery/admin_LineaPedidos')?>'>Linea de Pedidos</a> |		 
		
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
