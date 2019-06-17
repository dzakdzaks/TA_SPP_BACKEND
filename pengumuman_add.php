<?php
include 'server.php';

	 	$title = $_POST['title'];
	 	$isi = $_POST['isi'];
	
 if (isset($title) && isset($title)) {
 	   

 	 


 	   
$sql = mysql_query('INSERT INTO pengumuman (title, isi) VALUES ("'.$title.'","'.$isi.'")');

//variable array
$response = array();
//cek apakah ada data pembeli	
if ($sql) {
	 // $response = mysql_fetch_assoc($sql);
	// membuat variable array di dalam array $response
	$response['result'] = 1;
	$response['msg'] = "Sukses add ancnmt";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "gagal add ancnmt";
	echo json_encode($response);
}
}else {
	$response['result'] = 0;
	$response['msg'] = "Paremeter ancnmt";
	echo json_encode($response);
}
 

?>