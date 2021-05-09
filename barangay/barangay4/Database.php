<?php
	class Database{
		var $conn;
		var $query;
		function __construct() {
			$this->conn = mysqli_connect("localhost","test","1234","FarmSend");
			if (!$this->conn)
				print "Error connecting to db server";
		}
	
		function allquery() {
			$this->query = "SELECT * from contacts WHERE barangay like '%barangay 4%'";
			return mysqli_query($this->conn, $this->query);
		}
		function globequery() {
			$this->query = "SELECT * from contacts WHERE barangay like '%barangay 4%' and pnum like '0916%' 
			or barangay like '%barangay 4%' and pnum like '0975%' 
			or barangay like '%barangay 4%' and pnum like '0905%' 
			or barangay like '%barangay 4%' and pnum like '0906%' 
			or barangay like '%barangay 4%' and pnum like '0915%' 
			or barangay like '%barangay 4%' and pnum like '0917%' 
			or barangay like '%barangay 4%' and pnum like '09253%' 
			or barangay like '%barangay 4%' and pnum like '09256%' 
			or barangay like '%barangay 4%' and pnum like '09257%' 
			or barangay like '%barangay 4%' and pnum like '0926%' 
			or barangay like '%barangay 4%' and pnum like '0927%' 
			or barangay like '%barangay 4%' and pnum like '%935%' 
			or barangay like '%barangay 4%' and pnum like '0936%' 
			or barangay like '%barangay 4%' and pnum like '0945%' 
			or barangay like '%barangay 4%' and pnum like '0955%' 
			or barangay like '%barangay 4%' and pnum like '0956%' 
			or barangay like '%barangay 4%' and pnum like '0965%' 
			or barangay like '%barangay 4%' and pnum like '0997%' 
			or barangay like '%barangay 4%' and pnum like '0976%' 
			or barangay like '%barangay 4%' and pnum like '0977%' 
			or barangay like '%barangay 4%' and pnum like '0994%' 
			or barangay like '%barangay 4%' and pnum like '0995%' 
			or barangay like '%barangay 4%' and pnum like '0996%'";
			return mysqli_query($this->conn, $this->query);
		}
	
		
		function smartquery() {
			$this->query = "SELECT * from contacts WHERE barangay like '%barangay 4%' and pnum like '0908%' 
			or barangay like '%barangay 4%' and pnum like '0909%' 
			or barangay like '%barangay 4%' and pnum like '0910%' 
			or barangay like '%barangay 4%' and pnum like '0911%' 
			or barangay like '%barangay 4%' and pnum like '0912%' 
			or barangay like '%barangay 4%' and pnum like '0914%' 
			or barangay like '%barangay 4%' and pnum like '0918%' 
			or barangay like '%barangay 4%' and pnum like '0919%' 
			or barangay like '%barangay 4%' and pnum like '0920%' 
			or barangay like '%barangay 4%' and pnum like '0921%' 
			or barangay like '%barangay 4%' and pnum like '0928%' 
			or barangay like '%barangay 4%' and pnum like '0929%' 
			or barangay like '%barangay 4%' and pnum like '0930%' 
			or barangay like '%barangay 4%' and pnum like '0938%' 
			or barangay like '%barangay 4%' and pnum like '0939%' 
			or barangay like '%barangay 4%' and pnum like '0946%' 
			or barangay like '%barangay 4%' and pnum like '0947%' 
			or barangay like '%barangay 4%' and pnum like '0948%' 
			or barangay like '%barangay 4%' and pnum like '0949%' 
			or barangay like '%barangay 4%' and pnum like '0950%' 
			or barangay like '%barangay 4%' and pnum like '0970%' 
			or barangay like '%barangay 4%' and pnum like '0981%' 
			or barangay like '%barangay 4%' and pnum like '0989%' 
			or barangay like '%barangay 4%' and pnum like '0998%' 
			or barangay like '%barangay 4%' and pnum like '0999%' 
			or barangay like '%barangay 4%' and pnum like '0913%'";
			return mysqli_query($this->conn, $this->query);
		}
		
		function sunquery() {
			$this->query = "SELECT * from contacts WHERE barangay like '%barangay 4%' and pnum like '0922%' 
			or barangay like '%barangay 4%' and pnum like '0923%' 
			or barangay like '%barangay 4%' and pnum like '0924%' 
			or barangay like '%barangay 4%' and pnum like '09255%' 
			or barangay like '%barangay 4%' and pnum like '09250%' 
			or barangay like '%barangay 4%' and pnum like '09251%' 
			or barangay like '%barangay 4%' and pnum like '09252%' 
			or barangay like '%barangay 4%' and pnum like '09254%' 
			or barangay like '%barangay 4%' and pnum like '09259%' 
			or barangay like '%barangay 4%' and pnum like '0932%' 
			or barangay like '%barangay 4%' and pnum like '0933%' 
			or barangay like '%barangay 4%' and pnum like '0934%' 
			or barangay like '%barangay 4%' and pnum like '0942%' 
			or barangay like '%barangay 4%' and pnum like '0943%'";
			return mysqli_query($this->conn, $this->query);
		}
			
		function close() {
			mysqli_close($this->conn);
		}
	}	
?>