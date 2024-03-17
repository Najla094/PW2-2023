<?php 

    class Car {
        // property // public: hak akses 
        public $brand;
        public $color;

        //method
        function getBrand() {
            return $this->brand;
        }
    }

    // object
    $rubicon = new Car();
    $tesla = new Car();

    // echo diluar :
    echo $rubicon->brand = "Rubicon";
    echo '<br>';
    echo $tesla->brand = "Tesla";

    // echo didalam function :
    echo $rubicon->getBrand();
    echo "<br>";
    echo $tesla->getBrand();

?>