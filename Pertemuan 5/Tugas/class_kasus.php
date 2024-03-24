<?php 
    class Vegetable {
        protected $name;
        protected $color;

        protected function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        protected function getInfo() {
            echo "Nama Sayuran: " .$this->name. "<br>";
            echo "Warna Sayuran: " .$this->color. "<br>";
        }
            
    }

    class BenefitsVegetables extends Vegetable {
        public $vitamin;

        public function __construct($name, $color, $vitamin) {
            parent::__construct($name, $color);
            $this->vitamin = $vitamin;   
        }

        public function getInfo() {
            parent::getInfo();
            echo "Vitamin yang Terkandung dalam Sayuran: " . $this->vitamin . "<br>";
        }
    }

    class LeafVegetables extends Vegetable {
        public $type;

        public function __construct($name, $color, $type) {
            parent::__construct($name, $color);
            $this->type = $type;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Jenis Sayuran: " . $this->type . " <br>";
        }
        
    }
?>