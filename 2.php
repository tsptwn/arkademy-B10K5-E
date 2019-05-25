<?php 


function betweenDays($date1, $date2){

	$start = new DateTime($date1);
	$end = new DateTime($date2);
	$interval = $start->diff($end)->format("%a"); //hitung jarak

	for ($i=0; $i <= $interval; $i++) { 


		$start = strtotime($date1);
		$besok = date("Y-m-d",strtotime("+$i days",$start));

		echo $besok."<br>";
	}

	

	return;

}

print_r(betweenDays("2019-11-01","2019-11-05"));
