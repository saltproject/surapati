<?php
include "../../config/connection.php";

$id_post = $_GET["id_post"];

if($delete = mysqli_query($connect, "DELETE FROM bramlawfirm_posts WHERE id_post='$id_post'")){
		header("Location: ../../pages/index.php?post");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>