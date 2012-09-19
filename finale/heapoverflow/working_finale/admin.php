<?php
	if(isset($_SESSION['id'])) 
	{
		if($_SESSION['priv']) 
		{
?>		
<br /><a href="manage_users.php" class="button">Manage Users</a>
<a href="manage_topics.php" class="button">Manage Topics</a>
<?php
		}
		else header("Location: index.php");
	
	}
	else header("Location: index.php");
?>	