<?php
include('Database.php');
$dtb = new Database();
$result = call_user_func(array($dtb,'GenderSortquery'));
if (!$result) {
		echo 'Could not run query: ';
	}
call_user_func(array($dtb,'close'));
?>
<!DOCTYPE html5>
<html>
<head>
	<title>FarmSend Contacts</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<p>
	<div id="grid-container">
	<div> </div>
	<div> </div>
	<div> </div>
	<div> </div>
	<img src="logo.png" id="logo">
	</div>
	<div id="grid-container3">
	<div> </div>
	<form name="input" action="addcontacts.php" method="post"><input type ="Submit" value ="ADD CONTACTS"> </form>
	<form name="input" action="delcontacts.php" method="post"><input type ="Submit" value ="DELETE CONTACTS"> </form>
	</div>
	<div id = "grid-container">
	<div id="nameID">
		<form name="input">ID</form>
		<?php foreach($result as $row): ?>
			<?php echo $row['id']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="nameID">
		<form name="input">Name</form>
		<?php foreach($result as $row): ?>
			<?php echo $row['Name']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="firstName">
		<form name="input">pnum</form>
		<?php foreach($result as $row): ?>
			<?php echo $row['pnum']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="midName">
		<form name="input" action="BarangaySort.php" method="post">Barangay<input type ="Submit" value ="Sort"> </form>
		<?php foreach($result as $row): ?>
			<?php echo $row['Barangay']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="lastName">
		<form name="input" action="CropSort.php" method="post">Crop<input type ="Submit" value ="Sort"> </form>
		<?php foreach($result as $row): ?>
			<?php echo $row['Crop']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="addID">
		<form name="input" action="LivestockSort.php" method="post">Livestock<input type ="Submit" value ="Sort"> </form>
		<?php foreach($result as $row): ?>
			<?php echo $row['Livestock']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="blockNum">
		<form name="input" action="StatusSort.php" method="post">Civil Status<input type ="Submit" value ="Sort"> </form>
		<?php foreach($result as $row): ?>
			<?php echo $row['Status']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="streetName">
		<form name="input" action="GenderSort.php" method="post">Gender<input type ="Submit" value ="Sort"> </form>
		<?php foreach($result as $row): ?>
			<?php echo $row['Gender']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	<div id="city">
		<form name="input" action="InsuranceSort.php" method="post">Insurance<input type ="Submit" value ="Sort"> </form>
		<?php foreach($result as $row): ?>
			<?php echo $row['Insurance']."<br>"; ?>
		<?php endforeach; ?>
	</div>
	</div>
	</p>
	<?php mysqli_free_result($result); ?>
</body>
</html>
