<?php
    include "header.php";
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
    

    include "footer.php";
?>