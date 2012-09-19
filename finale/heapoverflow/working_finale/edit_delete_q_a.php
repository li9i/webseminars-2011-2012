<?php
    include "header.php";
	$tpc_id=$_SESSION['tpc_id'];
	if(isset($_SESSION['id'])) 
	{
		echo 'You are logged in as '.htmlspecialchars($_SESSION['username']);
		if($_SESSION['priv']) 
		{
			include 'admin.php';
		}
		include 'buttons_logged_in.php';		

/*    edit tin apantisi */		
		if (isset($_POST["edit_a"])) 
		{
			$edit=$_POST["edit_a"];
			foreach ($edit as $value)
			{
				$ans_id=key($edit);
			}
			$answer=mysql_query("select * from answer where id=".$ans_id);
			$_SESSION['ans_id']=$ans_id;
?>
			<form action="update_answer.php" method="post">
			<div class="text">
			<textarea name="text"><?php 
			while ($row = mysql_fetch_assoc($answer)) 
			{
				echo $row['answer'];
				$_SESSION['tpc_id']=$row['tpc_id'];
			}
			?></textarea>
			</div>
			<INPUT TYPE="image" id="sub" VALUE="Update Answer" src="images/check.png">
			</form>				
<?php		
		}
/* delete tin apantisi */
		if (isset($_POST["delete_a"])) 
		{
			$delete=$_POST["delete_a"];
			foreach ($delete as $value)
			{
				$ans_id=key($delete);
			}
			$answer=mysql_query("select * from answer where id=".$ans_id);
			while ($row = mysql_fetch_assoc($answer)) 
			{
				$tpc_id=$row['tpc_id'];
			}
			$sql=mysql_query("delete from answer where id=\"$ans_id\"");	
			$sql_2=mysql_query("delete from answer_vote where ans_id=\"$ans_id\"");
			if ($sql) 
			{
				header( "Location: topic.php?id=".$tpc_id."&success=yes" );
			}		
		}
/* edit tin erwtisi. douleuei me tabs*/
		if (isset($_POST["edit_q"])) 
		{
			$edit_q=$_POST["edit_q"];
			foreach ($edit_q as $value)
			{
				$tpc_id=key($edit_q); /*giauto douleuei me tabs*/
			}
			$question=mysql_query("select * from topic where id=".$tpc_id);
			$_SESSION['tpc_id']=$tpc_id;
?>
			<form action="update_question.php" method="post">
			<div class="text">
			<textarea name="text"><?php 
			while ($row = mysql_fetch_assoc($question)) 
			{
				echo $row['question'];
			}
			?></textarea>
			</div>
			<INPUT TYPE="image" id="sub" VALUE="Update Question" src="images/check.png">
			</form>				
<?php		
		}
		
/*    vote up */		
		if (isset($_POST["vote_up"])) 
		{
			$vote=$_POST["vote_up"];
			foreach ($vote as $value)
			{
				$ans_id=key($vote);
			}			
			$find_topic=mysql_query("select * from answer where id=".$ans_id);
			while ($row = mysql_fetch_assoc($find_topic)) 
			{
				$tpc_id=$row['tpc_id'];
			}
			
			$user_voted=mysql_query("SELECT COUNT(*) cnt FROM answer_vote WHERE usr_id=".$_SESSION['id']." AND ans_id=".$ans_id);
			$row=mysql_fetch_assoc($user_voted);			
			if (!$row['cnt'])
			{
				$sql=mysql_query("update answer set vote=vote+1 where id=\"$ans_id\"");
				$sql_2=mysql_query("insert into answer_vote(ans_id, usr_id) values (".$ans_id.",".$_SESSION['id']." )");
				if ($sql && $sql_2) 
				{
					header( "Location: topic.php?id=".$tpc_id."&success=yes" );
				}
				else 
				{
					header( "Location: topic.php?id=".$tpc_id."&error=yes" );
				}			
			}
			else
			{
				header( "Location: topic.php?id=".$tpc_id);
			}
		}
/* vote down */
		if (isset($_POST["vote_down"])) 
		{
			$vote=$_POST["vote_down"];
			foreach ($vote as $value)
			{
				$ans_id=key($vote);
			}	
			$find_topic=mysql_query("select * from answer where id=".$ans_id);
			while ($row = mysql_fetch_assoc($find_topic)) 
			{
				$tpc_id=$row['tpc_id'];
			}			
			$user_voted=mysql_query("SELECT COUNT(*) cnt FROM answer_vote WHERE usr_id=".$_SESSION['id']." AND ans_id=".$ans_id);
			$row=mysql_fetch_assoc($user_voted);
			if (!$row['cnt'])
			{	
				$sql=mysql_query("update answer set vote=vote-1 where id=\"$ans_id\"");
				$sql_2=mysql_query("insert into answer_vote(ans_id, usr_id) values (".$ans_id.",".$_SESSION['id']." )");
				if ($sql && $sql_2) 
				{
					header( "Location: topic.php?id=".$tpc_id."&success=yes" );
				}
				else 
				{
					header( "Location: topic.php?id=".$tpc_id."&error=yes" );
				}			
			}
			else
			{
				header( "Location: topic.php?id=".$tpc_id);
			}
		}	
	}
    else
	{
		header( "Location: index.php" );
    }
?>