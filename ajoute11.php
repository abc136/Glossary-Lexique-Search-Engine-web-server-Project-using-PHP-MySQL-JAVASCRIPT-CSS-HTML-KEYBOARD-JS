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
-->
</style></head>

<body>
<p>
  <? $mot_fr=$_POST['mot1']; ?>
  <? $mot_en=$_POST['mot2']; ?>
  <? $mot_ar=$_POST['mot3']; ?>
</p>
<p>
  <?  $dom_fr=$_POST['dom1'];?> 
  <?  $dom_en=$_POST['dom2'];?> 
  <? $dom_ar=$_POST['dom3']; ?>
</p>
<p>
  <?  $sou_domfr=$_POST['sou_dom1']; ?>
  <? $sou_domen=$_POST['sou_dom2']; ?>
  <? $sou_domar=$_POST['sou_dom3']; ?>
</p>
<p>
  <? $rac_fr=$_POST['rac1']; ?>
  <? $rac_en=$_POST['rac2']; ?>
  <? $rac_ar=$_POST['rac3']; ?>
</p>
<p>
  <? $def_fr=$_POST['def1']; ?>
  <? $def_en=$_POST['def2']; ?>
  <? $def_ar=$_POST['def3']; ?>
  <? $source=$_POST['source']; ?>
</p>
<p>&nbsp;</p>
<p>
  <? $link = mysql_connect("localhost", "root", ""); // Connexion à MySQL
 mysql_select_db("bas-lexique");                // Sélection de la base dico
$charset = mysql_client_encoding($link);
mysql_query("SET CHARACTER SET 'utf8'", $link); ?>
</p>
<p>
  <? if ( ($mot_fr=="")&&( $mot_en=="")&&( $mot_ar=="") ) { echo("les champs des mots doit etre ajoutees" ); 
} else { 
	 $reponse = mysql_query("SELECT * FROM mot ");
	 $d='1';
	while ($donnees = mysql_fetch_array($reponse)) { 		  	 
	   if($mot_fr==$donnees['Mot_FR']){ $d='2'; }	   
	}  
if($d!='2')
{ $reponse = mysql_query("INSERT INTO `mot` ( `Cle_mot`,`Mot_FR`, `Mot_EN`,`Mot_AR` ) VALUES ('','$mot_fr','$mot_en','$mot_ar')"); }
	}
	 ?>
  <?
 if ( ($rac_fr=="")&&( $rac_en=="")&&( $rac_ar=="") ) { echo("*" ); 
} else {
$reponse = mysql_query("SELECT * FROM racine");
$d='1';
while ($donnees = mysql_fetch_array($reponse)) {   
if (($rac_fr==$donnees['Rac_FR'])or($rac_ar==$donnees['Rac_AR'])or($rac_en==$donnees['Rac_EN'])) {   $d='2';  }
}  
  if($d=='1'){
   $sql2 = "INSERT INTO `racine` ( `Cle_racine` , `Rac_FR`,`Rac_EN`,`Rac_AR` ) VALUES ('','$rac_fr','$rac_en','$rac_ar')";
   $reponse = mysql_query($sql2); }
   } ?>
  <? //////////////////////////////////////////////////////////////////
 $C_mot=0; $C_rac=0;

$reponse = mysql_query("SELECT * FROM mot WHERE mot.mot_fr LIKE '$mot_fr%'");	
while ($donnees = mysql_fetch_array($reponse)) {   
if ($donnees['Mot_FR']==$mot_fr) { $C_mot=$donnees['Cle_mot']; }
}  
	
$reponse = mysql_query("SELECT * FROM racine WHERE racine.Rac_FR LIKE '$rac_fr%'");	
while ($donnees = mysql_fetch_array($reponse)) {   
 if ($donnees['Rac_FR']==$rac_fr) { $C_rac=$donnees['Cle_racine']; }
}  	

if (($C_mot !=0)and($C_rac!=0)) {
$reponse = mysql_query("INSERT INTO `derive` ( `Cle_mot`,`Cle_racine` ) VALUES ('$C_mot+1','$C_rac+1')"); }

if (($C_mot !=0)and($C_rac==0)) {
$reponse = mysql_query("INSERT INTO `derive` ( `Cle_mot`,`Cle_racine` ) VALUES ('$C_mot+1','')"); }

if (($C_mot ==0)and($C_rac!=0)) {
$reponse = mysql_query("INSERT INTO `derive` ( `Cle_mot`,`Cle_racine` ) VALUES ('','$C_rac+1')"); }
	
//////////////////////////////////////////////////////////////// ?>
</p>
<p>
  <? 
if($reponse){ echo(" A Ete Ajoute  " ); 
}else{ echo("n'est pas  ajoute " ); }	 
mysql_close(); ?>
</p>
</body>
</html>
