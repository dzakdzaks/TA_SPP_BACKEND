<?php
include 'server.php';

 if (isset($_POST['nis_user'])) {
 	    $nis = $_POST['nis_user'];
 	 
// perintah untuk menampilkan semua data pembeli dari table pembeli
$sql = mysql_query("SELECT * FROM pembayaran ORDER BY created ASC")or die(mysql_error());
//variable array
$response = array();
//cek apakah ada data pembeli
if (mysql_num_rows($sql)>0) {
	// membuat variable array di dalam array $response
	$response['payment'] = array();
	// loping data pembeli
	while ($row = mysql_fetch_array($sql)) {
		//membuat variable array untuk menampung data pembeli sementara sebelum di masukan kedalam array response dan di jadkan data json
			$data = array();
		$data["id_payment"] = $row["id_payment"];
		$data["nama_payment"] = $row["nama_payment"];
		$data["value_payment"] = $row["value_payment"];
		$data["catatan_payment"] = $row["catatan_payment"];
		$data["created"] = $row["created"];
		
		//akhir dari memasukan data kedalam array $data
		array_push($response['payment'],$data);
	}
	$response['result'] = 1;
	$response['msg'] = "Semua payment";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "Tidak payment";
	echo json_encode($response);
} 
} 

	
?>