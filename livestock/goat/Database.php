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
			$this->query = "SELECT * from contacts WHERE livestock like '%goat%'";
			return mysqli_query($this->conn, $this->query);
		}
		function globequery() {
			$this->query = "SELECT * from contacts WHERE livestock like '%goat%' and pnum like '0916%' 
			or livestock like '%goat%' and pnum like '0975%' 
			or livestock like '%goat%' and pnum like '0905%' 
			or livestock like '%goat%' and pnum like '0906%' 
			or livestock like '%goat%' and pnum like '0915%' 
			or livestock like '%goat%' and pnum like '0917%' 
			or livestock like '%goat%' and pnum like '09253%' 
			or livestock like '%goat%' and pnum like '09256%' 
			or livestock like '%goat%' and pnum like '09257%' 
			or livestock like '%goat%' and pnum like '0926%' 
			or livestock like '%goat%' and pnum like '0927%' 
			or livestock like '%goat%' and pnum like '%935%' 
			or livestock like '%goat%' and pnum like '0936%' 
			or livestock like '%goat%' and pnum like '0945%' 
			or livestock like '%goat%' and pnum like '0955%' 
			or livestock like '%goat%' and pnum like '0956%' 
			or livestock like '%goat%' and pnum like '0965%' 
			or livestock like '%goat%' and pnum like '0997%' 
			or livestock like '%goat%' and pnum like '0976%' 
			or livestock like '%goat%' and pnum like '0977%' 
			or livestock like '%goat%' and pnum like '0994%' 
			or livestock like '%goat%' and pnum like '0995%' 
			or livestock like '%goat%' and pnum like '0996%'";
			return mysqli_query($this->conn, $this->query);
		}
	
		
		function smartquery() {
			$this->query = "SELECT * from contacts WHERE livestock like '%goat%' and pnum like '0908%' 
			or livestock like '%goat%' and pnum like '0909%' 
			or livestock like '%goat%' and pnum like '0910%' 
			or livestock like '%goat%' and pnum like '0911%' 
			or livestock like '%goat%' and pnum like '0912%' 
			or livestock like '%goat%' and pnum like '0914%' 
			or livestock like '%goat%' and pnum like '0918%' 
			or livestock like '%goat%' and pnum like '0919%' 
			or livestock like '%goat%' and pnum like '0920%' 
			or livestock like '%goat%' and pnum like '0921%' 
			or livestock like '%goat%' and pnum like '0928%' 
			or livestock like '%goat%' and pnum like '0929%' 
			or livestock like '%goat%' and pnum like '0930%' 
			or livestock like '%goat%' and pnum like '0938%' 
			or livestock like '%goat%' and pnum like '0939%' 
			or livestock like '%goat%' and pnum like '0946%' 
			or livestock like '%goat%' and pnum like '0947%' 
			or livestock like '%goat%' and pnum like '0948%' 
			or livestock like '%goat%' and pnum like '0949%' 
			or livestock like '%goat%' and pnum like '0950%' 
			or livestock like '%goat%' and pnum like '0970%' 
			or livestock like '%goat%' and pnum like '0981%' 
			or livestock like '%goat%' and pnum like '0989%' 
			or livestock like '%goat%' and pnum like '0998%' 
			or livestock like '%goat%' and pnum like '0999%' 
			or livestock like '%goat%' and pnum like '0913%'";
			return mysqli_query($this->conn, $this->query);
		}
		
		function sunquery() {
			$this->query = "SELECT * from contacts WHERE livestock like '%goat%' and pnum like '0922%' 
			or livestock like '%goat%' and pnum like '0923%' 
			or livestock like '%goat%' and pnum like '0924%' 
			or livestock like '%goat%' and pnum like '09255%' 
			or livestock like '%goat%' and pnum like '09250%' 
			or livestock like '%goat%' and pnum like '09251%' 
			or livestock like '%goat%' and pnum like '09252%' 
			or livestock like '%goat%' and pnum like '09254%' 
			or livestock like '%goat%' and pnum like '09259%' 
			or livestock like '%goat%' and pnum like '0932%' 
			or livestock like '%goat%' and pnum like '0933%' 
			or livestock like '%goat%' and pnum like '0934%' 
			or livestock like '%goat%' and pnum like '0942%' 
			or livestock like '%goat%' and pnum like '0943%'";
			return mysqli_query($this->conn, $this->query);
		}
			
		function close() {
			mysqli_close($this->conn);
		}
	}	
?>