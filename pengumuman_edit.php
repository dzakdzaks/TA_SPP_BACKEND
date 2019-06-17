<?php
include 'server.php';

		$id = $_POST['id'];
		$title = $_POST['title'];
		$isi = $_POST['isi'];
	 

 if (isset($id) && isset($title) && isset($isi)) {
 	   
 	   
$sql = mysql_query("UPDATE pengumuman SET id = '$id', title = '$title', isi = '$isi' WHERE id = '$id'")or die(mysql_error());
//variable array
$response = array();
//cek apakah ada data pembeli
if ($sql) {
	 // $response = mysql_fetch_assoc($sql);
	// membuat variable array di dalam array $response
	$response['result'] = 1;
	$response['msg'] = "Sukses edit siswa";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "gagal edit siswa";
	echo json_encode($response);
}
}else {
	$response['result'] = 0;
	$response['msg'] = "Paremeter Salah";
	echo json_encode($response);
}
 

?>