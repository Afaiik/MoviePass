<?php require_once(VIEWS_PATH."nav.php"); ?>

<link rel="stylesheet" href="<?= CSS_PATH ?>/cinemaList.css">

<div class="container">
    <div id="box" class="row justify-content-center" style="background-color: #242424;">
        <!-- Inicio Listado de Estrenos -->
        <div class="col-md-12">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <h1 class="basic-font cinema-view-title">Cine</h1>                
                </div>
            </div>
            <div class="row cinema-header-row">
                <div class="col-md-10 cinema-header">
        <!--<div class="row cinema-header-row">
                <div class="col-md-10 cinema-header"> -->
                    Cine: <?= $cinema->getName()?>
                    <br>
                    Dirección: <?= $cinema->getAddress()?>
                </div>
                <div class="col-md-2">
                    <div class="form-content">
                        <div class="form-group">
                            <a href="<?= FRONT_ROOT ?>Cinema/RoomAddView?cineId=<?=$cineId?>" class="btn btn-success">Agregar Sala</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-3">
                    <h1 class="basic-font cinema-view-title">Salas</h1>                
                </div>
            </div>
            <?php 
            if(!empty($deleteMsg)){
            ?>
                <div class="row text-center">
                    <p class="alert alert-danger ml-5 mr-5"><?=$deleteMsg?></p>
                </div>
            <?php 
            }
            ?>
            <?php 
            if(!empty($successMsg)){
            ?>
                <div class="row text-center">
                    <p class="alert alert-success ml-5 mr-5"><?=$successMsg?></p>
                </div>
            <?php 
            }
            ?>
            
            <div class="row">
                <div class="col-md-12">
                <!--Listado de Cines-->
                    <div class="row">
                        <div class="cinema-list">
                        <?php 
                        foreach($rooms as $key){
                        ?>
                            <!--Items de Cines-->
                            <div class="cinema-item">
                                <div class="column-1">
                                    <h3>Nombre: <?= $key->getName() ?></h3>
                                    <br/>
                                    <h3>Capacidad: <?= $key->getCapacity() ?></h3>
                                    <br/>
                                    <h3>Precio: $<?= $key->getPrice() ?></h3>
                                </div>
                                <div class="column-2">
                                    <a type="button" class="btn btn-danger btn-abm-cinema" title="Eliminar Sala" href="<?= FRONT_ROOT ?>Cinema/DeleteRoom?id=<?=$key->getId()?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                            <path fill="white" fill-rule="evenodd" d="M16 1.75V3h5.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75zm-6.5 0a.25.25 0 01.25-.25h4.5a.25.25 0 01.25.25V3h-5V1.75z"></path><path d="M4.997 6.178a.75.75 0 10-1.493.144L4.916 20.92a1.75 1.75 0 001.742 1.58h10.684a1.75 1.75 0 001.742-1.581l1.413-14.597a.75.75 0 00-1.494-.144l-1.412 14.596a.25.25 0 01-.249.226H6.658a.25.25 0 01-.249-.226L4.997 6.178z" fill="white"></path><path d="M9.206 7.501a.75.75 0 01.793.705l.5 8.5A.75.75 0 119 16.794l-.5-8.5a.75.75 0 01.705-.793zm6.293.793A.75.75 0 1014 8.206l-.5 8.5a.75.75 0 001.498.088l.5-8.5z" fill="white"></path>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-info btn-abm-cinema" title="Editar Sala" href="<?= FRONT_ROOT ?>Cinema/UpdateRoomShowView?id=<?=$key->getId()?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                            <path fill="white" fill-rule="evenodd" d="M17.263 2.177a1.75 1.75 0 012.474 0l2.586 2.586a1.75 1.75 0 010 2.474L19.53 10.03l-.012.013L8.69 20.378a1.75 1.75 0 01-.699.409l-5.523 1.68a.75.75 0 01-.935-.935l1.673-5.5a1.75 1.75 0 01.466-.756L14.476 4.963l2.787-2.786zm-2.275 4.371l-10.28 9.813a.25.25 0 00-.067.108l-1.264 4.154 4.177-1.271a.25.25 0 00.1-.059l10.273-9.806-2.94-2.939zM19 8.44l2.263-2.262a.25.25 0 000-.354l-2.586-2.586a.25.25 0 00-.354 0L16.061 5.5 19 8.44z" fill="white"></path>
                                        </svg>
                                    </a>    
                                    <img src="<?= IMG_PATH ?>/CinemaLosGallegos.jpg" width="225" height="125"/>                                
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                            <?php 
                                if(count($rooms) == 0){
                            ?>
                            <div class="alert alert-danger">
                                    No se encontraron resultados :(
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>