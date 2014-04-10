<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Request</title>
<link href="../images/styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="../javascript.js"></script>
</head>

<body bgcolor="#CCCC99">
<table id="tbl">
	<tr>
  		<td colspan="2" id="headerimg"></td> 
  	</tr>
	<tr id="navigation">
		<td colspan="2"> 
			<a href="#"> Home </a> || 
			<a href="#"> Change Password </a> ||
            <a href="#">Add Request </a> ||
            <a href="#"> Logout </a>		</td>
  </tr>
	<tr> <td colspan="2"><h1> Add Request</h1></td></tr>
	<tr>
    <td>
          <form action="../admin_side/add_another.php" method="get" name="myForm">		
        	<table>
        		<tr>
            	 	<th><h3>Items to Request </h3></th>
            	</tr>
                <tr>
            	 	<td>Description of Item</td>
                    <td>
                    <select name="itemDescription">
                        <?php 
                            $con = mysql_connect("localhost","root","");
                            if (!$con) {
                                die('Could not connect: ' . mysql_error());
                            }
                            else {
                                $db_selected = mysql_select_db("gepco_store", $con);
                                $result = mysql_query('SELECT * FROM product');
                                while($row = mysql_fetch_array($result,MYSQL_BOTH)) {
                                    echo "<option value=$row[0]> $row[1] </option>";
                                    echo mysql_errno(). ":" . mysql_error();
                                }
                            }
                            mysql_close($con);
                          ?>
                    </select>                	</td>  
            	</tr>
                <tr>
                	<td>Required</td>
                	<td><input type="text" name="required"/> </td>
           		</tr>
            	<tr>
                	<td>Supplied</td>
                	<td><input type="text" id="supplied" name="supplied"/> </td>
            	</tr>
            	<tr>
                	<td> <input type="submit" value="Add Now" />  </td>
            	</tr> 
         	</table>
        </form>      </td>
  </tr>
  <tr>
	<td width="162"><h3>Items Added </h3> </td>
  </tr>
  <tr>
		<?php
				@session_start();
				$size = count($_SESSION['required']);
				echo "<td> $size Items Added Till Now </td>" ;
		?>
  </tr> 
</table>
<div align="center" id="requestFooter">
	 Copyright <? echo "1984 - " . date('Y'); ?> <a href="http://www.gepco.com.pk">GEPCO </a> Pakistan <br>
     Designed and Developed By: <a href="http://www.cs.gift.edu.pk/~sarfraz">Sarfraz Ahmad </a>
</div> 
</body>
</html>