<?php

function segitiga_pascal($n) {
	 
for($a =1; $a <= $n; $a++) // Pengulangan untuk barisan segitiga
{
echo "<center>"; // Agar paragraf ke tengah dan berbentuk segita
  	for($b =1; $b <= $a; $b++)
  	{
   		if($b == 1 || $b == $a) // kondisi jika $b dan $a benar
   		{
    		$value[$a][$b] = 1; // makan $value nya ini
   		}else { // jika tidak maka
   			$value[$a][$b] = $value[$a-1][$b] + $value[$a-1][$b-1]; // Rumus untuk menentukan barisan yang ke 2 dan seterusnya.
   		}
   		echo $value[$a][$b]." "; // tampilkan $value
  		}
echo "</center><br>";
 	}
} 

segitiga_pascal(5);