<?php require_once(VIEWS_PATH . "nav.php"); ?>

<link rel="stylesheet" href="<?= CSS_PATH ?>/purchaseList.css">
<link rel="stylesheet" href="<?= CSS_PATH ?>/ticket.css">

<div class="container">
    <div id="box" class="row justify-content-center" style="background-color: #242424;">
        <!-- Inicio de la pantalla de pagos -->
        <div class="col-md-12">
            <div class="col-md-3">
                <h1 class="basic-font purchase-view-title">Datos de la compra</h1>                
            </div>
            <div class="row mt-5 ml-4 mb-5">
                <div class="col-md-4">
                    <div class="card" style="background-color: #242424; width: 18rem;">
                        <div class="basic-font card-header text-center title-info">
                            Detalles de la pelicula
                        </div>
                        <ul class="list-group list-group-flush">                            
                            <li class="basic-font list-group-item purchase-info-item " style="background-color: #242424;">Ciudad: <?= $show->getCity()->getName()?></li>
                            <li class="basic-font list-group-item purchase-info-item" style="background-color: #242424;">Cine: <?= $show->getCinema()->getName()?></li>
                            <li class="basic-font list-group-item purchase-info-item" style="background-color: #242424;">Sala: <?= $show->getRoom()->getName()?></li>                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="background-color: #242424; width: 18rem;">
                        <div class="basic-font card-header text-center title-info">
                            Detalles de la función
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="basic-font list-group-item purchase-info-item" style="background-color: #242424;">Pelicula: <?= $show->getMovie()->getTitle()?></li>
                            <li class="basic-font list-group-item purchase-info-item" style="background-color: #242424;">Inicio: <?= $show->getDateTimeFrom()?></li>
                            <li class="basic-font list-group-item purchase-info-item" style="background-color: #242424;">Finalización: <?= $show->getDateTimeTo() ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="background-color: #242424; width: 18rem;">
                        <div class="basic-font card-header text-center title-info">
                            Detalles de la compra
                        </div>
                        <ul class="list-group list-group-flush">                        
                            <li class="basic-font list-group-item purchase-info-item" style="background-color: #242424;">Precio por entrada: $<?= $show->getRoom()->getPrice()?></li>
                            <li class="basic-font list-group-item purchase-info-item" style="background-color: #242424;">Cantidad de entradas: <?= $cantTickets ?></li>
                            <li class="basic-font list-group-item purchase-info-item" style="background-color: #242424;">Total: $<?= $totalPrice ?></li>
                        </ul>
                    </div>
                </div>                
            </div>
            
            <!-- Tickets -->
            <div class="tickets-container">
            <?php
                                
                foreach ($tickets as $key) {
            ?>
                <div class="ticket-item">       
                    <div class="cardWrap-ticket">
                        <div class="card-ticket cardLeft-ticket">
                            <h1 class="h1-ticket">Movie <span class="h1-span-ticket">Pass</span></h1>
                            <div class="title-ticket">
                                <h2 class="h2-ticket">How I met your Mother</h2>
                                <span>pelicula</span>
                            </div>
                            <div class="name-ticket">
                                <h2 class="h2-ticket">Vladimir Kudinov</h2>
                                <span>cine</span>
                            </div>
                            <div class="seat-ticket">
                                <h2 class="h2-ticket">156</h2>
                                <span>sala</span>
                            </div>
                            <div class="time-ticket">
                                <h2 class="h2-ticket">12:00</h2>
                                <span>fecha</span>
                            </div>
                        </div>
                        <div class="card-ticket cardRight-ticket">
                            <div class="eye-ticket"></div>
                            <div class="number-ticket">
                                <img class="ticket-qr" src="<?= IMG_PATH ?>/qrtest.jpg" width="90" height="90"/>
                            </div>
                        </div>
                    </div>
                </div>
                <?php                                
                }
                ?>
            </div>
            <!-- Fin seccion tickets -->
        </div>
    </div>
</div>

