<?php
include('Database.php');
$dtb = new Database();
$result = call_user_func(array($dtb,'smartquery'));
call_user_func(array($dtb,'close'));
foreach($result as $row):
echo $row['pnum']."s";
endforeach;
?>