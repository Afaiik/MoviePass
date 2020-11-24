<?php

namespace Interfaces;

use Models\Purchase as Purchase;

interface IPurchaseRepository{
    function GetAll();
    function GetAllByUserId($userId);
    function GetById($id);
    function AddOne(Purchase $purchase);
}

?>