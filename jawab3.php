
 <?php 
function hapuskata($string) {
	
	 $hasil = implode(' ', array_unique(explode(',', $string))); 

	 echo "Data sebelum dihilangkan :". $string;
	 echo "<br>";
	 echo "Data setelah dihilangkan :". $hasil;
}

echo hapuskata("a,a,a,b,c,d");

  ?>