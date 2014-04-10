<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
<link href="../images/styles.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#CCCC99">
	<table id="tbl">
  		<tr>
    		<td id="headerimg"></td>
		</tr>
		<tr>
    		<td><h1>Admin Login</h1></td>
	 	</tr>
  		<tr>
			<td>
	 			<table id="mytbl">
	 				<form action="admin_login_script.php" method="post" name="myForm">
						<tr> <td>Name</td><td><input type="text" name="name"/> </td></tr>
						<tr><td>Password</td> <td><input type="password" name="pass"/></td></tr>
						<tr> <td> <input type="submit" value="Login Now"/> </td> </tr>
				 	</form>
			 	</table>	
		    </td>
		</tr>
	</table>
<div align="center" id="footer">
	 Copyright <? echo "1984 - " . date('Y'); ?> <a href="http://www.gepco.com.pk">GEPCO </a> Pakistan <br>
     Designed and Developed By: <a href="http://www.cs.gift.edu.pk/~sarfraz">Sarfraz Ahmad </a> </div>
</body>
</html>