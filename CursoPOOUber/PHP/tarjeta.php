<?php

require_once('Payment.php');
class Tarjeta extends Payment{
    public $number;
    public $date;
    public $cvv;

    public function __constructor($id, $number, $date, $cvv){
        parent::__constructor($id);
        $this->number = $number;
        $this->date = $date;
        $this->cvv = $cvv;

    }
}
?>