<?php require_once(VIEWS_PATH . "nav.php"); ?>

<link rel="stylesheet" href="<?= CSS_PATH ?>/purchaseList.css">

<div class="container">
    <div id="box" class="row justify-content-center" style="background-color: #242424;">
        <!-- Inicio Listado de Estrenos -->
        <div class="col-md-12">
            <form action="<?= FRONT_ROOT ?>purchase/purchaseSearch" method="POST" class="purchase-form">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <h1 class="basic-font purchase-view-title">Compras</h1>
                    </div>
                </div>
            </form>
            <?php
            if (!empty($deleteMsg)) {
            ?>
                <div class="row text-center">
                    <p class="alert alert-danger ml-5 mr-5"><?= $deleteMsg ?></p>
                </div>
            <?php
            }
            ?>
            <?php
            if (!empty($successMsg)) {
            ?>
                <div class="row text-center">
                    <p class="alert alert-success ml-5 mr-5"><?= $successMsg ?></p>
                </div>
            <?php
            }
            ?>

            <div class="row">
                <div class="col-md-12">
                    <!--Listado de Compras-->
                    <div class="row">
                        <div class="purchase-list">
                            <?php
                                
                                foreach ($purchases as $key) {
                            ?>
                                <!--Items de Compras-->
                                <div class="purchase-item">
                                    <div class="column-1">
                                        <h3><?= $key->getShow()->getMovie()->getTitle()?></h3>
                                        <br />
                                        <p>
                                            <?= $key->getShow()->getMovie()->getDescription()?>
                                        </p>
                                        <br />
                                        <p>Cine: <?= $key->getShow()->getCinema()->getName()?></p>
                                        <p>Sala: <?= $key->getShow()->getRoom()->getName()?></p>
                                        <p>Horario de inicio: <?= $key->getShow()->getDateTimeFrom()?></p>
                                        <p>Horario de finalización: <?= $key->getShow()->getDateTimeTo()?></p>
                                        <a type="button" title="Ver Tickets" href="<?= FRONT_ROOT ?>Purchase/ViewTickets?purchaseId=<?= $key->getId() ?>" class="purchase-btn">Ver Compra</a>
                                    </div>
                                    <div class="column-2">                            
                                        <img class="purchase-img" src="<?= IMG_LINK_W500 . $key->getShow()->getMovie()->getImgLink()?>" width="195" height="275" />
                                    </div>
                                </div>
                            <?php                                
                            }
                            ?>
                            <?php
                            if (count($purchases) == 0) {
                            ?>
                                <div class="basic-font">
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