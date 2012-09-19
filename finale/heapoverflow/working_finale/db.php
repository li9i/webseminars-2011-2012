<?php
    session_start();
	mysql_connect("localhost","root", "<revolt"); 
	mysql_select_db("heapoverflow") or die( "Unable to select database");
	mysql_query( "SET NAMES UTF8;" );
	$link=new mysqli("localhost","root", "<revolt", "heapoverflow");
?>