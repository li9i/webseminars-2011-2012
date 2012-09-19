<?php
    include "db.php";
	if(isset($_SESSION['id'])) 
	{
		if($_SESSION['priv']) 
		{
			$checkbox = $_POST['checkbox'];
			if (isset($_POST['DeleteTopic_x'])) 
			{	
				$count_topics=0;
				foreach ($checkbox as $id => $value)
				{
					$count_topics++;
					$sql=mysql_query("SELECT id FROM answer WHERE tpc_id=".$id);
					while ($row = mysql_fetch_assoc($sql)) 
					{
						$del_answer_votes=mysql_query("DELETE FROM answer_vote WHERE ans_id=".$row['id']); 
					}
					$del_topic=mysql_query("DELETE FROM topic WHERE id=".$id); 		
					$del_topic_cat=mysql_query("DELETE FROM topic_category WHERE tpc_id=".$id);
					$del_answers=mysql_query("DELETE FROM answer WHERE tpc_id=".$id);  
					if(!$del_topic || !$del_answers) echo mysql_error();
				}
				if ($count_topics>0)
				{				
				header( "Location: manage_topics.php?success=yes" );	
				}
				else
				{
				header( "Location: manage_topics.php");
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