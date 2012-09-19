<?php
    include "header.php";
?>

<?php
    if(isset($_SESSION['id']))
	{
		header( "Location: index.php" );
	}

?>


<form method="post" action="dologin.php" class="login">
    <?php
	
        if(isset($_GET['error']))
		{
            ?><div class="error">Access Denied</div><?php
        }
		
    ?>
    <div id="bla">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" />
    </div>
	
    <div id="bla">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" />
    </div>
	
    <div id="bla">
        <input type="submit" value="authenticate me" class="button"/>
    </div>
</form>
<?php
    include "footer.php";
?>