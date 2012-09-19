<?php
	include "db.php";
	$text=$_POST['text'];
	$tpc_id=$_SESSION['tpc_id'];
	if ($text <> '')
	{
	
		if ($result = $link->prepare("update topic set question = ? where id = ?")) 
		{
			$result->bind_param("si", $text, $tpc_id);
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