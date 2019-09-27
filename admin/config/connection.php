<?php

$connect = mysqli_connect("localhost", "root", "", "bramlawfirm");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>