<?php 
function hitungvoucher($kode,$jumlah) {
	$voucher1="DumbWaysJos";
	$voucher2="DumbWaysMantap";

	if ($kode === $voucher1 && $jumlah >=50000) {
		$diskon = 20000;
		$potongan = 21.1 / 100;
		$bayar = $jumlah - $diskon;
		$kembalian = $jumlah - $bayar;

		echo "uang yang harus dibayar :".$bayar; 
		echo "<br>";
		echo "Diskon :".$diskon;
		echo "<br>";
		echo "kembalian :".$kembalian;

	} elseif ($kode === $voucher2 && $jumlah >= 80000) {
		$diskon = 40000;
		$potongan = 30 / 100;
		$bayar = $jumlah - $diskon;
		$kembalian = $jumlah - $bayar;

		echo "uang yang harus dibayar :".$bayar; 
		echo "<br>";
		echo "Diskon :".$diskon;
		echo "<br>";
		echo "kembalian :".$kembalian;


	} else {
		echo "Tidak ada diskon";
		echo "<br>";
		echo "uang yang harus dibayar :".$jumlah;
	}
}

echo hitungvoucher("DumbWaysMantap",90000); ?>