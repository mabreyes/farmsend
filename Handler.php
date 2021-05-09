<?php
	include('Database.php');
	class Handler {
		
			function addq($name,$pnum,$barangay,$crop,$livestock,$status,$gender,$insurance) {
				$dtb = new Database();
				call_user_func_array(array($dtb,'addquery'), array($name,$pnum,$barangay,$crop,$livestock,$status,$gender,$insurance));
				call_user_func(array($dtb,'close'));
			}
			
			
			function deleteq($id) {
				$dtb = new Database();
				call_user_func_array(array($dtb,'delquery'), array($id));
				call_user_func(array($dtb,'close'));
			}
	}
?>