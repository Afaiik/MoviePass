<?php require_once(VIEWS_PATH."nav.php"); ?>

<link rel="stylesheet" href="<?= CSS_PATH ?>/cinemaAbm.css">

<div class="container">
    <div id="box" class="row justify-content-center" style="background-color: #242424;">
        <!-- Inicio Abm Cines -->
        <div class="col-md-12">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <h1 class="basic-font cinema-view-title">Cine</h1>                
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Formulario Cines -->
                    <?php $action;
                        isset($cinema) ? $action = "Cinema/UpdateCinema" : $action = "Cinema/AddCine";
                    ?>
                    <form action="<?= FRONT_ROOT.$action ?> " method="POST" class="cinema-form">
                        <?php if(isset($$errorAbmCine)) {?>
                            <p class="alert alert-danger"><?=$$errorAbmCine?></p>
                        <?php }?>
                        <?php if(isset($successMsg)) {?>
                            <p class="alert alert-success"><?=$successMsg?></p>
                        <?php }?>
                        
                            <div class="form-content">
                                <!-- Solo para vista de modificacion -->
                                <div class="form-group" style="display:none;">
                                    <input type="number" name="id" class="form-control form-control-md cinema-input" placeholder="Capacidad" value="<?php if(isset($cinema)) {echo $cinema->getId();} ?>">
                                </div>
                                <div class="form-group">
                                    <label class="cinema-input-label" for="capacidad">Capacidad</label>
                                    <input type="number" name="capacidad" class="form-control form-control-md cinema-input" placeholder="Capacidad" value="<?php if(isset($cinema)) {echo $cinema->getCapacidad();} ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="cinema-input-label" for="valorEntrada">Valor Entrada</label>
                                    <input type="number" name="valorEntrada" class="form-control form-control-md cinema-input" placeholder="Valor Entrada" value="<?php if(isset($cinema)) {echo $cinema->getValorEntrada();} ?>" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="cinema-input-label" for="nombre">Nombre</label>
                                    <input type="text" name="nombre" class="form-control form-control-md cinema-input" placeholder="Nombre" value="<?php if(isset($cinema)) {echo $cinema->getNombre();}?>" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="cinema-input-label" for="direccion">Direccion</label>
                                    <input type="text" name="direccion" class="form-control form-control-md cinema-input" placeholder="Direccion" value="<?php if(isset($cinema)) {echo $cinema->getDireccion();}?>" required>
                                </div>
                                
                                <div class="form-group">
                                <label class="cinema-input-label" for="ciudad">Ciudad</label>
                                    <select name="ciudad" id="ciudad" class="form-control form-control-md cinema-input" placeholder="Ciudad">
                                    <option value="Marpla" <?php if(isset($cinema) && $cinema->getCiudad() == "Marpla") {echo "selected";}?> >Marpla</option>
                                    <option value="Batan"  <?php if(isset($cinema) && $cinema->getCiudad() == "Batan") {echo "selected";}?>>Batan</option>
                                    <option value="Miramar"  <?php if(isset($cinema) && $cinema->getCiudad() == "Miramar") {echo "selected";}?>>Miramar</option>
                                    <option value="Villa Gessel"  <?php if(isset($cinema) && $cinema->getCiudad() == "Villa Gessel") {echo "selected";}?>>Villa Gessel</option>
                                    </select>
                                </div>
                                
                            </div>
                        <button class="btn btn-block cinema-btn" type="submit"> <?php if(isset($cinema)) {echo "Actualizar Cine";} else { echo "Crear Cine";}?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>