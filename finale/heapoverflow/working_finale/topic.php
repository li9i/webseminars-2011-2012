
<?php
    include "header.php";
?>

	<?php
    if(isset($_SESSION['id']))
	{
		echo 'You are logged in as '.htmlspecialchars($_SESSION['username']);
		if(isset($_SESSION['priv'])) 
		{
			if ($_SESSION['priv']) include 'admin.php';

		}
		include 'buttons_logged_in.php';
    }
    else
	{
		include 'buttons_logged_out.php';
    }
	
	
	if(isset($_GET['success']))
	{
            ?><div class="success">Congrats! Changes have been made successfully :)</div><?php
    }		
	if( isset( $_GET['error'] ) )
	{
        ?><div class="error">You cannot submit an empty answer!</div><?php
    }
		

	
	/***********************************************************************************/
	/******************* edo blepoume to ka9e topic ksexorista *************************/
		
		if (isset($_GET['id']))
		{
			if (filter_var($_GET['id'], FILTER_VALIDATE_INT))
			{
				$tpc_id=$_GET['id'];
				$tpc_exists=mysql_query("select count(*) num_tpc from topic where id=".$tpc_id);
				$row_tpc = mysql_fetch_assoc($tpc_exists);
				if ($row_tpc['num_tpc']==1)
				{
				
				$_SESSION['tpc_id']=$tpc_id;
				$topic=mysql_query("select * from topic,user where topic.usr_id=user.id and topic.id=$tpc_id");
				$answers=mysql_query("select answer.id ans_id, answer.tpc_id tpc_id, answer.usr_id a_usr_id, answer.answer, answer.created created, answer.vote vote, user.id u_usr_id, user.username username, user.admin admin
				from answer, user where answer.usr_id=user.id and tpc_id=$tpc_id order by vote desc, created");
			
?>	
		<div id="pinakas">
		<form action="edit_delete_q_a.php" method="post">
		<table>
<?php 
		while ($row = mysql_fetch_assoc($topic))
		{ 
	
?> 
		<tr>
			<td colspan = "3">
			<div id="q_title"><?php echo htmlspecialchars($row["title"]);?></div></td>
		</tr>
		<tr>
			<td rowspan="2"><div id="q_user"><?php echo htmlspecialchars($row["username"]).':';?></div></td>
			<td colspan = "2">
			<div id="q_question"><?php echo htmlspecialchars($row["question"]);?></div>
			<hr/>
			</td>
		</tr>
		<tr>
			<td height="0">
			<div id="q_created"><?php echo $row["created"]; ?></div>
			</td>
<?php
    if(isset($_SESSION['id']))
	{
		if ($_SESSION['priv']==1 || $_SESSION['id']==$row['usr_id'])
		{
?>
			<td>

<?php 	echo '<INPUT TYPE="image" id="sub" name="edit_q['.$tpc_id.']" src="images/pencils.png">'; ?>

			</td>
<?php 
		};}; 
?>
				
		</tr>

<?php 
		}; 
?>
		</table>
			</form>
	</div>	
	

	<?php 
	while ($row = mysql_fetch_assoc($answers)) { 
	?> 
	<div id="pinakas_2">
	<form action="edit_delete_q_a.php" method="post">
	
	<table>
	<tr>
		<td rowspan="2"><div id="a_user"><?php echo htmlspecialchars($row["username"]).':';?></div></td>
		<td colspan = "2">
			<div id="a_answer"><?php echo htmlspecialchars($row["answer"]);?></div>
			<hr/>
		</td>
		<td rowspan="2">
			<?php if(isset($_SESSION['id']) && $row['u_usr_id']<>$_SESSION['id']) echo '<INPUT TYPE="image" id="sub" name="vote_up['.$row['ans_id'].']" src="images/no-vote-up.png" class="vote_up">'; ?>
			<div id="votes"><?php echo $row["vote"];?></div>
			<?php if(isset($_SESSION['id']) && $row['u_usr_id']<>$_SESSION['id']) echo '<INPUT TYPE="image" id="sub" name="vote_down['.$row['ans_id'].']" src="images/no-vote-down.png" class="vote_down">'; ?>		
		</td>
	</tr>
	<tr>
		<td>
			<div id="a_created"><?php echo $row["created"]; ?></div>
		</td>
	<?php
	if(isset($_SESSION['id']))
	{
		if ($_SESSION['priv']==1 || $_SESSION['id']==$row['u_usr_id'])
	{
	?>
		<td>
			<?php echo '<INPUT TYPE="image" id="sub" name="edit_a['.$row['ans_id'].']" src="images/pencils.png">'; ?>
			<?php echo '<INPUT TYPE="image" id="sub" name="delete_a['.$row['ans_id'].']" src="images/media-no.png">'; ?>
</td>
	<?php 
	}; };
	?>			
	</tr>
	</table>
	</form>
	</div>
	
	
	
	
	
	<?php 
		}; 
	?>

	
	
	<?php
    if(isset($_SESSION['id']))
	{
	?>
	<div id="submit_a">
	<?php
	echo "Submit an answer:";
	?>
	</div>
	<form action="save_answer.php" method="post">
		<div class="text">
			<textarea name="text">here lies the truth</textarea>
			<div id="sub_a_button">
			<INPUT TYPE="image" id="sub" VALUE="View Topics" src="images/check.png">
			</div>
		</div>		
	</form>

	<?php
    }	
	?>
		
		

	<?php
		}	// edo tpc_exists
		else
		{
			header("Location: topics.php");
		}
	} //edo if (filter_var($_GET['id'], FILTER_VALIDATE_INT))
	
	
	
	
	
	
	else
	{
		header("Location: topics.php");
	}
	}
	else
	{
		header("Location: topics.php");
	}

    if(!isset($_SESSION['id']))
	{
	?>
	
	<br /><a href="login.php" class="button">Login</a>
	<span>or</span>
	<a href="register.php" class="button">Register</a>
	<span>to post your answer</span>
	
	<?php
	}
	?>
	
	
	
	<?php
    include "footer.php";
	?>
