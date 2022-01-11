<?php
require_once('account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passengers;

    public function __construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
      }
        
      public function printDataCar() {
        echo "
            Licencia: $this->license 
            \nDriver: {$this->driver->name} 
            \nNúmero de pasajeros: $this->passenger
            \n
            ";
    }

    public function getPassenger() {
      return $this->passenger;
  }

  public function setPassenger($passenger) {
        
    if ($passenger == 4) {
        $this->passenger = $passenger;
    }
    else {
        echo "Necesitas asignar 4 pasajeros";
    }

  }
  
}
?>