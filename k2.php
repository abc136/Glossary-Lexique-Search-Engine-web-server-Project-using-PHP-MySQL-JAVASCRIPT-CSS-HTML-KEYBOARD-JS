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
	text-decoration: underline;
}
a:visited {
	color: #0000FF;
	text-decoration: underline;
}
a:hover {
	color: #FF0000;
	text-decoration: none;
}
a:active {
	color: #0000FF;
	text-decoration: underline;
}
.style3 {
	color: #996633;
	text-decoration: blink;
}
.style5 {font-size: 18px}
.style7 {	color: #3399FF;
	font-weight: bold;
}
.Style12 {font-size: 36px; font-weight: bold; color: #000000; }
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
  <table width="974" height="162" border="0" align="center"  >
    <tr>
      <td width="968" height="75"  align="center" bordercolor="#000000" bgcolor="#CDAE46" class="style5 style3 footer"><p align="center"><span class="Style12">
        <?

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])  && !empty($_POST['email'])) {	 
	
	$link = mysql_connect("localhost", "root", ""); // Connexion &agrave; MySQL
	mysql_select_db("bas-lexique"); // S&eacute;lection de la base dico
	
	$charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	 
	
	$log = mysql_escape_string($_POST['login']); 
	$pass = mysql_escape_string($_POST['pass']);
	$email = mysql_escape_string($_POST['email']);
	
	
	 
	   $sql = "INSERT INTO `information` ( `login` , `password` , `email` ) VALUES ('$log', '$pass', '$email')" ;
	   
	$reponse = mysql_query($sql);

	echo "*  L'operation est Terminer avec Succés  *" ;
?>
      </span></p>
        <p align="center">&nbsp;</p>
        <p align="center"> <span class="Style12">Pour Ajouter Un Mot </span><a href="Ajout_Utilisateur.php" class="Style12">Cliquer Ici</a></p>
        <p align="center"><span class="Style12">Pour Chercher Un Mot </span><a href="Untitled-10.php" class="Style12">Cliquer Ici</a></p>
        <p align="center"><span class="Style12">
          <? 
 mysql_close();
 }
if ($_POST['login']=="") {echo "Desolé, Inserer Un Login SVP !"; } 

	 ?>
        </span></p>
        <p align="center">&nbsp;</p></td>
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
</div></body>
</html>
