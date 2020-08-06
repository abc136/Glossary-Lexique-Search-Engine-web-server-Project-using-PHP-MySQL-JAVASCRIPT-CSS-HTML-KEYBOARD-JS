<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-repeat: repeat;
	background-image: url(index_Image/fond.gif);
}
.Style12 {font-size: 36px; font-weight: bold; color: #000000; }
.Style13 {font-size: 36px; font-weight: bold; color: #0000FF; }
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
-->
</style></head>

<body>
<table width="1179" height="485">
  <tr>
    <td width="1171" height="203">&nbsp;</td>
  </tr>
  <tr>
    <td height="241" align="center"><p class="Style12">
      <?

if( isset($_POST) && !empty($_POST['nom']) && !empty($_POST['email'])  && !empty($_POST['source']) && !empty($_POST['profession']) && !empty($_POST['proposition']) ) {	 
	 
	$link = mysql_connect("localhost", "root", ""); // Connexion &agrave; MySQL
	mysql_select_db("bas-lexique"); // S&eacute;lection de la base dico
	
	$charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	 
$nom1 = mysql_escape_string($_POST['nom']);
$email1 = mysql_escape_string($_POST['email']);
$source1 = mysql_escape_string($_POST['source']);
$profession1 = mysql_escape_string($_POST['profession']);
$proposition1 = mysql_escape_string($_POST['proposition']);	
	 
$sql = "INSERT INTO `utilisateur` ( `nom` , `email` , `source`, `profession`, `proposition` ) VALUES ('$nom1', '$email1', '$source1', '$profession1', '$proposition1')" ;   
$reponse = mysql_query($sql);

echo "*  L'operation de L'ajoute est Terminer avec Succés  *" ;
mysql_close();	


?>
    </p>
      <p align="center"><span class="Style12">Pour Ajouter Un autre Mot </span><a href="Ajout_Utilisateur.php" class="Style12">Cliquer Ici </a></p>
      <p align="center"><span class="Style12">Pour Chercher Un Mot </span><a href="Untitled-10.php" class="Style13">Cliquer Ici</a></p>
      <p class="Style12">
        <?}?>
      </p>
      <p class="Style12">
      <?if ($_POST['nom']=="") {        echo "Desolé, Inserer Votre Nom SVP !";} 
?>
    </p>
    <p class="Style12">
      <?if ($_POST['email']=="") {      echo "Desolé, Inserer Votre Email SVP !";} 
?>
</p>
    <p class="Style12">
      <?if ($_POST['source']=="") {     echo "Desolé, Inserer Votre Source SVP !";} 
?>
    </p>
    <p><span class="Style12">
      <?if ($_POST['profession']=="") { echo "Desolé, Inserer Votre Profession SVP !";} 
 ?>
    </span></p>
    <p><span class="Style12">
      <?if ($_POST['proposition']=="") {echo "Desol&eacute;, Inserer Votre Proposition SVP !";} ?>
    </span></p>
    <p><a href="Ajout_Utilisateur.php" class="Style13">Pr&eacute;cedent</a></p></td>
  </tr>
  <tr>
    <td height="31">&nbsp;</td>
  </tr>
</table>
</body>
</html>
