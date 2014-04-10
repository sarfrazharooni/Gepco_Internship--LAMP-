<?
	require_once("database.php"); 	
	$old = $_POST['old'];
	$newPwd = $_POST['newPwd'];
	$confirmPwd = $_POST['confirmPwd'];
	
	if( empty($old) || empty($newPwd) || empty($confirmPwd) ) {
		@header("Location: failed.php");
		exit;
	}
	
	if( $newPwd != $confirmPwd ) {
		@header("Location: failed.php");
		exit;
	}
	
	$db = new database();
	$con = $db->connect("localhost", "root", "");
	$db->selectdb("gepco_store");
	$query = "UPDATE admin SET password='$newPwd' WHERE password='$old'";
	$result = $db->query($query);
	
	if( $result ) {
		@header("Location: success.php");
	} else {
		@header("Location: failed.php");
		echo mysql_error();
	}
	
	$db->close($con);
	exit;
?>