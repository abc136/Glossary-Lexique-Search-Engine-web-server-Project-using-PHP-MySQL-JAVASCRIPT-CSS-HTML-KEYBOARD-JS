<html>
<head>
<title>       exemple du cour PHP</title>
</head>
<body>
<center><font face="Lucidat" size="25">Exemple du cour de PHP : formulaire en php et
MySQL</font></center>
<br><br>
<?
// formulaire HTML avec passage de variable et insertion dans une base MySQL
// on utilise SWITCH pour soit enregistrer ou voir les informations d'un utilisateur
// il y a donc 2 formulaires sur la m�me page qui s'affichent selon le choix de l'utilisateur
// on utilise 2 liens HTML pour faire notre choix, mais on pouvait �crire directement
// dans Internet Explorer ceci :
// http://localhost/prj/cours_php/formulaire.php?mon_choix=afficher
// pour plus d'informations : Saint-Moulin Beno�t - bsm@zenair.be
/* Table � cr�er dans MySQL
copier la requ�te SQL ci-dessous sans les '//' et coller dans phpmyadmin avec 'Ex�cuter'
CREATE TABLE visites (
id tinyint(4) NOT NULL auto_increment,
nom varchar(35) NOT NULL default '',
prenom varchar(35) NOT NULL default '',
email varchar(35) NOT NULL default '',
PRIMARY KEY (id),
KEY id (id)
) */
// Configuration de MySQL.
$host = "xxx"; // le serveur MySQL ex : localhost ou sql.monsite.com
$user = "xxx"; // le nom de l'utilisateur
$pass = "xxx"; // le mot de passe
$db = "xxx"; // le nom de la base
$ma_table = "visites"; // le nom de la table dans une variable
// connexion MySQL pour toutes les requ�tes dans la page
mysql_connect($host, $user, $pass);
mysql_select_db($db);
// une fonction jscript si une erreur est d�tect�e dans les v�rifications IF(empty...)
function fin() {
?>
<center><a href="javascript:history.go(-1)">Revenir en arri�re</a></center>
<?
exit();
}
switch($mon_choix){ // choix des diff�rentes proc�dures - conditions
case"nouv_utilisateur": // choix de l'op�ration � faire...
if($envoyer){ // la valeur d'envoi du formulaire est 'envoyer' on revient ici
// v�rification : si les champs nom et pr�nom sont bien remplis
if(empty($nom)){
echo "<center><font face=\"Arial\" size=\"2\" color=\"#FF0000\"><b>Erreur : </b></font>";
echo "<font face=\"Arial\" size=\"2\">entrez votre nom.<br><br></font></center>";
fin();
}
if(empty($prenom)){
echo "<center><font face=\"Arial\" size=\"2\" color=\"#FF0000\"><b>Erreur : </b></font>";
echo "<font face=\"Arial\" size=\"2\">entrez votre pr�nom.<br><br></font></center>";
fin();
}
// ici ont v�rifie si l'�mail est bon, petit bonus ;)
if(!ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.'@'.'[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.'[-
!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$',$email)){
echo "<center><font face=\"Arial\" size=\"2\" color=\"#FF0000\"><b>Erreur : </b></font>";
echo "<font face=\"Arial\" size=\"2\">e-mail incorrect.<br><br></font></center>";
fin();
}
// conversion des donn�es pour les ins�rer de fa�on correcte dans la table MySQL
$nom = AddSlashes($nom);
$prenom = AddSlashes($prenom);
$email = AddSlashes($email);
// insertion des donn�es dans la table
$requete="INSERT INTO $ma_table(id,nom,prenom,email) VALUES('','$nom','$prenom','$email')";
// si la requ�te est bien ex�cut�e, alors on affiche un message de confirmation
if(mysql_query($requete))
echo "<br>";
echo "<center>
<font face=\"Arial\" size=\"2\">F�licitations $nom $prenom! votre inscription � �t� enregistr�e avec
succ�s.<br>
</center>";
echo "<br>";
// fermeture de la connexion MySQL pour lib�rer les ressources
mysql_close();
} else {
// fermeture du code PHP pour ins�rer le formulaire HTML
?>
<br>
<center><font face="Arial" size="2"><b>Enregistrez-vous :</b></font><br>
<font face="Arial" size="1">Remplissez tous les champs du formulaire.</font></center>
<center>
<form name="nouv_utilisateur" action="formulaire.php" method="POST">
<table align="center" width="50%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td><font face="Arial" size="2">&nbsp;Nom</font></td>
<td><input type="text" name="nom" value="<? echo $nom ?>" maxlength="35">
</td>
</tr>
<tr>
<td><font face="Arial" size="2">&nbsp;Pr�nom</font></td>
<td><input type="text" name="prenom" value="<? echo $prenom ?>" maxlength="35">
</td>
</tr>
<tr>
<td><font face="Arial" size="2">&nbsp;E-mail</font></td>
<td><input type="text" name="email" value="<? echo $email ?>" maxlength="35">
</td>
</tr>
<tr>
<td><input type="reset" value="Effacer">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="envoyer" value="Envoyer"></td>
</tr>
<input type="hidden" name="mon_choix" value="nouv_utilisateur">
</table>
</form>
</center>
<? // Ouverture du code PHP pour continuer le code
}
break;
// 2eme choix du switch : afficher les donn�es selon un e-mail
case"afficher":
if ($recup_info) {
// ici ont verifie si l'e-mail est bon, petit bonus ;)
if(!ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.'@'.'[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.'[
!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$',$email)){
echo "<center><font face=\"Arial\" size=\"2\" color=\"#FF0000\"><b>Erreur : </b></font>";
echo "<font face=\"Arial\" size=\"2\">e-mail incorrect.<br><br></font></center>";
fin();
}
$requete = "SELECT * FROM $ma_table WHERE email='$email'";
$resultat = mysql_query($requete);
$verif = mysql_fetch_array($resultat);
if ($verif[0] != 0) {
$requete = "SELECT * from $ma_table WHERE email='$email'";
$resultat = mysql_query($requete);
$val = mysql_fetch_array($resultat);
$prenom = $val["prenom"];
$nom = $val["nom"];
echo "<center><font face=\"Arial\" size=\"2\" color=\"#FF0000\"><b>Bonjour !</b>
<br><br></font>";
echo "<font face=\"Arial\" size=\"2\">Votre nom : $nom<br><br></font>";
echo "<font face=\"Arial\" size=\"2\">Votre pr�nom : $prenom<br><br></font></center>";
mysql_close();
} else {
echo "<center><font face=\"Arial\" size=\"2\" color=\"#FF0000\"><b>Erreur : </b></font>";
echo "<font face=\"Arial\" size=\"2\">Votre e-mail est incorrect.<br><br></font></center>";
fin();
}
} else {
?>
<br>
<center><font face="Arial" size="2"><b>Voir les informations :</b></font><br>
<font face="Arial" size="1">Inscrivez votre e-mail.</font></center>
<center>
<form name="afficher_utilisateur" action="formulaire.php" method="POST">
<table align="center" width="50%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td><center><font face="Arial" size="2">&nbsp;E-mail</font>
<input type="text" name="email" value="<? echo $email ?>" maxlength="35"></center></td>
</tr>
<tr>
<td><center><input type="reset" value="Effacer">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="recup_info" value="Envoyer"></center></td>
</tr>
<input type="hidden" name="mon_choix" value="afficher">
</table>
</form>
</center>
<?
}
break;
case"lister":
// affiche le nombre d'entr�e dans la table MySQL
$requete = "SELECT * FROM $ma_table";
$resultat = mysql_query($requete);
$nombre = mysql_num_rows($resultat);
echo "<center><font face=\"Arial\" size=\"2\">Nombre total d'utilisateurs enregistr�s :
<b>$nombre</b></font></center><br>";
// affiche les noms par ordre A ->Z dans une table HTML
$requete = "SELECT id,nom,prenom,email FROM $ma_table order by nom";
$resultat = mysql_query($requete);
echo "<center>";
echo "<TABLE width=380 border=0 cellspacing=1 cellpadding=1>\n";
echo "<TR bgcolor=\"#eeeeee\">\n";
echo "<td ALIGN=\"center\" width=30>Num�ro</td>\n";
echo "<td ALIGN=\"center\" width=150>Nom</td>\n";
echo "<td ALIGN=\"center\" width=100>Prenom</td>\n";
echo "<td ALIGN=\"center\" width=100>Email</td>\n";
// utilisation de la boucle while pour afficher tout le contenu de la table
// stockage des r�sultats dans un tableau ARRAY
while($val_liste = mysql_fetch_array($resultat)) {
$id = $val_liste[0];
$nom = $val_liste[1];
$prenom = $val_liste[2];
$email = $val_liste[3];
echo "<TR>";
echo "<TD ALIGN=\"left\"><font face=arial size=2 >".$id."&nbsp</font></TD>";
echo "<TD ALIGN=\"center\"><font face=arial size=2 >".$nom."&nbsp</font></TD>";
echo "<TD ALIGN=\"center\"><font face=arial size=2 >".$prenom."&nbsp</font></TD>";
echo "<TD ALIGN=\"center\"><font face=arial size=2 >
<a href=\"mailto:$email\">$email</a>&nbsp</font></TD>";
echo "</TR>\n";
}
echo "</TABLE>\n";
echo "</center>";
echo "<br>";
}
?>
<br>
<center>
<a href="formulaire.php?mon_choix=nouv_utilisateur">Ajouter un utilisateur</a>
<br><br>
<a href="formulaire.php?mon_choix=afficher">Voir les informations d'un utilisateur</a>
<br><br>
<a href="formulaire.php?mon_choix=lister">Lister le contenu de la table</a>
</center>
</body>
</html>