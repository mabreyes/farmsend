<?php
if(isset($_POST['nameID'])){
    $nameID = $_POST['nameID'];
}
if(isset($_POST['firstName'])){
    $firstName = $_POST['firstName'];
}
if(isset($_POST['midName'])){
    $midName = $_POST['midName'];
}
if(isset($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}
if(isset($_POST['addID'])){
    $addID = $_POST['addID'];
}
if(isset($_POST['blockNum'])){
    $blockNum = $_POST['blockNum'];
}
if(isset($_POST['streetName'])){
    $streetName = $_POST['streetName'];
}
if(isset($_POST['city'])){
    $city = $_POST['city'];
}
if(isset($_POST['addType'])){
    $addType = $_POST['addType'];
}
include('Database.php');
$dtb = new Database();
if(!empty($nameID)) {
	$result = call_user_func_array(array($dtb,'nameIDquery'), array($nameID));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else if(!empty($firstName)) {
	$result = call_user_func_array(array($dtb,'firstNamequery'), array($firstName));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else if(!empty($midName)) {
	$result = call_user_func_array(array($dtb,'midNamequery'), array($midName));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else if(!empty($lastName)) {
	$result = call_user_func_array(array($dtb,'lastNamequery'), array($lastName));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else if(!empty($addID)) {
	$result = call_user_func_array(array($dtb,'addIDquery'), array($addID));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else if(!empty($blockNum)) {
	$result = call_user_func_array(array($dtb,'blockNumquery'), array($blockNum));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else if(!empty($streetName)) {
	$result = call_user_func_array(array($dtb,'streetNamequery'), array($streetName));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else if(!empty($city)) {
	$result = call_user_func_array(array($dtb,'cityquery'), array($city));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else if(!empty($addType)) {
	$result = call_user_func_array(array($dtb,'addTypequery'), array($addType));
	if (!$result) {
		echo 'Could not run query: ';
	}
}
else {}
call_user_func(array($dtb,'close'));
?>
<html>
<head>
	<title>Midterm Exam</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<p>
		<div id="grid-container">
			<h1>MIDTERM EXAM PART 2 SEARCH RESULTS</h1>
		</div>
		<div id ="grid-container2">
		<div id="nameID">
		<?php echo "NAME ID"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['nameID']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="firstName">
		<?php echo "FIRST NAME"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['firstName']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="midName">
		<?php echo "MIDDLE NAME"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['midName']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="lastName">
		<?php echo "LAST NAME"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['lastName']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="addID">
		<?php echo "ADDRESS ID"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['addID']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="blockNum">
		<?php echo "BLOCK NUMBER"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['blockNum']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="streetName">
		<?php echo "STREET NAME"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['streetName']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="city">
		<?php echo "CITY ADDRESS"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['city']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="addType">
		<?php echo "ADDRESS TYPE"."<br>";?>
		<?php foreach($result as $row): ?>
			<?php echo $row['addType']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	</div>
	</p>
</body>
</html>