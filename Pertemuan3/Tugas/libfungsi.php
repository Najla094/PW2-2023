<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
*/
/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
	function kelulusan($nilai_uts, $nilai_uas, $nilai_tugas){
		$total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
		if ($total_nilai > 55) {
			return "Lulus";
		} else {
			return "Tidak Lulus";
		}
	}

		
	
	 /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 

	function grade($total_nilai) {
		if ($total_nilai <=100 && $total_nilai >85){
			return "A" ;
		} elseif ($total_nilai <=84 && $total_nilai >70) {
			return "B" ;
		} elseif ($total_nilai <=69 && $total_nilai >56) {
			return "C";
		} elseif ($total_nilai <=55 && $total_nilai >36) {
			return "D" ;
		} elseif ($total_nilai <=35) {
			return "E" ;
		} else {
			return "I" ;
		}
	}
?>