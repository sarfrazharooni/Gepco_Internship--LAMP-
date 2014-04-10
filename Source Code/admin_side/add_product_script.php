<?php 
	$con = mysql_connect("localhost","root","");
	if (!$con) {
	die('Could not connect: ' . mysql_error());
	} else {
		$prodDes = $_GET['productDescription']; 
		$qty = $_GET["qty"];
		$purchase = $_GET["purchase"];
		$date = $_GET["date"];
		$perBox = $_GET['perBox']; 
		$db_selected = mysql_select_db("gepco_store", $con);
		$query = "INSERT INTO product(prod_name,per_box) VALUES('$prodDes', '$perBox')";
		$result = mysql_query($query);
		if( $result == 1 ) {
			@header("Location: success.php");
		} else {
			@header("Location: failed.php");
		}
		mysql_close($con);
	}
?>