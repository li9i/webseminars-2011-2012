<?php
    include "header.php";
	if(isset($_SESSION['id'])) 
	{
		if($_SESSION['priv']) 
		{
			echo 'You are logged in as '.htmlspecialchars($_SESSION['username']);
			include 'admin.php';
			include 'buttons_logged_in.php';
			
			if(isset($_GET['success']))
			{
				?><div class="success">Changes have been made successfully</div><?php
			}		
			if( isset( $_GET['error'] ) )
			{
				?><div class="error">Something went horribly wrong :(</div><?php
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
		
			$sql_page = "SELECT COUNT(*) FROM topic, topic_category where topic.id=topic_category.tpc_id and topic_category.ctg_id=$cat";
			$result = mysql_query($sql_page) or die(mysql_error());
			$r = mysql_fetch_row($result);
			$numrows = $r[0];
						
			$rowsperpage = 15;
			$totalpages = ceil($numrows / $rowsperpage);

			if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) 
			{
			   $currentpage = (int) $_GET['currentpage'];
			} 
			else 
			{
			   $currentpage = 1;
			} 

			if ($currentpage > $totalpages) 
			{
			   $currentpage = $totalpages;
			} 
			
			if ($currentpage < 1) 
			{
			   $currentpage = 1;
			} 
			
			$offset = ($currentpage - 1) * $rowsperpage;
			
			$sql = "SELECT topic.id id, topic.title title,max(answer.created) created 
					FROM topic_category join (topic left outer join answer
					on topic.id=answer.tpc_id)
					on topic.id = topic_category.tpc_id 
					where topic_category.ctg_id=$cat 
					group by topic.id, topic.title
					ORDER BY topic.created desc,created desc
					LIMIT $offset, $rowsperpage"; 
		}
		else
		{
		
			$sql_page = "SELECT COUNT(*) FROM topic";
			$result = mysql_query($sql_page) or die(mysql_error());
			$r = mysql_fetch_row($result);
			$numrows = $r[0];
			
			$rowsperpage = 15;
			$totalpages = ceil($numrows / $rowsperpage);

			if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) 
			{
			   $currentpage = (int) $_GET['currentpage'];
			} else {
			   $currentpage = 1;
			} 

			if ($currentpage > $totalpages) 
			{
			   
			   $currentpage = $totalpages;
			} 
			
			if ($currentpage < 1) 
			{
			   $currentpage = 1;
			} 

			$offset = ($currentpage - 1) * $rowsperpage;		
			$sql = "SELECT topic.id id, topic.title title,max(answer.created) created  
					FROM topic left outer join answer on topic.id=answer.tpc_id
					group by topic.id, topic.title
					ORDER BY created desc, topic.created  DESC
					LIMIT $offset, $rowsperpage"; 
 
		}
	}
	else	
	{
	
		$sql_page = "SELECT COUNT(*) FROM topic";
		$result = mysql_query($sql_page) or die(mysql_error());
		$r = mysql_fetch_row($result);
		$numrows = $r[0];
		$rowsperpage = 15;
		$totalpages = ceil($numrows / $rowsperpage);

		if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) 
		{
		   $currentpage = (int) $_GET['currentpage'];
		} else {
		   $currentpage = 1;
		} 

		if ($currentpage > $totalpages) 
		{
		   $currentpage = $totalpages;
		}
		
		if ($currentpage < 1) 
		{
		   $currentpage = 1;
		} 

		$offset = ($currentpage - 1) * $rowsperpage;
		
		$sql = "SELECT topic.id id, topic.title title, max(answer.created) created 
			FROM topic left outer join answer on topic.id=answer.tpc_id 
			group by topic.id, topic.title
			ORDER BY created desc, topic.created  DESC
			LIMIT $offset, $rowsperpage"; 
	}
	$rs_result = mysql_query ($sql); 
?> 
	
	
	<form name="form1" method="post" action="handle_topics.php">
	<table>
	<?php
	#$sql=mysql_query("SELECT * FROM topic ORDER BY created desc");
	while ($rows=mysql_fetch_assoc($rs_result/*$sql*/))
	{
	?>
	<tr>
		<td>
		<?php echo '<input name="checkbox['.$rows['id'].']" type="checkbox">'; ?>
		<td><div id="aristero_keli"><?php echo "<a href=\"topic.php?id=".$rows['id']."\">".htmlspecialchars($rows["title"])." </a>";?></div></td>

	</tr>	
		
	<?php	
	}
	?>
	
	</table>
	<INPUT TYPE="image" id="sub" name="DeleteTopic" src="images/delete.png">
	</form>
<?php
	
	if (isset($_GET['categories']))
	{
		$cat=$_GET['categories'];
		$range = 3;

		if ($currentpage > 1) 
		{
		   echo "<a href='manage_topics.php?categories=$cat&currentpage=1' class='button'><<</a>";
		   $prevpage = $currentpage - 1;
		   echo "<a href='manage_topics.php?categories=$cat&currentpage=$prevpage' class='button'><</a>";
		} 

		for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) 
		{
		   if (($x > 0) && ($x <= $totalpages)) 
		   {
			  if ($x == $currentpage)
			  {
				 echo "<a href='#' class='button'>[<b>$x</b>]</a>";
			  } 
			  else 
			  {
				 echo "<a href='manage_topics.php?categories=$cat&currentpage=$x' class='button'>$x</a> ";
			  } 
		   } 
		} 
						 
		if ($currentpage != $totalpages) {
		   $nextpage = $currentpage + 1;
		   echo " <a href='manage_topics.php?categories=$cat&currentpage=$nextpage' class='button'>></a> ";
		   echo " <a href='manage_topics.php?categories=$cat&currentpage=$totalpages' class='button'>>></a> ";
		} 
	}
	else ################den exei patisei koubi gia tis katigories#####################
	{
		$range = 3;

		if ($currentpage > 1) 
		{
		   echo " <a href='manage_topics.php?currentpage=1' class='button'><<</a> ";
		   $prevpage = $currentpage - 1;
		   echo " <a href='manage_topics.php?currentpage=$prevpage' class='button'><</a> ";
		} 

		for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) 
		{
		   if (($x > 0) && ($x <= $totalpages)) 
		   {
			  if ($x == $currentpage) 
			  {
				 echo "<a href='#' class='button'>[<b>$x</b>]</a>";
			  } 
			  else 
			  {
				 echo " <a href='manage_topics.php?currentpage=$x' class='button'>$x</a> ";
			  } 
		   } 
		} 
						 
		if ($currentpage != $totalpages) {
		   $nextpage = $currentpage + 1;
		   echo " <a href='manage_topics.php?currentpage=$nextpage' class='button'>></a> ";
		   echo " <a href='manage_topics.php?currentpage=$totalpages' class='button'>>></a> ";
		}
	
	}
	?>
	
 <?php

    include "footer.php";
?>