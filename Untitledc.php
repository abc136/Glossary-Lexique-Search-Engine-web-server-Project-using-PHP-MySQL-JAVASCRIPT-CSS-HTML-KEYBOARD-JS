<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
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
.style12 {	color: #996633;
	font-weight: bold;
	font-size: 36px;
}
.style3 {color: #C6CFE7}
.style4 {font-size: 14px; color: #000000; }
.style5 {font-size: 18px}
.Style13 {
	font-size: 36px;
	color: #996633;
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
  <table width="895" height="220" border="0" align="center" bgcolor="#CDAE46"  >
    <tr>
      <td width="823"  align="center" bordercolor="#000000" bgcolor="#CDAE46" class="style5 style3 footer"><p class="style4">&nbsp; </p>
          <p class="style4">&nbsp;</p>
        <p class="style12">
            <?

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {	 
	 
	$link = mysql_connect("localhost", "root", ""); // Connexion &agrave; MySQL
	mysql_select_db("bas-lexique"); // S&eacute;lection de la base dico
	
	$charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	 
	
	
	
	
	 
	   $mysql = "SELECT password FROM utilisateur WHERE login='".$_POST['login']."'";
	   $req = mysql_query($mysql) or die('Erreur SQL !<br>'.$mysql.'<br>'.mysql_error());
	   $data = mysql_fetch_assoc($req);
	   
	if($data['password'] != $_POST['password']) {
    
     echo "&#1593;&#1600;&#1600;&#1600;&#1584;&#1585;&#1575; !!! &#1585;&#1602;&#1605;&#1600;&#1600;&#1603; &#1575;&#1604;&#1587;&#1585;&#1610; &#1604;&#1575;&#1610;&#1608;&#1580;&#1583; &#1593;&#1606;&#1583;&#1606;&#1600;&#1600;&#1600;&#1575;..";  
echo "";
  ?>
        </p>
        <p class="style12">          <a href="Untitled-7.php" class="Style13">&#1585;&#1580;&#1600;&#1600;&#1608;&#1593;</a></p>
        <p class="style12">
          <?
  
   }
  else {
       
       $_SESSION['login'] = $_POST['login'];

    echo "&#1604;&#1602;&#1583; &#1578;&#1605; &#1575;&#1604;&#1583;&#1582;&#1600;&#1600;&#1600;&#1608;&#1604; &#1576;&#1606;&#1580;&#1575;&#1581; ";
	
	   echo "&#1573;&#1606;&#1578;&#1602;&#1604; &#1573;&#1604;&#1609; &#1575;&#1604;&#1589;&#1601;&#1581;&#1600;&#1600;&#1600;&#1577; &#1575;&#1604;&#1578;&#1575;&#1604;&#1610;&#1577;" ; ?>
          </br>
        </p>
        <p class="style12"><span class="Style13"><a href="Un.php">&#1575;&#1590;&#1575;&#1601;&#1577; &#1603;&#1604;&#1605;&#1577; </a>
          <?
	   

}  
}

	 
 mysql_close();
	 
	
	 ?>
            </span></p>
        <p>&nbsp;</p>
      <h2 align="left">&nbsp;</h2></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
