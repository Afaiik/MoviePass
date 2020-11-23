<?php require_once(VIEWS_PATH."nav.php"); ?>

<link rel="stylesheet" href="<?= CSS_PATH ?>/cinemaList.css">
<link rel="stylesheet" href="<?= CSS_PATH ?>/purchaseList.css">

<div class="container">
    <div id="box" class="row justify-content-center" style="background-color: #242424;">
        <!-- Inicio Listado de Estrenos -->
        <div class="col-md-12">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <h1 class="basic-font cinema-view-title">Funciones</h1>                
                </div>
            </div>
            <?php 
            if(!empty($deleteMsg)){
            ?>
                <div class="row text-center">
                    <div class="alert alert-danger ml-5 mr-5 alert-dismissible fade show" role="alert">
                        <span><?=$deleteMsg?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php 
            }
            ?>
            <?php 
            if(!empty($successMsg)){
            ?>
                <div class="row text-center">
                    <div class="alert alert-danger ml-5 mr-5 alert-dismissible fade show" role="alert">
                        <span><?=$successMsg?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php 
            }
            ?>

            <div class="row ">
                <div class="show-header-row">
                    <h1 class="cinema-header ">
                        Filtrar Funciones
                    </h1>
                </div>
                

                <div class="col-md-12 filter-container">
                    <form action="<?= FRONT_ROOT ?>Show/GetShowsByCinemaIdAndDateRange" method="GET" class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-content">
                                    <!-- Fecha Desde -->
                                    <div class="form-group">
                                        <label class="cinema-input-label" for="dateTimeFrom">Fecha Desde</label>
                                        <input name="dateTimeFrom" id="dateTimeFrom" type="datetime-local" min="<?php echo date("Y-m-d")?>T00:00" class="form-control form-control-md cinema-input" placeholder="Fecha / Hora" required />
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-content">
                                    <!-- Fecha Hasta -->
                                    <div class="form-group">                                    
                                        <label class="cinema-input-label" for="dateTimeTo">Fecha Hasta</label>
                                        <input name="dateTimeTo" id="dateTimeTo" type="datetime-local" min="<?php echo date("Y-m-d")?>T00:00" class="form-control form-control-md cinema-input" placeholder="Fecha / Hora" required />                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-content">
                                    <!-- Cines -->
                                    <div class="form-group">
                                        <label class="cinema-input-label" for="cinemaId">Cines</label>
                                        <select name="cinemaId" id="cinemaSearchInput" class="form-control form-control-md cinema-input" placeholder="Cines" required>
                                            <option value="" selected> Seleccione... </option>
                                            <?php 
                                                    foreach($cinemas as $cinema){
                                                ?>
                                                        <option value="<?=$cinema->getId()?>"><?=$cinema->getName()?></option>
                                                <?php 
                                                    }
                                                ?>    
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        
                            <div class="col-md-4">
                                <div class="form-content">
                                    <div class="form-group">
                                        <button id="searchMovie" class="btn btn-block btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-content">
                                    <div class="form-group">
                                        <a href="<?= FRONT_ROOT ?>Show" class="btn btn-block btn-secondary" type="submit">Limpiar Filtros</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-content">
                                    <div class="form-group">
                                        <a href="<?= FRONT_ROOT?>Movie" class="btn btn-block btn-success">Agregar Funcion</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                

            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <!--Listado de Compras-->
                    <div class="row">
                        <div class="purchase-list">
                        <?php 
                        foreach($shows as $key){
                        ?>

                            <!--Items de Compras-->
                            <div class="purchase-item">
                                <div class="column-1">
                                    <h3>Pelicula: <?= $key->getMovie()->getTitle() ?></h3>
                                    <br />
                                    <p><?= $key->getMovie()->getDescription() ?> </p>
                                    <br />
                                    <p>Ciudad: <?= $key->getCity()->getName() ?></p>
                                    <p>Cine: <?= $key->getCinema()->getName() ?></p>
                                    <p>Sala: <?= $key->getRoom()->getName() ?> </p>
                                    <p>Precio: <?= $key->getRoom()->getPrice() ?></p>
                                    <p>Capacidad: <?= $key->getRoom()->getCapacity() ?> </p>
                                    <p>Fecha Desde: <?= $key->getDateTimeFrom() ?> </p>
                                    <p>Fecha Hasta: <?= $key->getDateTimeTo() ?> </p>
                                    
                                    <a type="button" class="btn btn-danger purchase-btn-danger" title="Eliminar Show" href="<?= FRONT_ROOT ?>Show/DeleteShow?id=<?=$key->getId()?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                            <path fill="white" fill-rule="evenodd" d="M16 1.75V3h5.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75zm-6.5 0a.25.25 0 01.25-.25h4.5a.25.25 0 01.25.25V3h-5V1.75z"></path><path d="M4.997 6.178a.75.75 0 10-1.493.144L4.916 20.92a1.75 1.75 0 001.742 1.58h10.684a1.75 1.75 0 001.742-1.581l1.413-14.597a.75.75 0 00-1.494-.144l-1.412 14.596a.25.25 0 01-.249.226H6.658a.25.25 0 01-.249-.226L4.997 6.178z" fill="white"></path><path d="M9.206 7.501a.75.75 0 01.793.705l.5 8.5A.75.75 0 119 16.794l-.5-8.5a.75.75 0 01.705-.793zm6.293.793A.75.75 0 1014 8.206l-.5 8.5a.75.75 0 001.498.088l.5-8.5z" fill="white"></path>
                                        </svg>
                                    </a>
                                    
                                </div>
                                <div class="column-2">                            
                                    <img class="purchase-img" src="<?= IMG_LINK_W500 . $key->getMovie()->getImgLink()?>" width="195" height="275" />
                                </div>
                            </div>

                            

                        <?php
                        }
                        ?>
                            <?php 
                                if(count($shows) == 0){
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
</div>