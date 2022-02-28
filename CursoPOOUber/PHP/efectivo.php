<?php

require_once('Payment.php');
class Efectivo extends Payment{
    public $cantidad;

    public function __constructor($id, $cantidad){
        parent::__constructor($id);
        $this->cantidad = $cantidad;

    }
}
?>