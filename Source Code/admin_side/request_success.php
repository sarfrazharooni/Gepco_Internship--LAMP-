<?
	/***********************************
	this script will delete admin session so that user can't login without entering login information
	************************************/
	
	session_start();
	
	// if the user is logged in, unset the session
	if( isset($_SESSION['is_request_added']) ) {
	   unset( $_SESSION['is_request_added'] );
	   unset($_SESSION['itemDescription']);
	   unset($_SESSION['required']);
	   unset($_SESSION['supplied']);
	}

	header('Location: add_request.php');

?>