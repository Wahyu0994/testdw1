
<?php

$x = 5;
  for ($i=1; $i <= $x ; $i++) { 

// Pengulangan untuk barisan segitiga

            echo"<br> ";

  for ($j=1; $j <= $i ; $j++) { // Pengulangan hitungan  

     if ($j==1 || $j==$i) { //condition : jika $j == 1 atau

 $j == $i; //dengan bersifat benar  

     $hasil[$i][$j]=1; // maka akan membuat array $hasil yang bernilai $i dan $j pertama

   }else{              // jika tidak maka

       $hasil[$i][$j]=$hasil[$i-1][$j]+$hasil[$i-1][$j-1];

//akan menggunakan rumus ini untuk menentukan barisan yang ke 2 dst.

   }

     echo $hasil[$i][$j]." ";// tampilkan $hasil 

  }      

 }

 ?>