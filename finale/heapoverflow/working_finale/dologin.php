<?php
    include "db.php";
    $username = mysql_real_escape_string($_POST[ 'username' ]);
    $password = md5(mysql_real_escape_string($_POST[ 'password' ]));
	
	$sql = $link->prepare("select id,username,admin,active from user where username=? and password=?");
	$sql->bind_param("ss", $username, $password);
	$sql->execute();
	$sql->store_result();
	$sql->bind_result($ret_id, $ret_username, $ret_admin, $ret_active);
	$row_cnt = $sql->num_rows;

	if ($row_cnt ==1)
	{
        while ($sql->fetch())
		{
			if ($ret_active==1)
			{
			$_SESSION['id'] = $ret_id;
			$_SESSION['username'] = $ret_username;
			$_SESSION['priv']= $ret_admin;
			header("Location: index.php");
			}
			else
			{
				header( "Location: login.php?error=yes" );	
			}
		}
    }
    else
	{
        header( "Location: login.php?error=yes" );
    }
?>