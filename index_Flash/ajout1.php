
<? $mot_fr=$_POST['mot1'];?>
<? $mot_en=$_POST['mot2'];?>
<? $mot_ar=$_POST['mot3'];?>

<? $dom_fr=$_POST['dom1'];?>
<? $dom_en=$_POST['dom2'];?>
<? $dom_ar=$_POST['dom3'];?>

<? $sou_domfr=$_POST['sou_dom1'];?>
<? $sou_domen=$_POST['sou_dom2'];?>
<? $sou_domar=$_POST['sou_dom3'];?>

<? $rac_fr=$_POST['rac1'];?>
<? $rac_en=$_POST['rac2'];?>
<? $rac_ar=$_POST['rac3'];?>

<? $def_fr=$_POST['def1'];?>
<? $def_en=$_POST['def2'];?>
<? $def_ar=$_POST['def3'];?>

<? $source=$_POST['source'];?>

<?	 $link = mysql_connect("localhost", "root", ""); // Connexion à MySQL
     mysql_select_db("bas-lexique");                // Sélection de la base dico
     $charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	 
	/////////////////////////      La liste des mots    ////////////////////////
		



$sql6 = "INSERT INTO `source` ( `Source`,`cle_source`) VALUES ('$source','$c_source')";
$sql5 = "INSERT INTO `definition` ( `Definition`,`cle_source`,`cle_definition` ) VALUES ('$def','$c_source','$c_definition')";
$sql4 = "INSERT INTO `avoir` ( `Cle_mot`,`Cod_langue`,`cle_definition` ) VALUES ('$C_mot','$C_langue','$c_definition')";
$sql7 = "INSERT INTO `contient` ( `Nom_soudomain_FR`, `Cle_mot`) VALUES ('$sou_domfr','$C_mot')";
$sql8 = "INSERT INTO `sousdomaine` (`Nom_soudomain_FR`,`Nom_soudomain_EN`,`Nom_soudomain_AR`,`Nom_domaine_FR` ) VALUES ('$sou_domfr','$sou_domen','$sou_domar','$dom_fr')";
$sql9 = "INSERT INTO `domaine` ( `Nom_domaine_FR`,`Nom_domaine_EN`,`Nom_domaine_AR` ) VALUES ('$dom_fr','$dom_en','$dom_ar')";



if ( ($mot_fr=="")&&( $mot_en=="")&&( $mot_ar=="") ) { echo("les champs des mots doit etre ajoutees" ); 
} else { 
	 $reponse = mysql_query("SELECT * FROM mot ");
	 $d='1';
	while ($donnees = mysql_fetch_array($reponse)) { 		  	 
	   if($mot_fr==$donnees['Mot_FR']){ $d='2'; }	   
	}  
if($d!='2')
{ $reponse = mysql_query("INSERT INTO `mot` ( `Cle_mot`,`Mot_FR`, `Mot_EN`,`Mot_AR` ) VALUES ('$C_mot','$mot_fr','$mot_en','$mot_ar')"); }
	    
	   
	   
	
if (($rac_fr != "")||( $rac_en != "")||( $$rac_ar != "")) {
$reponse = mysql_query("SELECT * FROM racine");
$d='1';
while ($donnees = mysql_fetch_array($reponse)) {   
if($rac_fr==$donnees['Rac_FR']) {$d='2'; }
}  
  if($d=='1'){
   $sql2 = "INSERT INTO `racine` ( `Cle_racine` , `Rac_FR`,`Rac_EN`,`Rac_AR` ) VALUES ('$C_rac','$rac_fr','$rac_en','$rac_ar')";
   $reponse = mysql_query($sql2); }
 
//////////////////////////////////////////////////////////////////
 
$reponse = mysql_query("SELECT * FROM mot WHERE mot.mot_fr LIKE '$mot_fr%'");	

while ($donnees = mysql_fetch_array($reponse)) {   
if ($donnees['Mot_FR']==$mot_fr) { $C_mot=$donnees['Cle_mot']; }
}  
	
$reponse = mysql_query("SELECT * FROM racine WHERE racine.Rac_FR LIKE '$rac_fr%'");	

while ($donnees = mysql_fetch_array($reponse)) {   
 if ($donnees['Rac_FR']==$rac_fr) { $C_rac=$donnees['Cle_racine']; }
}  	

$reponse = mysql_query("INSERT INTO `derive` ( `Cle_mot`,`Cle_racine` ) VALUES ('$C_mot+1','$C_rac+1')");
	
////////////////////////////////////////////////////////////////
}
echo("L'ajoute est termineé !" ) ; 
}



if($reponse){ echo(" a ete ajoute  " ); ?>
<? }else{ echo("n ete pas  ajoute " ); }	 
mysql_close(); 
?>
         