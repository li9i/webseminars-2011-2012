<?php
    include "db.php";
	if (isset($_SESSION['id']))
	{
		$usr_id=$_SESSION['id'];
		$tpc_id=$_SESSION['tpc_id'];
		$answer=$_POST['text'];
		
		if ( $answer<>'') 
		{
		
			$result = $link->prepare("Insert into answer (tpc_id,usr_id,answer) values(?,?,?)");
			$result->bind_param("iis", $tpc_id, $usr_id, $answer);
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
		header("Location: index.php");
	}
?>	