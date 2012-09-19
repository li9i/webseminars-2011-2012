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
		header( "Location: topics.php" );
		#include 'buttons_logged_out.php';
    }
?>
	
<div id="displayContext">Create a New Topic</div>	
<form action="save_topic.php" method="post" class="qu">
	<div class="text">
	
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" />
		<label for="question">Your Question:</label>
		<textarea name="text"></textarea>
	   
	</div>
	
	<div class="text"><label for="cat">Categories:</label></div>   
	<div id="drop">


	<form  class="login">
		<select name = "categories1" id = "categories">
			<option value = "0">None</option>
			<?php 
				$sql="SELECT * from category order by id asc";
				$result =mysql_query($sql);
				while ($data=mysql_fetch_assoc($result)){
			?>
			<option value ="<?php echo $data['id'] ?>" ><?php echo $data['descr'] ?></option>
			<?php } ?>
		</select>

	</div>
	<div id="drop">
	<form  class="login">
		<select name = "categories2" id = "categories">
			<option value = "0">None</option>
			<?php 
				$sql="SELECT * from category order by id asc";
				$result =mysql_query($sql);
				while ($data=mysql_fetch_assoc($result)){
			?>
			<option value ="<?php echo $data['id'] ?>" ><?php echo $data['descr'] ?></option>
			<?php } ?>
		</select>

	</div>
	<div id="drop">
	<form  class="login">
		<select name = "categories3" id = "categories">
			<option value = "0">None</option>
			<?php 
				$sql="SELECT * from category order by id asc";
				$result =mysql_query($sql);
				while ($data=mysql_fetch_assoc($result)){
			?>
			<option value ="<?php echo $data['id'] ?>" ><?php echo $data['descr'] ?></option>
			<?php } ?>
		</select>

	</div>

	<INPUT TYPE="image" id="sub" VALUE="View Topics" src="images/check.png">


</form>