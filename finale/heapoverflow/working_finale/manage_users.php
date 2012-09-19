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
	<form name="form1" method="post" action="handle_users.php">
	<table>
	
	
	
<?php
	
	$sql_page = "SELECT COUNT(*) FROM user";
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
			
	$sql=mysql_query("SELECT * FROM user where active=1 ORDER BY username LIMIT $offset, $rowsperpage");
	while ($rows=mysql_fetch_assoc($sql))
	{
?>
	<tr>
		<td>
		<?php echo '<input name="checkbox['.$rows['id'].']" type="checkbox">'; ?>
		<td><?php echo htmlspecialchars($rows["username"]);?></td>

	</tr>	
		
	<?php	
	}
	?>
	
	</table>
	<INPUT TYPE="image" id="sub" name="DeleteUser" src="images/delete.png">
	<INPUT TYPE="image" id="sub" name="MakeAdmin" src="images/make_admin.png">
	<INPUT TYPE="image" id="sub" name="UnmakeAdmin" src="images/unmake_admin.png">
	</form>

	
 <?php
		$range = 3;

		if ($currentpage > 1) 
		{
		   echo "<a href='manage_users.php?currentpage=1' class='button'><<</a>";
		   $prevpage = $currentpage - 1;
		   echo "<a href='manage_users.php?currentpage=$prevpage' class='button'><</a>";
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
				 echo "<a href='manage_users.php?currentpage=$x' class='button'>$x</a> ";
			  } 
		   } 
		} 
						 
		if ($currentpage != $totalpages) {
		   $nextpage = $currentpage + 1;
		   echo " <a href='manage_users.php?currentpage=$nextpage' class='button'>></a> ";
		   echo " <a href='manage_users.php?currentpage=$totalpages' class='button'>>></a> ";
		} 
		
    include "footer.php";
?>