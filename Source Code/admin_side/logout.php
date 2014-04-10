<?
	/***********************************
	this script will delete admin session so that user can't login without entering login information
	************************************/
	
	session_start();
	
	// if the user is logged in, unset the session
	if( isset($_SESSION['is_logged_in']) ) {
	   unset( $_SESSION['is_logged_in'] );
	}

	header('Location: index.php');

?>
