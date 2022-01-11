<?php
    class Payment {
        public $id;
        public $totalPayment;
        }

        public function __construct($totalPayment) {
            $this->totalPayment = $totalPayment;
          }

?>