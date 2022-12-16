<?php
    //session_write_close();
    session_start();
    session_unset();
    session_destroy();
    
    if (isset($_COOKIE["login"])){
		setcookie("login", '', time() - (3600));
	}
 
	header('location:index.php');

    //$_COOKIE['login']=null;
    //$a = null;
    //header('Location: '.'index.php');
?>