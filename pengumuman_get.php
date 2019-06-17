<?php
include 'server.php';

 if (isset($_POST['nis_user'])) {
 	    $nis = $_POST['nis_user'];
 	 
// perintah untuk menampilkan semua data pembeli dari table pembeli
$sql = mysql_query("SELECT * FROM pengumuman ORDER BY id DESC")or die(mysql_error());
//variable array
$response = array();
//cek apakah ada data pembeli
if (mysql_num_rows($sql)>0) {
	// membuat variable array di dalam array $response
	$response['pengumuman'] = array();
	// loping data pembeli
	while ($row = mysql_fetch_array($sql)) {
		//membuat variable array untuk menampung data pembeli sementara sebelum di masukan kedalam array response dan di jadkan data json
			$data = array();
		$data["id"] = $row["id"];
		$data["title"] = $row["title"];
		$data["isi"] = $row["isi"];
		$data["created"] = $row["created"];
		
		//akhir dari memasukan data kedalam array $data
		array_push($response['pengumuman'],$data);
	}
	$response['result'] = 1;
	$response['msg'] = "Semua pengumuman";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "Tidak pengumuman";
	echo json_encode($response);
} 
} 

	
?>