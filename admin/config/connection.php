<?php

$connect = mysqli_connect("localhost", "root", "", "surapati");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>