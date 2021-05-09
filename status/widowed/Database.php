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
			$this->query = "SELECT * from contacts WHERE status like '%widow%'";
			return mysqli_query($this->conn, $this->query);
		}
		function globequery() {
			$this->query = "SELECT * from contacts WHERE status like '%widow%' and pnum like '0916%' 
			or status like '%widow%' and pnum like '0975%' 
			or status like '%widow%' and pnum like '0905%' 
			or status like '%widow%' and pnum like '0906%' 
			or status like '%widow%' and pnum like '0915%' 
			or status like '%widow%' and pnum like '0917%' 
			or status like '%widow%' and pnum like '09253%' 
			or status like '%widow%' and pnum like '09256%' 
			or status like '%widow%' and pnum like '09257%' 
			or status like '%widow%' and pnum like '0926%' 
			or status like '%widow%' and pnum like '0927%' 
			or status like '%widow%' and pnum like '%935%' 
			or status like '%widow%' and pnum like '0936%' 
			or status like '%widow%' and pnum like '0945%' 
			or status like '%widow%' and pnum like '0955%' 
			or status like '%widow%' and pnum like '0956%' 
			or status like '%widow%' and pnum like '0965%' 
			or status like '%widow%' and pnum like '0997%' 
			or status like '%widow%' and pnum like '0976%' 
			or status like '%widow%' and pnum like '0977%' 
			or status like '%widow%' and pnum like '0994%' 
			or status like '%widow%' and pnum like '0995%' 
			or status like '%widow%' and pnum like '0996%'";
			return mysqli_query($this->conn, $this->query);
		}
	
		
		function smartquery() {
			$this->query = "SELECT * from contacts WHERE status like '%widow%' and pnum like '0908%' 
			or status like '%widow%' and pnum like '0909%' 
			or status like '%widow%' and pnum like '0910%' 
			or status like '%widow%' and pnum like '0911%' 
			or status like '%widow%' and pnum like '0912%' 
			or status like '%widow%' and pnum like '0914%' 
			or status like '%widow%' and pnum like '0918%' 
			or status like '%widow%' and pnum like '0919%' 
			or status like '%widow%' and pnum like '0920%' 
			or status like '%widow%' and pnum like '0921%' 
			or status like '%widow%' and pnum like '0928%' 
			or status like '%widow%' and pnum like '0929%' 
			or status like '%widow%' and pnum like '0930%' 
			or status like '%widow%' and pnum like '0938%' 
			or status like '%widow%' and pnum like '0939%' 
			or status like '%widow%' and pnum like '0946%' 
			or status like '%widow%' and pnum like '0947%' 
			or status like '%widow%' and pnum like '0948%' 
			or status like '%widow%' and pnum like '0949%' 
			or status like '%widow%' and pnum like '0950%' 
			or status like '%widow%' and pnum like '0970%' 
			or status like '%widow%' and pnum like '0981%' 
			or status like '%widow%' and pnum like '0989%' 
			or status like '%widow%' and pnum like '0998%' 
			or status like '%widow%' and pnum like '0999%' 
			or status like '%widow%' and pnum like '0913%'";
			return mysqli_query($this->conn, $this->query);
		}
		
		function sunquery() {
			$this->query = "SELECT * from contacts WHERE status like '%widow%' and pnum like '0922%' 
			or status like '%widow%' and pnum like '0923%' 
			or status like '%widow%' and pnum like '0924%' 
			or status like '%widow%' and pnum like '09255%' 
			or status like '%widow%' and pnum like '09250%' 
			or status like '%widow%' and pnum like '09251%' 
			or status like '%widow%' and pnum like '09252%' 
			or status like '%widow%' and pnum like '09254%' 
			or status like '%widow%' and pnum like '09259%' 
			or status like '%widow%' and pnum like '0932%' 
			or status like '%widow%' and pnum like '0933%' 
			or status like '%widow%' and pnum like '0934%' 
			or status like '%widow%' and pnum like '0942%' 
			or status like '%widow%' and pnum like '0943%'";
			return mysqli_query($this->conn, $this->query);
		}
			
		function close() {
			mysqli_close($this->conn);
		}
	}	
?>