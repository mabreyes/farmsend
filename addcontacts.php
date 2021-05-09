<!DOCTYPE html>
<html>
<head>
	<title>FarmSend Add Contacts</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<img src="logo.png" id="logo"> <br>
	
	Add New Contact
	(for one or more entry, separate with space ex. Horse Cattle)
	<form action="addNow.php" method="POST">
		<p>
		Name:
		<br/>
			<input type="text" size="50" name="name" id="name" />
		</p>
		<p>
		Contact #:
		<br/>
			<input type="text" size="11" name="pnum" id="pnum" />
		</p>
		<p>
		Barangay:
		<br/>
			<input type="text" size="20" name="barangay" id="barangay" />
		</p>
		<p>
		Crops(Corn, Rice):
		<br/>
			<input type="text" size="20" name="crop" id="crop" />
		</p>
		<p>
		Livestock(Carabao, Cattle, Goat, Horse, Poultry, Swine):
		<br/>
			<input type="text" size="40" name="livestock" id="livestock" />
		</p>
		<p>
		Status(Common-LA W/Live-In, Divorced/Separated, Married, Single, Widowed):
		<br/>
			<input type="text" size="30" name="status" id="status" />
		</p>
		<p>
		Gender(Male, Female):
		<br/>
			<input type="text" size="11" name="gender" id="gender" />
		</p>
		<p>
		Insurance(Crops, Livestock):
		<br/>
			<input type="text" size="11" name="insurance" id="insurance" />
		</p>
		<p>
			<button type="submit">ADD</button> | <a href="index.php"><button type="button">CANCEL</button></a>
		</p>
	</form>
</body>
</html>	