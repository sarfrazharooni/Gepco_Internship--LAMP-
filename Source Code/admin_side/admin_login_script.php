<?
	/******************************************
	 This script will check admin account from database and match with user input information
	*******************************************/
	require_once("database.php"); 	
	$db = new database();
	$con = $db->connect("localhost", "root", "");
	$db->selectdb("gepco_store");
	$query = "SELECT name, password FROM admin";
	$result = $db->query($query);
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$pass_word = "";
	$userName = "";
	
	while( $row = mysql_fetch_array($result, MYSQL_NUM) ) {
    	 $pass_word = $row[1];  
		 $userName = $row[0];
	}
	
	if( $name==$userName && $pass==$pass_word ) {
		session_start();
		$_SESSION['is_logged_in'] = true;
		@header("Location: admin_login_success.php");
		exit;
	} else {
		// wrong user name or password
		header("Location: index.php");
	}
	mysql_free_result($result);	
	if( $result ) {
		echo "ok";
	} else {
		echo mysql_error();
	}
	$db->close($con);
?>
