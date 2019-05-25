<?php 


function countVowels($kata)
{
	$kataAwal = trim($kata); //kata awal
	$toLowerCase = strtolower($kataAwal); //convert ke lower case
	$teks = str_replace(" ", "", $toLowerCase); //hapus spasi
	$panjang = strlen($teks); //hitung panjang

	$vokal = 0;
	for ($i=0; $i < $panjang; $i++) { 
		
		if ($teks[$i] == 'a' ||$teks[$i] == 'i' ||$teks[$i] == 'u' ||$teks[$i] == 'e' ||$teks[$i] == 'o') {
			$vokal = $vokal+1;
		}
		else{
			continue;
		}
	}

	return $vokal;
}


echo "Jumlah Huruf Vokal : ".countVowels("Trianto Septiawan.....");