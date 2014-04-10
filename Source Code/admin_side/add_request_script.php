<?php 
	
	$con = mysql_connect("localhost","root","");
	
	if( !$con ) {
		die('Could not connect: ' . mysql_error());
	} else {
		
		$db_selected = mysql_select_db("gepco_store", $con);
		
		session_start();
		
		$serial = $_GET["serial"];
	 	$page = $_GET["page"];
	 	$date = $_GET["date"];
	 	$requestedBy = $_GET["requestedBy"];
		
		$query = "INSERT INTO request (serial_no, req_date, page_no, user_id)
					VALUES ('$serial', '$date', '$page', '$requestedBy' )";
		mysql_query($query);
		echo mysql_error();			
		$req_id = mysql_insert_id(); // id of inserted request is saved to insert it as foreign key in product_request table 
		
		$query1 = "";
		$query2 = "";
		$query3 = "";
		
		$items_added = count( $_SESSION['itemDescription'] );
		
		for( $i=0; $i<$items_added; $i++ )  {
			$item = $_SESSION['itemDescription'][$i];
			$req = $_SESSION['required'][$i];
			$supp = $_SESSION['supplied'][$i];
			$query2 = "INSERT INTO product_request (request_id, product_id, required, supplied) 
							VALUES('$req_id', '$item', '$req', '$supp')";
			mysql_query($query2);
			mysql_error();
		}
		
		$_SESSION['is_request_added'] = true;
		@header("Location: request_success.php");
			
	} // endelse
	
	mysql_close($con);
	
?>