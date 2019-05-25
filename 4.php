<?php
    function cetak_gambar($angka){ 
        $tengah=($angka/2)+0.5;

        for ($i=1; $i <= $angka; $i++) { 
            for ($j=1; $j <= $angka; $j++) { 
                if ($i==1 ||$i==$angka||$j==$tengah) {
                    echo "x ";
                    //echo $j;
                }
                else {
                    echo "= ";
                   //echo $i;
                }
            }
               echo "<br>";
        }
    }

    cetak_gambar(5);


// [0]
// [1]
// [2]
// [3]
// [4]