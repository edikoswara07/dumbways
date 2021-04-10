<?php

function bilang($baris , $kolom) {
        $prima = "";

  for($i=1;$i<=40;$i++){ 
        $a = 0; 
        for($j=1;$j<=$i;$j++){ 
            if($i % $j == 0){ 
                $a++;
            }
        }
        if($a == 2){ 
            $prima .= $i." ";
            //print_r($array);
        }
    }
    
    $prima = rtrim($prima); // hilangkan string
    
    $prima1 = (explode(" ",$prima)); // pecah jadi array
    
    
        $index = 0;
        foreach ($prima1 as $value) {
            if ($index && $index%$baris === 0) { // cari sisa pembagian berdasarkan baris
              echo "<br />";
            }
            echo $value . ",";
            $index++;
        }
        
}

bilang(4,3);



