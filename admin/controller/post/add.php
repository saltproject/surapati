<?php
include "../../config/connection.php";

$id_post				           = $_POST["id_post"];
$author				               = $_POST["author"];
$title				               = $_POST["title"];
$content				           = $_POST["content"];
$status				               = $_POST["post_status"];
$type				               = $_POST["post_type"];
$tag       				           = $_POST["post_tag"];
$datetime						   = date("Y-m-d H:i:s");

$add = mysqli_query($connect, "INSERT INTO bramlawfirm_posts (id_post, post_author, post_title, post_content, post_date, post_status, post_type, post_tag) VALUES
	('$id_post','$author','$title','$content','$datetime','posted','article','#article')") or die(mysqli_error($connect));
header("location: ../../pages/index.php?post");

?>