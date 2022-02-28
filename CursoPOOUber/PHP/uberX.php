<?php
require_once('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license,$driver);
        $this->brand = $brand;
        $this->model = $model;
    }
    public function printDataUserX(){
        echo "Name: $this->license
        Document: $this->driver
        E-mail: $this->brand
        Password: $this->model";
        echo "<br>";

    }


}
?>