	<?php
		
		include 'server.php';

		$nis = $_POST['nis_user'];
		$pass = $_POST['pass_user'];

		$response = array();

		if (isset($nis) && isset($pass)) { 

			$user = mysql_query("SELECT * FROM users WHERE nis_user = '$nis' AND pass_user = '$pass'");

			 if (mysql_num_rows($user) == 1) {
		
			 	$row = mysql_fetch_assoc($user);

			 	$response['error'] = 'false';	
			 	$response['msg'] = 'Login berhasil.';	
			 	$response["user"]["id_user"] = $row["id_user"];
			 	$response["user"]["id_payment"] = $row["id_payment"];
			 	$response["user"]["nis_user"] = $row["nis_user"];
			 	$response["user"]["no_urut_user"] = $row["no_urut_user"];
			 	$response["user"]["nama_user"] = $row["nama_user"];
			 	$response["user"]["pass_user"] = $row["pass_user"];
			 	$response["user"]["ttl_user"] = $row["ttl_user"];
			 	$response["user"]["kelas_user"] = $row["kelas_user"];
			 	$response["user"]["jk_user"] = $row["jk_user"];
			 	$response["user"]["agama_user"] = $row["agama_user"];
			 	$response["user"]["alamat_user"] = $row["alamat_user"];
			 	$response["user"]["no_telpon_user"] = $row["no_telpon_user"];
			 	$response["user"]["sakit_user"] = $row["sakit_user"];
			 	$response["user"]["izin_user"] = $row["izin_user"];
			 	$response["user"]["alpha_user	"] = $row["alpha_user"];
			 	$response["user"]["role_user"] = $row["role_user"];
			 	$response["user"]["payment_1"] = $row["payment_1"];
		 	    $response["user"]["value_payment_1"] = $row["value_payment_1"];
		 	    $response["user"]["cat_payment_1"] = $row["cat_payment_1"];

				echo json_encode($response);

			 } else {

			 	$response['error'] = 'true';
	            $response["msg"] = "Login gagal. nis atau password salah";
	       		echo json_encode($response);

			 }

		} else {

			$response["error"] = 'true';
	    	$response["msg"] = "Login gagal. Parameter (nis atau password) kurang";
	    	echo json_encode($response);

		}	

	?>