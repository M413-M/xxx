<?php

include 'helper.php';
date_default_timezone_set('Asia/Jakarta');
$hari = date("d-m-Yd");
$jam = date('H:i:s a');
//DATA KARTU
$nama = array(1 => "Kartu AA", "Kartu BB", "Kartu CC", "Kartu DD", "Kartu EE");
$nim = array(1 => "1234 A", "1234 B", "1234 C", "1234 D", "1234 E");
$merk = array(1 => "Mobil AA", "Mobil BB", "Mobil CC", "Mobil DD", "Mobil EE");
$plat = array(1 => "BL 1234 A", "BL 1234 B", "BL 1234 C", "BL 1234 D", "BL 1234 E");


#===== MASUK =====#
//Print Kelompok A
if ($nama[1] == $nama[1]) {	// data_rfid1 = krtu 1
	//	INSERT($nama, $nim, $merk, $plat, $jam, $hari)
	INSERT($nama[1], $nim[1], $merk[1], $plat[1], $jam, $hari);
}
// PRINT Kelmpok B
if ($nama[4] == $nama[2]) {	// data_rfid1 = kartu 2
	INSERT($nama[2], $nim[2], $merk[2], $plat[2], $jam, $hari);
}

//#========= Keluar ==========#
// //butuh loop pengecekan per index nama
// $query = "SELECT * FROM masuk WHERE nama = '".$nama[1]."'";
//  $row = $koneksi->query($query);
//  if($row->num_rows  > 0){
//     echo "Nama Terdaftar";
//     //Keluar
//     $sql = "INSERT INTO masuk (nama, nim, plat, tanggal, keluar) VALUES 
// 	('$nama[1]','$nim[1]','$plat[1]','$jam', '$today')";
// 	if ($row > 0)) {
// 		if (condition) {
// 			# code...
// 		}
//  		echo "Kartu AA Keluar";
//   		echo nl2br("\n ".$jam);
//   		//Hidupkan Lampu ijo
// 		} else {
//  			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
// 		}
//  }else{
//  	echo "Belum Terdaftar";
//  	//mendaftar
 	
//  }
//echo $sqldata;
