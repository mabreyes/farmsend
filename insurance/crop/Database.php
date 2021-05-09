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
			$this->query = "SELECT * from contacts WHERE insurance like '%crop%'";
			return mysqli_query($this->conn, $this->query);
		}
		function globequery() {
			$this->query = "SELECT * from contacts WHERE insurance like '%crop%' and pnum like '0916%' 
			or insurance like '%crop%' and pnum like '0975%' 
			or insurance like '%crop%' and pnum like '0905%' 
			or insurance like '%crop%' and pnum like '0906%' 
			or insurance like '%crop%' and pnum like '0915%' 
			or insurance like '%crop%' and pnum like '0917%' 
			or insurance like '%crop%' and pnum like '09253%' 
			or insurance like '%crop%' and pnum like '09256%' 
			or insurance like '%crop%' and pnum like '09257%' 
			or insurance like '%crop%' and pnum like '0926%' 
			or insurance like '%crop%' and pnum like '0927%' 
			or insurance like '%crop%' and pnum like '%935%' 
			or insurance like '%crop%' and pnum like '0936%' 
			or insurance like '%crop%' and pnum like '0945%' 
			or insurance like '%crop%' and pnum like '0955%' 
			or insurance like '%crop%' and pnum like '0956%' 
			or insurance like '%crop%' and pnum like '0965%' 
			or insurance like '%crop%' and pnum like '0997%' 
			or insurance like '%crop%' and pnum like '0976%' 
			or insurance like '%crop%' and pnum like '0977%' 
			or insurance like '%crop%' and pnum like '0994%' 
			or insurance like '%crop%' and pnum like '0995%' 
			or insurance like '%crop%' and pnum like '0996%'";
			return mysqli_query($this->conn, $this->query);
		}
	
		
		function smartquery() {
			$this->query = "SELECT * from contacts WHERE insurance like '%crop%' and pnum like '0908%' 
			or insurance like '%crop%' and pnum like '0909%' 
			or insurance like '%crop%' and pnum like '0910%' 
			or insurance like '%crop%' and pnum like '0911%' 
			or insurance like '%crop%' and pnum like '0912%' 
			or insurance like '%crop%' and pnum like '0914%' 
			or insurance like '%crop%' and pnum like '0918%' 
			or insurance like '%crop%' and pnum like '0919%' 
			or insurance like '%crop%' and pnum like '0920%' 
			or insurance like '%crop%' and pnum like '0921%' 
			or insurance like '%crop%' and pnum like '0928%' 
			or insurance like '%crop%' and pnum like '0929%' 
			or insurance like '%crop%' and pnum like '0930%' 
			or insurance like '%crop%' and pnum like '0938%' 
			or insurance like '%crop%' and pnum like '0939%' 
			or insurance like '%crop%' and pnum like '0946%' 
			or insurance like '%crop%' and pnum like '0947%' 
			or insurance like '%crop%' and pnum like '0948%' 
			or insurance like '%crop%' and pnum like '0949%' 
			or insurance like '%crop%' and pnum like '0950%' 
			or insurance like '%crop%' and pnum like '0970%' 
			or insurance like '%crop%' and pnum like '0981%' 
			or insurance like '%crop%' and pnum like '0989%' 
			or insurance like '%crop%' and pnum like '0998%' 
			or insurance like '%crop%' and pnum like '0999%' 
			or insurance like '%crop%' and pnum like '0913%'";
			return mysqli_query($this->conn, $this->query);
		}
		
		function sunquery() {
			$this->query = "SELECT * from contacts WHERE insurance like '%crop%' and pnum like '0922%' 
			or insurance like '%crop%' and pnum like '0923%' 
			or insurance like '%crop%' and pnum like '0924%' 
			or insurance like '%crop%' and pnum like '09255%' 
			or insurance like '%crop%' and pnum like '09250%' 
			or insurance like '%crop%' and pnum like '09251%' 
			or insurance like '%crop%' and pnum like '09252%' 
			or insurance like '%crop%' and pnum like '09254%' 
			or insurance like '%crop%' and pnum like '09259%' 
			or insurance like '%crop%' and pnum like '0932%' 
			or insurance like '%crop%' and pnum like '0933%' 
			or insurance like '%crop%' and pnum like '0934%' 
			or insurance like '%crop%' and pnum like '0942%' 
			or insurance like '%crop%' and pnum like '0943%'";
			return mysqli_query($this->conn, $this->query);
		}
			
		function close() {
			mysqli_close($this->conn);
		}
	}	
?>