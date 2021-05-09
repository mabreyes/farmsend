<?php
	include('Handler.php');
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = $_POST['name'];
	$pnum = $_POST['pnum'];
	$barangay = $_POST['barangay'];
	$crop = $_POST['crop'];
	$livestock = $_POST['livestock'];
	$status = $_POST['status'];
	$gender = $_POST['gender'];
	$insurance = $_POST['insurance'];
	$add = new Handler();
	call_user_func_array(array($add,'addq'), array($name,$pnum,$barangay,$crop,$livestock,$status,$gender,$insurance));
	header('Location:index.php');
}
?>