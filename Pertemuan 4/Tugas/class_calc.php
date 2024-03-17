<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        
        public function __construct() {

        }

        public function tambah($bilangan1, $bilangan2) {
            return $bilangan1 + $bilangan2;
        }

        public function kurang($bilangan1, $bilangan2) {
            return $bilangan1 - $bilangan2;
        }

        public function kali($bilangan1, $bilangan2) {
            return $bilangan1 * $bilangan2;
        }

        public function bagi($bilangan1, $bilangan2) {
            return $bilangan1 / $bilangan2;
        }
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator();
    $bilangan1 = 10;
    $bilangan2 = 5;

    echo '<br>Penambahan =' . $calculator->tambah($bilangan1, $bilangan2);
    echo '<br>Pengurangan =' . $calculator->kurang($bilangan1, $bilangan2);
    echo '<br>Perkalian =' . $calculator->kali($bilangan1, $bilangan2);
    echo '<br>Pembagian =' . $calculator->bagi($bilangan1, $bilangan2);


?>