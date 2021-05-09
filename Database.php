<?php
	class Database {
		var $conn;
		var $query;
		var $result;
		var $temp;
		function __construct() {
			$this->conn = mysqli_connect("localhost","test","1234","FarmSend");
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		}
			
		function query() {
			$this->query = "Select * FROM Contacts ORDER BY id";
			return mysqli_query($this->conn, $this->query);
		}
		
		function NameSortquery() {
			$this->query = "SELECT * FROM Contacts ORDER BY Name";
			return mysqli_query($this->conn, $this->query);
		}
		
		function BarangaySortquery() {
			$this->query = "SELECT * FROM Contacts ORDER BY Barangay";
			return mysqli_query($this->conn, $this->query);
		}
		
		function CropSortquery() {
			$this->query = "SELECT * FROM Contacts ORDER BY Crop";
			return mysqli_query($this->conn, $this->query);
		}
		function LivestockSortquery() {
			$this->query = "SELECT * FROM Contacts ORDER BY Livestock";
			return mysqli_query($this->conn, $this->query);
		}
		
		function StatusSortquery() {
			$this->query = "SELECT * FROM Contacts ORDER BY Status";
			return mysqli_query($this->conn, $this->query);
		}
		
		function GenderSortquery() {
			$this->query = "SELECT * FROM Contacts ORDER BY Gender";
			return mysqli_query($this->conn, $this->query);
		}
		
		function InsuranceSortquery() {
			$this->query = "SELECT * FROM Contacts ORDER BY Insurance";
			return mysqli_query($this->conn, $this->query);
		}
		function addquery($name,$pnum,$barangay,$crop,$livestock,$status,$gender,$insurance) {
			$this->query = "INSERT INTO Contacts (Name, pnum, Barangay, Crop, Livestock, Status, Gender, Insurance) values('".$name."','".$pnum."','".$barangay."','".$crop."','".$livestock."','".$status."','".$gender."','".$insurance."')";
			mysqli_query($this->conn, $this->query);
		}
		function delquery($id) {
			$this->query = "DELETE from Contacts WHERE id=".$id;
			mysqli_query($this->conn, $this->query);
		}
		
		function close() {
			mysqli_close($this->conn);
		}
	}	
?>