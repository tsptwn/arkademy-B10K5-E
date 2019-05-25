<?php 


function countVowels($text = '', $a = '', $b = '')
{

	$length = strlen($text); //hitung panjang

	$result = '';
	for ($i=0; $i < $length; $i++) { 
		
		if ($text[$i] == $a ) {
			$result = str_replace($a, $b, $text);
		}
		else{
			continue;
		}
	}

	return $result;
}


print_r(countVowels("Purwakarta","a","o"));