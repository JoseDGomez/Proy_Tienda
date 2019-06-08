
        <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">

                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Inicia Sesion</h3>
                            </div>
                            <form action="<?php echo  site_url("login");?>" method="post">
                            <div class="form-group">
                                <input class="input" type="text" name="nombre_usuario_inicio" placeholder="Nombre Usuario" value="<?= set_value("nombre_usuario_inicio") ?>">
                                <?php echo form_error('nombre_usuario_inicio'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="pass_inicio" placeholder="Contraseña" value="<?= set_value("pass_inicio") ?>">
                                <?php echo form_error('pass_inicio'); ?>
                            </div>
                            
                            <div class="form-group">
                                <button class="input" type="submit" >Iniciar sesion</button>
                            </div>
                            </form>    
                        </div>
                    </div>
                   
                    <div class="col-sm-4">
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Crea Tu Cuenta</h3>
                            </div>
                            <form action="<?php echo site_url("register");?>" method="post">
                            <div class="form-group">
                                <input class="input" type="text" name="nombre" placeholder="Nombre" value="<?= set_value("nombre") ?>">
                                <?php echo form_error('nombre'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="apellido" placeholder="apellido" value="<?= set_value("apellido") ?>">
                                <?php echo form_error('apellido'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="email" placeholder="Email" value="<?= set_value("email") ?>">
                                <?php echo form_error('email'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="direccion" placeholder="Direccion" value="<?= set_value("direccion") ?>">
                                <?php echo form_error('direccion'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="cp" placeholder="Codigo Postal" value="<?= set_value("cp") ?>">
                                <?php echo form_error('cp'); ?>
                            </div>
                            <div class="form-group">
                            <?php echo form_dropdown('provincia', $provincias, '', 'class="form-control"');?> 
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="dni" placeholder="DNI" value="<?= set_value("dni") ?>">
                                <?php echo form_error('dni'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="nombre_usuario" placeholder="Nombre Usuario" value="<?= set_value("nombre_usuario") ?>">
                                <?php echo form_error('nombre_usuario'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="pass" placeholder="Contraseña" value="<?= set_value("pass") ?>">
                                <?php echo form_error('pass'); ?>
                            </div>
                           <div class="form-group">
                                <button class="input" type="submit" >Registrarse</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/form-->






   