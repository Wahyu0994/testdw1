<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "game");



function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	$name =htmlspecialchars($data["name"]);
	$type_id =htmlspecialchars($data["type_id"]);
	$photo =htmlspecialchars($data["photo"]);
	
	//query insert data
	$query = "INSERT INTO heroes
	        VALUES
	        ('', '$name', '$type_id', '$photo')";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}

function tambah2($data){
	global $conn;
	$name =htmlspecialchars($data["name"]);
	//query insert data
	$query = "INSERT INTO type
	        VALUES
	        ('', '$name')";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM heroes WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function hapus2($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM type WHERE id = $id");

	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	$id = ($data["id"]);
	$name =htmlspecialchars($data["name"]);
	$type_id =htmlspecialchars($data["type_id"]);
	$photo =htmlspecialchars($data["photo"]);
	
	//query insert data
	$query = "UPDATE heroes SET
	name = '$name',
	type_id = '$type_id',
	photo = '$photo'
	
	WHERE id = $id
	";


    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}


function ubah2($data){
	global $conn;
	$id = ($data["id"]);
	$name =htmlspecialchars($data["name"]);

	//query insert data
	$query = "UPDATE type SET
	name = '$name'

	WHERE id = $id
	";


    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}
 

 ?>
