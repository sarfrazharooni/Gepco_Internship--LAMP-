<?
	class database {
		
		private $link = false;
		
		// Connect to database and return the link if connected else false if not connected
		function connect( $dbhost, $dbuser, $dbpass ) {
			$con = mysql_connect( "$dbhost", "$dbuser", "$dbpass" );
			if ( !$con ) {
				mysql_error();
				return $con;
			} else {
				return $con;
			}
		}
		
		// Select the which database to use
		function selectdb($name) {
			if( mysql_select_db("$name") ) {
				return true;
			} else {
				return false;
			}
		}
		
		// Send a mysql query 
		function query( $query ) {
			$res = mysql_query($query);
			if ($res) {
				return $res;
			} else {
				mysql_error();
			}
		}
		
		// Close given database connection. Returns true if closed otherwise false on failure
		function close($con) {
				if( mysql_close($con) ) {
					return true;
				} else {
					return false;
				}
		}
	}
?>