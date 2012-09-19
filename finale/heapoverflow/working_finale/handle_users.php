<?php
    include "db.php";
	if(isset($_SESSION['id'])) 
	{
		if($_SESSION['priv']) 
		{
			$checkbox = $_POST['checkbox'];
			if (isset($_POST['DeleteUser_x'])) /* diagrafi xristi simainei ka9oliki diagrafi olon ton stoixeion tou. topics, answers, votes, ta panta diagrafontai*/
			{
				$count_users=0;
				foreach ($checkbox as $id => $value)
				{
					$count_users++;
					mysql_query("update user set active=0 where id=".$id);
					
					/****** i logiki einai oti apla ton kano deactivate. parakato einai o kodikas an 9elo pragmatika na ton diagrapso. oloklirotika
					$select_topics=mysql_query("select id from topic where usr_id=".$id);				#blepo poia topic exei ksekinisei
					while ($row = mysql_fetch_assoc($select_topics)) 
					{
						$select_answers=mysql_query("select id from answer where tpc_id=".$row['id']);	#blepo poies einai oi apantiseis ton topic pou exei ksekinisei
						while ($row1 = mysql_fetch_assoc($select_answers)) 
						{
							mysql_query("delete from answer_vote where ans_id=".$row1['id']);			#diagrafo tis psifous ton apantiseon pou uparxoun sta topic pou dimiourgise
						}
						mysql_query("delete from answer where tpc_id=".$row['id']);						#diagrafo tis apantiseis ton topic
						mysql_query("delete from topic_category where tpc_id=".$row['id']);				#diagrafo tis katigories pou anikoun auta ta topic
					}	
					$del_topic=mysql_query("delete from topic where usr_id=".$id);						#diagrafo ta topic pou ksekinise
					$del_votes=mysql_query("delete from answer_vote where usr_id=".$id);				#diagrafo tis psifous tou
					$del_answers=mysql_query("delete from answer where usr_id=".$id);					#diagrafo tis apantiseis tou
					$del_user=mysql_query("DELETE FROM user WHERE id=".$id); 							#diagrafo to xristi
					
					*/

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