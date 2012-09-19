<?php
    include "header.php";
?>

<?php
    if(isset($_SESSION['id']))
	{
		header( "Location: index.php" );

    }
?>
	
<form method="post" action="doregister.php"  class="login">
	<?php
	
        if(isset($_GET['username_error']))
		{
            ?><div class="error">Username taken!</div><?php
        }
		
		if(isset($_GET['email_error']))
		{
            ?><div class="error">User with same email already exists!</div><?php
        }
		
		if(isset($_GET['empty_error']))
		{
            ?><div class="error">Something went wrong mate</div><?php
        }
		
	?>
    <div id="bla">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" maxlength="10"/>
    </div>
    <div id="bla">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" />
    </div>
	<div id="bla">
		<label for="email">e-mail:</label>
		<input type="text" name="email" id="email" />
    </div>
    <div id="bla">
        <input type="submit" value="make me a member" class="button" />
    </div>
</form>
<?php
    include "footer.php";
?>