<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
body {
	background-image: url(index_Image/fond.gif);
	background-repeat: repeat;
}
a:link {
	color: #0000FF;
}
a:visited {
	color: #0000FF;
}
a:hover {
	color: #FF0000;
}
a:active {
	color: #0000FF;
}
.style3 {
	color: #996633;
	text-decoration: blink;
}
.style5 {font-size: 18px}
.style7 {	color: #3399FF;
	font-weight: bold;
}
.Style9 {
	color: #333333;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Style10 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="468" height="79" border="0" align="center"  >
    <tr>
      <td width="462" height="75"  align="center" bordercolor="#000000" bgcolor="#CDAE46" class="style5 style3 footer"><p> 
            <span class="Style10">
            <?

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])  && !empty($_POST['email'])) {	 
	 
	$link = mysql_connect("localhost", "root", ""); // Connexion &agrave; MySQL
	mysql_select_db("bas-lexique"); // S&eacute;lection de la base dico
	
	$charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	 
	
	$log = mysql_escape_string($_POST['login']);
	$pass = mysql_escape_string($_POST['pass']);
	$email = mysql_escape_string($_POST['email']);
	
	
	 
	   $sql = "INSERT INTO `utilisateur` ( `login` , `password` , `email` ) VALUES ('$log', '$pass', '$email')" ;
	   
	$reponse = mysql_query($sql);

	echo " &#1604;&#1602;&#1583; &#1578;&#1605;&#1578; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604; " ;
	
	 }
	 
	 
	 mysql_close();
	 
	 
	 ?>
            </span>        </p>
      </td>
    </tr>
  </table>
</div>
<div align="justify">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><a href="Untitled-7.php" class="Style10">&#1585;&#1580;&#1608;&#1593;</a></p>
</div></body>
</html>
