<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		require_once 'class_balok.php';

		//object
		$balok1 = new Balok(29, 16, 7);
		$balok2 = new Balok(10, 28, 4);
		$balok3 = new Balok(40, 15, 5);
		$balok4 = new Balok(30, 28, 2);

		//luas balok
		echo '<br>Luas Balok 1 =' .$balok1->getLuas() . ' cm';
		echo '<br>Luas Balok 2 =' .$balok2->getLuas() . ' cm';
		echo '<br>Luas Balok 3 =' .$balok3->getLuas() . ' cm';
		echo '<br>Luas Balok 4 =' .$balok4->getLuas() . ' cm';

		// keliling balok
		echo '<br><br>Keliling Balok 1 =' .$balok1->getKeliling() . ' cm';
		echo '<br>Keliling Balok 2 =' .$balok2->getKeliling() . ' cm';
		echo '<br>Keliling Balok 3 =' .$balok3->getKeliling() . ' cm';
		echo '<br>Keliling Balok 4 =' .$balok4->getKeliling() . ' cm';

		// volume balok
		echo '<br><br>Volume Balok 1 =' .$balok1->getVolume() . ' cm';
		echo '<br>Volume Balok 2 =' .$balok2->getVolume() . ' cm';
		echo '<br>Volume Balok 3 =' .$balok3->getVolume() . ' cm';
		echo '<br>Volume Balok 4 =' .$balok4->getVolume() . ' cm';

		
        
?>