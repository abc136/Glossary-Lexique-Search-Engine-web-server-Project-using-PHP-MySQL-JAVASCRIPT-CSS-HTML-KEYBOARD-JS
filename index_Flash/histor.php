<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>قـــاموس عربي</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="file:///C|/Program Files/EasyPHP1-8/www/dictionnaire en ligne/default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #C6CFE7}
.style7 {
	color: #3399FF;
	font-weight: bold;
}
.style15 {
	color: #4F6977
}
.style20 {
	color: #3399FF;
	font-weight: bold;
	font-size: 21px;
}
.c2 {background-color:#FFFFFF;color:blue;font-size:16pt}
.style21 {font-size: 14px}
-->
</style>
<script src="file:///C|/Program Files/EasyPHP1-8/www/dictionnaire en ligne/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<hr />
<div id="page">
	<div id="bg">
		<div id="content">

			<div class="post" style="padding-top: 57px;">
			  <h2 class="style7">&nbsp;</h2>
			  <p class="style7">&nbsp;</p>
			  <h3 class="date">&nbsp;</h3>
              <div class="style3">
<table width="278" height="76" border="0" align="center" bgcolor="#666666" class="style7" >
  <tr>
    <td width="258"  align="center" bgcolor="#FFFFFF" class="style20"><h1 class="style20">&nbsp;
      </h1>
      <h1 class="style20">&nbsp;</h1>
      <h1 class="style20">
        <?
//**********************************************************************************************************************//
// FONCTION qui va lire le fichier XML et le placer dans un tableau ------------> Cette fonction sert de parseur                                                   //
//**********************************************************************************************************************//
function lit_xml($fichier,$item,$champs) {
	// on lit le fichier
	if($chaine = @implode("",@file($fichier))) {
	// on explode sur <item>
	// Dans l'exemple il s'agit de 'profil'
	$tmp = preg_split("/<\/?".$item.">/",$chaine);
	// pour chaque <item> donc tous les profils
	for($i=1;$i<sizeof($tmp)-1;$i+=2)
	// on lit les champs demandés <champ> donc il s'agit de 'id' et 'prenom'
	foreach($champs as $champ) {
	$tmp2 = preg_split("/<\/?".$champ.">/",$tmp[$i]);
	// on ajoute l'élément au tableau
	$tmp3[$i-1][] = @$tmp2[1];
	}
	// et on retourne le tableau dans la fonction
	return $tmp3;
	}
}
//**********************************************************************************************************************//

function remplir_table($table)
{
$xml = lit_xml("dernir_mot.xml","mot",array("orth","cmp"));
 foreach($xml as $row) {
	   $table["mot"][]=$row[0];
	   $table["cmp"][]=$row[1];
	   //echo "<br> le mot :".$row[0];
	   //echo " cmp = ".$row[1];
   }
 return $table;
}
//*******************************************************************************************************************//

$table=array();
$table=remplir_table($table);	
$taille_table=count($table['mot']);

$plus_grand=0;
for($i=0;$i< $taille_table;$i++){
 if($plus_grand<$table["cmp"][$i]){$plus_grand=$table["cmp"][$i];}
 }
 
 //echo "<br> le plus grand compteur est :".$plus_grand;
 
 
 // pour aficher les 10  mots fréquament rechrechés
$nombre=0; 
$deja_afficher=0;
while ($deja_afficher<10){
  for($j=0;$j<$taille_table;$j++){ 
   if($plus_grand==$table["cmp"][$j]) {
      echo "<br>"."<br>".$table["mot"][$j]." : "." تم البحث عنها ".$table["cmp"][$j]."مرة";
	  $deja_afficher++;
	}
   if($deja_afficher==10){break;}
  }
  $plus_grand--;
}

///////////////////////////////////  pour ajouter un mot rechercher existe déja ou pas 




$mot_chercher="nasro463456";  // le mot que l'user va rechercher
$mot_deja_exist=false;
  for($j=0;$j<$taille_table;$j++){ 
   if($mot_chercher==$table["mot"][$j]) {$table["cmp"][$j]=$table["cmp"][$j]+1; $mot_deja_exist=true;}
  }
if($mot_deja_exist==false){$table["mot"][]=$mot_chercher;$table["cmp"][]=1;}  
?>
      </h1>
      <h1 class="style20">&nbsp;</h1>
      <h1 class="style20"><br />
        </h1></td>
  </tr>
</table>
<div align="center"></div>
			  </div>
				<p class="meta">&nbsp;</p>
		  </div>
		  <div class="post">
		    <p align="left" class="meta">&nbsp;</p>

		  </div>
	  </div>
		<!-- end contentn -->
		<!-- end sidebar -->
	</div>
</div>
<!-- end page -->
<hr />
</body>
</html>
