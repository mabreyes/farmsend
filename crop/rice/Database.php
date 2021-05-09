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
			$this->query = "SELECT * from contacts WHERE crop like '%rice%'";
			return mysqli_query($this->conn, $this->query);
		}
		function globequery() {
			$this->query = "SELECT * from contacts WHERE crop like '%rice%' and pnum like '0916%' 
			or crop like '%rice%' and pnum like '0975%' 
			or crop like '%rice%' and pnum like '0905%' 
			or crop like '%rice%' and pnum like '0906%' 
			or crop like '%rice%' and pnum like '0915%' 
			or crop like '%rice%' and pnum like '0917%' 
			or crop like '%rice%' and pnum like '09253%' 
			or crop like '%rice%' and pnum like '09256%' 
			or crop like '%rice%' and pnum like '09257%' 
			or crop like '%rice%' and pnum like '0926%' 
			or crop like '%rice%' and pnum like '0927%' 
			or crop like '%rice%' and pnum like '%935%' 
			or crop like '%rice%' and pnum like '0936%' 
			or crop like '%rice%' and pnum like '0945%' 
			or crop like '%rice%' and pnum like '0955%' 
			or crop like '%rice%' and pnum like '0956%' 
			or crop like '%rice%' and pnum like '0965%' 
			or crop like '%rice%' and pnum like '0997%' 
			or crop like '%rice%' and pnum like '0976%' 
			or crop like '%rice%' and pnum like '0977%' 
			or crop like '%rice%' and pnum like '0994%' 
			or crop like '%rice%' and pnum like '0995%' 
			or crop like '%rice%' and pnum like '0996%'";
			return mysqli_query($this->conn, $this->query);
		}
	
		
		function smartquery() {
			$this->query = "SELECT * from contacts WHERE crop like '%rice%' and pnum like '0908%' 
			or crop like '%rice%' and pnum like '0909%' 
			or crop like '%rice%' and pnum like '0910%' 
			or crop like '%rice%' and pnum like '0911%' 
			or crop like '%rice%' and pnum like '0912%' 
			or crop like '%rice%' and pnum like '0914%' 
			or crop like '%rice%' and pnum like '0918%' 
			or crop like '%rice%' and pnum like '0919%' 
			or crop like '%rice%' and pnum like '0920%' 
			or crop like '%rice%' and pnum like '0921%' 
			or crop like '%rice%' and pnum like '0928%' 
			or crop like '%rice%' and pnum like '0929%' 
			or crop like '%rice%' and pnum like '0930%' 
			or crop like '%rice%' and pnum like '0938%' 
			or crop like '%rice%' and pnum like '0939%' 
			or crop like '%rice%' and pnum like '0946%' 
			or crop like '%rice%' and pnum like '0947%' 
			or crop like '%rice%' and pnum like '0948%' 
			or crop like '%rice%' and pnum like '0949%' 
			or crop like '%rice%' and pnum like '0950%' 
			or crop like '%rice%' and pnum like '0970%' 
			or crop like '%rice%' and pnum like '0981%' 
			or crop like '%rice%' and pnum like '0989%' 
			or crop like '%rice%' and pnum like '0998%' 
			or crop like '%rice%' and pnum like '0999%' 
			or crop like '%rice%' and pnum like '0913%'";
			return mysqli_query($this->conn, $this->query);
		}
		
		function sunquery() {
			$this->query = "SELECT * from contacts WHERE crop like '%rice%' and pnum like '0922%' 
			or crop like '%rice%' and pnum like '0923%' 
			or crop like '%rice%' and pnum like '0924%' 
			or crop like '%rice%' and pnum like '09255%' 
			or crop like '%rice%' and pnum like '09250%' 
			or crop like '%rice%' and pnum like '09251%' 
			or crop like '%rice%' and pnum like '09252%' 
			or crop like '%rice%' and pnum like '09254%' 
			or crop like '%rice%' and pnum like '09259%' 
			or crop like '%rice%' and pnum like '0932%' 
			or crop like '%rice%' and pnum like '0933%' 
			or crop like '%rice%' and pnum like '0934%' 
			or crop like '%rice%' and pnum like '0942%' 
			or crop like '%rice%' and pnum like '0943%'";
			return mysqli_query($this->conn, $this->query);
		}
			
		function close() {
			mysqli_close($this->conn);
		}
	}	
?>