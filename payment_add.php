<?php
include 'server.php';

	 	$nama = $_POST['nama'];
	 	$value = $_POST['value'];
	 	$cat = $_POST['cat'];

 if (isset($nama) && isset($value) && isset($cat)) {
 	   
$sql = mysql_query('INSERT INTO pembayaran (nama_payment, value_payment, catatan_payment) VALUES ("'.$nama.'","'.$value.'","'.$cat.'")');
$sql2 = mysql_query("UPDATE users SET payment_1 = concat(payment_1, ',$nama'), value_payment_1 = concat(value_payment_1, ',$value'), cat_payment_1 = concat(cat_payment_1, ',$cat')")or die(mysql_error());
//variable array
$response = array();
//cek apakah ada data pembeli	
if ($sql && $sql2) {
	 // $response = mysql_fetch_assoc($sql);
	// membuat variable array di dalam array $response
	$response['result'] = 1;
	$response['msg'] = "Sukses add payment";
	echo json_encode($response);
}else{
	$response['result'] = 0;
	$response['msg'] = "gagal add payment";
	echo json_encode($response);
}
}else {
	$response['result'] = 0;
	$response['msg'] = "Paremeter Salah";
	echo json_encode($response);
}
 

?>