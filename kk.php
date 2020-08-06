<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AJOUTER</title>
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
.Style14 {color: #000000}
.Style15 {color: #000000; font-weight: bold; font-size: 36px; }
.Style17 {color: #000000; font-weight: bold; font-size: 28px; }
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
  <table width="988" height="220" border="0" align="center" bgcolor="#CDAE46"  >
    <tr>
      <td width="923"  align="center" bordercolor="#000000" bgcolor="#CDAE46" class="style5 style3 footer"><p class="style4">&nbsp; </p>
          <p class="style4">&nbsp;</p>
        <p class="style12">
            <span class="Style14">
            <?

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {	 
	 
	$link = mysql_connect("localhost", "root", ""); // Connexion &agrave; MySQL
	mysql_select_db("bas-lexique"); // S&eacute;lection de la base dico
	
	$charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	 
	
	
	
	
	 
	   $mysql = "SELECT password FROM information WHERE login='".$_POST['login']."'";
	   $req = mysql_query($mysql) or die('Erreur SQL !<br>'.$mysql.'<br>'.mysql_error());
	   $data = mysql_fetch_assoc($req);
	   
	if($data['password'] != $_POST['password']) {
    
     echo "Désolé Votre Mot De passe n'existe Pas ...!!";  
echo "";
  ?>
        </span>        </p>
        <p class="style12">          <a href="k.php" class="Style13">Pr&eacute;cedent</a></p>
        <p class="Style15">
          <?
  
   }
  else {
       
       $_SESSION['login'] = $_POST['login'];

 ?>
          </br>
        </p>
        <p class="Style15">** Votre login Et Le mot de passe est Correct ** </p>
        <ul>
          <li class="Style17">Vous Pouvez  Aller &agrave; la page d'ajoute ou La Page de Recherche</li>
        </ul>
        <p class="style12"><span class="Style13"><a href="Ajout_Utilisateur.php">&gt; Page d'joute  </a>
            </span></p>
        <p class="style12"><a href="Untitled-10.php">&gt; Page de Recherche </a></p>
        <p class="style12"><span class="Style13"><span class="Style14">
          <?
	   

}  
}

	 
 mysql_close();
	 
	
	 ?>
        </span></span></p>
        <p>&nbsp;</p>
      <h2 align="left">&nbsp;</h2></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
