<?php
// Make sure that user is not accessing this page directly without login.	
	session_start();
	if( !isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
	   header('Location: index.php');
	   exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Change Admin Password</title>
<link href="../images/styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="../javascript.js"></script>
</head>

<body>
<table id="tbl">
  <tr>
    <td id="headerimg">	</td>
  </tr>
  <tr id="navigation">
	<td> 
	 <a href="admin_login_success.php"> Home </a> || 
	 <a href="change_pwd.php"> Change Password </a> ||
	 <a href="add_product.php"> Add Product</a> ||
     <a href="add_request.php"> Add Request </a> ||
	 <a href="#"> Supplier Record </a> ||
	 <a href="#"> Receiver Record </a> ||
     <a href="#"> Loan Record </a> ||
	 <a href="<? echo "logout.php" ?>"> Logout </a>
	</td>
  </tr>
  <tr>
    <td><h1>Change  Password</h1></td>
  </tr>
  <tr>
	<td>
	 <table id="mytbl">
	 <form id="myForm" action="change_pwd_script.php" method="post">
		<tr>
		 <td>Old Password</td>
		 <td><input type="password" name="old" id="old" /> </td>
		</tr>
		<tr>
		 <td>New Password </td>
		 <td><input type="password" name="newPwd" id="newPwd"/> </td>
		</tr>
		<tr>
		 <td>Confirm Password </td>
		 <td><input type="password" name="confirmPwd" id="confirmPwd"/></td>
		</tr>
		<tr>
		 <td>
		  <input type="submit" value="Change Now" />
		  <input type="submit" value="Cancel" />		 
		 </td>
		</tr>   
	 </form>
	 </table>
	</td>
  </tr>
</table>
<div align="center" id="footer">
	 Copyright <? echo "1984 - " . date('Y'); ?> <a href="http://www.gepco.com.pk">GEPCO </a> Pakistan <br>
     Designed and Developed By: <a href="http://www.cs.gift.edu.pk/~sarfraz">Sarfraz Ahmad </a> 
</div>
</body>
</html>