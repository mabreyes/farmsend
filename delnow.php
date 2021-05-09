<?php
	include('Handler.php');
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$id = $_POST['id'];
	$add = new Handler();
	call_user_func_array(array($add,'deleteq'), array($id));
	header('Location:index.php');
}
?>