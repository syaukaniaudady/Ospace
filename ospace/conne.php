<?php
	abstract class Connection{
		function __construct(){
			return mysqli_connect("localhost", "root", "", "ospaceid_ospace");
		}
	}
?>