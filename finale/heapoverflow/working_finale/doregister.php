<?php
    include "db.php";

    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password'])); 
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	
	/*
		arxika tsekaro an kapoio apo ta pedia username, password, email einai kena. an einai simaino to la9os kai kano redirect stin idia selida
		sti sunexeia tsekaro an to username uparxei idi. an uparxei simaino to la9os kai ksana redirect stin idia selida.
		telos elegxo to email. akribos to idio me to username.
		
		an perasei to registration apo olous tous elegxous, kano register to xristi sti basi kai ton kano redirect sti selida login.php gia na loggarei.
	*/
	
	if($username <> '' && $password <> '' && $email <> '' && filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
	
		$check_username = $link->prepare("select id from user where username=?");
		$check_username->bind_param("s", $username);
		$check_username->execute();
		$check_username->store_result();
		$check_username->bind_result($a);
		$row_cnt_username = $check_username->num_rows;
		if($row_cnt_username == 0) 
		{
			$check_email = $link->prepare("select id from user where email=?");
			$check_email->bind_param("s", $email);
			$check_email->execute();
			$check_email->store_result();
			$check_email->bind_result($b);
			$row_cnt_email = $check_email->num_rows;
			if($row_cnt_email == 0) 
			{
			
				$result = $link->prepare("Insert into user (username, password, email) values(?,?,?)");
				$result->bind_param("sss", $username, $password, $email);
				$result->execute();
				$result->close();
				header( "Location: login.php" );
			}
			else 
			{
				header( "Location: register.php?email_error=yes" );
			}
		}
		else
		{
			header( "Location: register.php?username_error=yes" );
		}
	}
	else 
	{
		header( "Location: register.php?empty_error=yes" );
	}

?>