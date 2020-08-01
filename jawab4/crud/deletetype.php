<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus2($id) > 0 ) {
	echo "<script>
    	alert('data berhasil dihapus');
    	document.location.href = 'tabeltype.php';
    	</script>
    	";
} else {
	echo mysqli_error($conn);
}

 ?>