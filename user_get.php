<?php
include 'server.php';

 if (isset($_POST['kelas_user'])) {
 	    $kelas = $_POST['kelas_user'];
 	 
// perintah untuk menampilkan semua data pembeli dari table pembeli
$sql = mysql_query("SELECT * FROM users WHERE kelas_user = '$kelas' ORDER BY no_urut_user ASC")or die(mysql_error());
//variable array
$response = array();
//cek apakah ada data pembeli
if (mysql_num_rows($sql)>0) {
	// membuat variable array di dalam array $response
	$response['user'] = array();
	// loping data pembeli
	while ($row = mysql_fetch_array($sql)) {
		//membuat variable array untuk menampung data pembeli sementara sebelum di masukan kedalam array response dan di jadkan data json
			$data = array();
		$data["id_user"] = $row["id_user"];
		$data["nis_user"] = $row["nis_user"];
		$data["no_urut_user"] = $row["no_urut_user"];
		$data["nama_user"] = $row["nama_user"];
		$data["pass_user"] = $row["pass_user"];
		$data["ttl_user"] = $row["ttl_user"];
		$data["kelas_user"] = $row["kelas_user"];
		$data["jk_user"] = $row["jk_user"];
		$data["agama_user"] = $row["agama_user"];
		$data["alamat_user"] = $row["alamat_user"];
		$data["no_telpon_user"] = $row["no_telpon_user"];
		$data["sakit_user"] = $row["sakit_user"];
		$data["izin_user"] = $row["izin_user"];
		$data["alpha_user"] = $row["alpha_user"];
		$data["role_user"] = $row["role_user"];
		//akhir dari memasukan data kedalam array $data
		array_push($response['user'],$data);
	}
	$response['result'] = 1;
	$response['msg'] = "semua siswa kelas " . $kelas ;
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "Tidak ada siswa di " . $kelas;
	echo json_encode($response);
} 
} 

	
?>