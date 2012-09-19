<?php
	include "db.php";
	$text=$_POST['text'];
	$ans_id=$_SESSION['ans_id'];
	$tpc_id=$_SESSION['tpc_id'];
	if ($text <> '')
	{
		#$sql=mysql_query("update answer set answer=\"$text\" where id=\"$ans_id\"");
		

		if ($result = $link->prepare("update answer set answer = ? where id = ?")) 
		{
		
			$result->bind_param("si", $text, $ans_id);
			$result->execute();
			$result->close();
			header( "Location: topic.php?id=".$tpc_id."&success=yes" );
		}
		else 
		{
			header( "Location: topic.php?id=".$tpc_id."&error=yes" );
		}
			
	}	
	else
	{
		header( "Location: topic.php?id=".$tpc_id."&error=yes" );
	}	
?>