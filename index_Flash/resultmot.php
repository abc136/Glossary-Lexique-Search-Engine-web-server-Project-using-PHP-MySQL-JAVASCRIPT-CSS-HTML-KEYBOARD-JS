<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?
$d=$_POST['saisie'];
echo $d; echo "<br>";

$link = mysql_connect("localhost", "root", ""); // Connexion à MySQL
	mysql_select_db("bas-lexique"); // Sélection de la base dico
	
	 $charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	 $reponse = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.mot_fr LIKE '$d%'and mot.cle_mot=avoir.cle_mot and avoir.cle_definition=definition.cle_definition"); 
	 
?>
<p>
<textarea name="message" rows="20" cols="75">
 <? while ($donnees = mysql_fetch_array($reponse) )
{ 
 ?> 
 <? echo $donnees['Definition'];  
 }?> 
</textarea> 
</p>
<?	 
 	 mysql_close(); // Déconnexion de MySQL	
?>

</body>
</html>
 


