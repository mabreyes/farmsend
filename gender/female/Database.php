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
			$this->query = "SELECT * from contacts WHERE gender like '%female%'";
			return mysqli_query($this->conn, $this->query);
		}
		function globequery() {
			$this->query = "SELECT * from contacts WHERE gender like '%female%' and pnum like '0916%' 
			or gender like '%female%' and pnum like '0975%' 
			or gender like '%female%' and pnum like '0905%' 
			or gender like '%female%' and pnum like '0906%' 
			or gender like '%female%' and pnum like '0915%' 
			or gender like '%female%' and pnum like '0917%' 
			or gender like '%female%' and pnum like '09253%' 
			or gender like '%female%' and pnum like '09256%' 
			or gender like '%female%' and pnum like '09257%' 
			or gender like '%female%' and pnum like '0926%' 
			or gender like '%female%' and pnum like '0927%' 
			or gender like '%female%' and pnum like '%935%' 
			or gender like '%female%' and pnum like '0936%' 
			or gender like '%female%' and pnum like '0945%' 
			or gender like '%female%' and pnum like '0955%' 
			or gender like '%female%' and pnum like '0956%' 
			or gender like '%female%' and pnum like '0965%' 
			or gender like '%female%' and pnum like '0997%' 
			or gender like '%female%' and pnum like '0976%' 
			or gender like '%female%' and pnum like '0977%' 
			or gender like '%female%' and pnum like '0994%' 
			or gender like '%female%' and pnum like '0995%' 
			or gender like '%female%' and pnum like '0996%'";
			return mysqli_query($this->conn, $this->query);
		}
	
		
		function smartquery() {
			$this->query = "SELECT * from contacts WHERE gender like '%female%' and pnum like '0908%' 
			or gender like '%female%' and pnum like '0909%' 
			or gender like '%female%' and pnum like '0910%' 
			or gender like '%female%' and pnum like '0911%' 
			or gender like '%female%' and pnum like '0912%' 
			or gender like '%female%' and pnum like '0914%' 
			or gender like '%female%' and pnum like '0918%' 
			or gender like '%female%' and pnum like '0919%' 
			or gender like '%female%' and pnum like '0920%' 
			or gender like '%female%' and pnum like '0921%' 
			or gender like '%female%' and pnum like '0928%' 
			or gender like '%female%' and pnum like '0929%' 
			or gender like '%female%' and pnum like '0930%' 
			or gender like '%female%' and pnum like '0938%' 
			or gender like '%female%' and pnum like '0939%' 
			or gender like '%female%' and pnum like '0946%' 
			or gender like '%female%' and pnum like '0947%' 
			or gender like '%female%' and pnum like '0948%' 
			or gender like '%female%' and pnum like '0949%' 
			or gender like '%female%' and pnum like '0950%' 
			or gender like '%female%' and pnum like '0970%' 
			or gender like '%female%' and pnum like '0981%' 
			or gender like '%female%' and pnum like '0989%' 
			or gender like '%female%' and pnum like '0998%' 
			or gender like '%female%' and pnum like '0999%' 
			or gender like '%female%' and pnum like '0913%'";
			return mysqli_query($this->conn, $this->query);
		}
		
		function sunquery() {
			$this->query = "SELECT * from contacts WHERE gender like '%female%' and pnum like '0922%' 
			or gender like '%female%' and pnum like '0923%' 
			or gender like '%female%' and pnum like '0924%' 
			or gender like '%female%' and pnum like '09255%' 
			or gender like '%female%' and pnum like '09250%' 
			or gender like '%female%' and pnum like '09251%' 
			or gender like '%female%' and pnum like '09252%' 
			or gender like '%female%' and pnum like '09254%' 
			or gender like '%female%' and pnum like '09259%' 
			or gender like '%female%' and pnum like '0932%' 
			or gender like '%female%' and pnum like '0933%' 
			or gender like '%female%' and pnum like '0934%' 
			or gender like '%female%' and pnum like '0942%' 
			or gender like '%female%' and pnum like '0943%'";
			return mysqli_query($this->conn, $this->query);
		}
			
		function close() {
			mysqli_close($this->conn);
		}
	}	
?>