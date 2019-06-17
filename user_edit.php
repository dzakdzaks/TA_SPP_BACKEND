<?php
include 'server.php';

		$id = $_POST['id'];
		$idPayment = $_POST['id_payment'];
		$nis = $_POST['nis'];
	 	$noUrut = $_POST['no_urut'];
	 	$nama = $_POST['nama'];
	 	$pass = $nis . "*";
	 	$ttl = $_POST['ttl'];
	 	$kls = $_POST['kls'];
	 	$jk = $_POST['jk'];
	 	$agama = $_POST['agama'];
	 	$alamat = $_POST['alamat'];
	 	$noTelp = $_POST['no_telp'];
	 	$sakit = $_POST['sakit'];
	 	$izin = $_POST['izin'];
	 	$alpha = $_POST['alpha'];
	 	$role = "Siswa";

 if (isset($id) && isset($idPayment) && isset($nis) && isset($noUrut) && isset($nama) && isset($ttl) && isset($kls) && isset($jk) && isset($agama) && isset($alamat) && isset($noTelp) && isset($sakit) && isset($izin) && isset($alpha)) {
 	   
 	   
$sql = mysql_query("UPDATE users SET id_payment = '$idPayment', nis_user = '$nis', no_urut_user = '$noUrut', nama_user = '$nama', pass_user ='$pass', ttl_user ='$ttl', kelas_user ='$kls', jk_user ='$jk', agama_user ='$agama', alamat_user ='$alamat', no_telpon_user ='$noTelp', sakit_user ='$sakit', izin_user ='$izin', alpha_user ='$alpha', role_user ='$role' WHERE id_user = '$id'")or die(mysql_error());
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