<?php
    include "db.php";
	if(isset($_SESSION['id'])) 
	{
		if($_SESSION['priv']) 
		{
			$checkbox = $_POST['checkbox'];
			if (isset($_POST['DeleteUser_x'])) 
			{
				$count_users=0;
				foreach ($checkbox as $id => $value)
				{
					$count_users++;
					$del=mysql_query("DELETE FROM user WHERE id=".$id); 
					if(!$del) echo mysql_error();
				}
				if ($count_users>0)
				{				
				header( "Location: manage_users.php?success=yes" );	
				}
				else
				{
				header( "Location: manage_users.php");
				}
				
			}

			if (isset($_POST['MakeAdmin_x'])) 
			{
				$count_users=0;
				foreach ($checkbox as $id => $value)
				{
					$count_users++;
					$set=mysql_query("update user set admin=1 WHERE id=".$id); 
					if(!$set) echo mysql_error();
				}
				if ($count_users>0)
				{				
				header( "Location: manage_users.php?success=yes" );	
				}
				else
				{
				header( "Location: manage_users.php");
				}				
			}

			if (isset($_POST['UnmakeAdmin_x'])) 
			{
				$count_users=0;
				foreach ($checkbox as $id => $value)
				{
					$count_users++;
					$uset=mysql_query("update user set admin=0 WHERE id=".$id); 
					if(!$uset) echo mysql_error();
					
				}
				if ($count_users>0)
				{				
				header( "Location: manage_users.php?success=yes" );	
				}
				else
				{
				header( "Location: manage_users.php");
				}				
			}
		}	
		else 
		{
			header( "Location: index.php" );

		}
	}
	else
	{
			header( "Location: index.php" );
	
	}
			
?>