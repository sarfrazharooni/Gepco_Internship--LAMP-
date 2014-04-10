<? 
	session_start();
	
	$itemDescription = $_GET['itemDescription'];
	$required = $_GET['required'];
	$supplied = $_GET['supplied'];
	
	settype( $_SESSION['itemDescription'], "array" ); 
	if ( !isset($_SESSION['itemDescription']) ) {
		$_SESSION['itemDescription'] = $itemDescription;
	} else {
		array_push( $_SESSION['itemDescription'], $itemDescription );	
	}
	
	settype( $_SESSION['required'], "array" );
	if ( !isset($_SESSION['required']) ) {
		$_SESSION['required'] = $required;
	} else {
		array_push( $_SESSION['required'], $required );	
	}
	
	settype( $_SESSION['supplied'], "array" );
	if ( !isset($_SESSION['supplied']) ) {
		$_SESSION['supplied'] = $supplied;
	} else {
		array_push( $_SESSION['supplied'], $supplied );	
	}
	
	header("Location: add_request.php");
?>  