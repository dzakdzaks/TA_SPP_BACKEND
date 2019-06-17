<?php
include 'server.php';

	 	$idPay = $_POST['id_payment'];
	 	$nis = $_POST['nis'];
	 	$noUrut = $_POST['no_urut'];
	 	$nama = $_POST['nama'];
	 	$pass = $nis . "*";
	 	$kls = $_POST['kls'];
	 	$idRole = "Siswa";
 if (isset($nis) && isset($noUrut) && isset($nama)&& isset($kls)) {
 	   

 	 


 	   
$sql = mysql_query('INSERT INTO users (id_payment, nis_user, no_urut_user, nama_user, pass_user, kelas_user, role_user) VALUES ("'.$idPay.'","'.$nis.'","'.$noUrut.'","'.$nama.'","'.$pass.'","'.$kls.'","'.$idRole.'")');

//variable array
$response = array();
//cek apakah ada data pembeli	
if ($sql) {
	 // $response = mysql_fetch_assoc($sql);
	// membuat variable array di dalam array $response
	$response['result'] = 1;
	$response['msg'] = "Sukses add siswa";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "gagal add siswa";
	echo json_encode($response);
}
}else {
	$response['result'] = 0;
	$response['msg'] = "Paremeter Salah";
	echo json_encode($response);
}
 

?>