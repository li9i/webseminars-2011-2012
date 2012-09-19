
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
            ?><div class="success">Congrats! Your question is ready to be answered :)</div><?php
    }
	
	
		
	if( isset( $_GET['error'] ) )
	{
        ?><div class="error">You cannot leave any fields blank!</div><?php
    }
	?>

	<form  class="login" method="get">
		<select name = "categories" id = "categories">
		<option value = "0">All</option>
		

		<?php 
			$sql="SELECT * from category order by id asc";
			$result =mysql_query($sql);
			while ($data=mysql_fetch_assoc($result)){
		?>
		
		<option value ="<?php echo $data['id'] ?>" ><?php echo $data['descr'] ?></option>
		<?php } ?>

		</select>
		<input type="submit" value="go" class="button"/>
	</form>







	
<?php

	if (isset($_GET['categories']))
	{
		$cat=$_GET['categories'];
		
		if ($cat<>0)
		{
			$sql = "SELECT topic.id id, topic.title title,max(answer.created) created 
					FROM topic_category join (topic left outer join answer
					on topic.id=answer.tpc_id)
					on topic.id = topic_category.tpc_id 
					where topic_category.ctg_id=$cat 
					group by topic.id, topic.title
					ORDER BY created desc, topic.created desc"; 
		}
		else
		{
			$sql = "SELECT topic.id id, topic.title title,max(answer.created) created  
					FROM topic left outer join answer on topic.id=answer.tpc_id
					group by topic.id, topic.title
					ORDER BY created desc, topic.created  DESC"; 
 
		}
	}
	else	
	{
	$sql = "SELECT topic.id id, topic.title title, max(answer.created) created 
			FROM topic left outer join answer on topic.id=answer.tpc_id 
			group by topic.id, topic.title
			ORDER BY created desc, topic.created  DESC"; 
	}
	$rs_result = mysql_query ($sql); 
?> 
	
	
	<table>
	<tr id="titlos"><td><div id="aristero_keli">Title</div></td><td>Last Answer</td></tr>
	<hr/>
	<?php 
	
	while ($row = mysql_fetch_assoc($rs_result)) { 
	
	?> 
				<tr>
				<td><div id="aristero_keli"><?php echo "<a href=\"topic.php?id=".$row['id']."\">".htmlspecialchars($row["title"])." </a>";?></div></td>
				<td><?php echo $row["created"]; ?></td>
				</tr>
	<?php 
	}; 
	?>
	
	</table>
	<hr/>
	

	
	
	
	
	
	
	
	
	
	
	
<?php	
    

    include "footer.php";
?>