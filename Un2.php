<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RESULTATS DE LA RECHERCHE </title>
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
.Style10 {
	font-size: 36px;
	font-weight: bold;
}
.Style11 {font-size: 24px}
.Style12 {font-size: 22px}
.Style13 {color: #000000}
.Style14 {font-size: 22px; color: #000000; }
.Style15 {font-size: 30px; color: #000000; font-weight: bold; }
.Style23 {color: #000000; font-family: "Segoe UI"; }
.Style25 {font-family: "Segoe UI"}
.Style26 {font-size: 22px; color: #000000; font-family: "Segoe UI"; }
.Style30 {font-size: 18px; font-family: "Segoe Print"; }
.Style33 {font-family: "Segoe Print"}
.Style34 {
	color: #000000;
	font-size: 25px;
	font-weight: bold;
}
.Style37 {color: #0066FF}
.Style38 {color: #0000FF}
-->
</style>
</head>

<body>
<div align="center" class="Style11">
  <table width="955" height="269" border="0" align="center" bordercolor="#FFFFFF"  >
    <tr>
      <td width="949" height="75"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="style5 style3 footer"><table width="1233" height="766" border="0" align="left">
            <tr>
              <td width="1243" height="689" align="center" valign="top"><p align="left"><span class="Style10 Style13">
                <? 
$d=$_POST['Saiser'];
if ($link = mysql_connect("localhost", "root", "")) {
if( $id_db = mysql_select_db("bas-lexique") ) {
if ($d != "") {
$charset = mysql_client_encoding($link);
mysql_query("SET CHARACTER SET 'utf8'", $link);

$requet =mysql_query("SELECT Cle_mot FROM mot WHERE mot.Mot_FR = '$d' or mot.Mot_AR = '$d' or mot.Mot_EN = '$d' ");

while ($donneesq = mysql_fetch_array($requet) ){
$bol=2;

$requets =mysql_query("SELECT Cle_mot FROM statmot ");
while ($donneess = mysql_fetch_array($requets) ){
if ($donneesq[0]==$donneess['Cle_mot']) {  $bol=1; } }

if ($bol==1) {$requet1 =mysql_query("UPDATE statmot SET nbmot=nbmot+1 WHERE statmot.Cle_mot = '$donneesq[0]' ");}
else { $requet1 =mysql_query("INSERT INTO `statmot` ( `Cle_mot` , `nbmot` ) VALUES ('$donneesq[0]', '1')"); }

}  
}
} else { echo "<br>"; echo "<br>";  die("***  Echec de connexion à la base ***"); }
mysql_close();     // Dconnexion de MySQL	
} else {  echo "<br>";  echo "<br>";   die(" *** Echec de connexion au serveur de base de données ***"); }
?>
              </span></p>
                <p align="left"><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13"><span class="post" style="padding-top: 57px;"><span class="post" style="padding-top: 57px;"><u>Resultat De Recherche Du Mot</u> :</span></span></span></span></span><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13"> <? 
$d=$_POST['Saiser'];
$f=$_POST['select'];  $ff=$f;
echo $d; echo "<br>";

if ($link = mysql_connect("localhost", "root", "")) {
 if( $id_db = mysql_select_db("bas-lexique") ) {

$charset = mysql_client_encoding($link);
  mysql_query("SET CHARACTER SET 'utf8'", $link);
  
  if ($requets =mysql_query("SELECT * FROM mot WHERE mot.Mot_FR = '$d' or mot.Mot_AR = '$d' or mot.Mot_EN = '$d' ")) { $cmpt=mysql_num_rows($requets); }

?></span></span></span></p>
                <p>&nbsp;</p>
                <p align="left">
                  <?   
if ( ( $f=="2")and($d<>"")and($cmpt >0) ){ $b=2;

	?>
                </p>
                <table width="1154" height="416" border="0" align="center"  >
                  <tr>
                    <td width="166" height="99"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u><span class="Style23">Le Mot</span></u><span class="Style23">:</span> </strong></p></td>
                    <td width="196"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$requet ="SELECT * FROM mot WHERE mot.Mot_FR = '$d' ";

?>
                      </span></span></span></p>
                        <p>
                          <? if($result = mysql_query($requet)) {
if ($donnees11 = mysql_fetch_array($result)) { ?>
                        </p>
                    <p> <? 
echo $donnees11['Mot_FR'];    ?> </p></td>
                    <td width="119"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p class="Style25"><strong><u>Racine</u></strong>: </p></td>
                    <td width="93"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_FR FROM mot,derive,racine  WHERE mot.Mot_FR = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span> </p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                    <p> <? echo $donneesR['Rac_FR'];   } ?> </p></td>
                    <td width="45"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td width="133"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p class="Style25 Style13"><strong><u>Concept</u></strong> : </p></td>
                    <td width="372"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_FR = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=1"); 
	?>
                        <p>
                          <? while ($donnees = mysql_fetch_array($reponse)) { ?>
                        </p>
                      <p><? echo $donnees['Definition']; $Def=$donnees['Definition']; 
 ?></p>
                      <p>
                          <?
	$reponseS1 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition = '$Def' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS1 = mysql_fetch_array($reponseS1)) { ?>
                      </p>
                      <p><strong><u><span class="Style30">Source</span></u><span class="Style30">:</span></strong>
                            <?   echo $donneesS1['Source']; 
}
} ?>
                      </p>
                    <p>&nbsp;</p></td>
                  </tr>
                  <tr>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong> <u><span class="Style25">The Word</span></u><span class="Style25">:</span></strong></p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?  echo $donnees11['Mot_EN'];  ?></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p class="Style25"><strong><u>Root</u></strong>: </p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_EN FROM mot,derive,racine  WHERE mot.Mot_FR = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span> </p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                      <p> <? echo $donneesR['Rac_EN'];   } ?> </p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p class="Style25"><strong><u>Concept</u></strong> : </p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse1 = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_FR = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=3"); 
	?>
                        <p>
                          <? while ($donnees1 = mysql_fetch_array($reponse1)) { ?>
                        </p>
                      <p><? echo $donnees1['Definition']; $Def1=$donnees1['Definition'];  ?></p>
                      <p>
                          <?
	$reponseS2 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition = '$Def1' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS2 = mysql_fetch_array($reponseS2)) { ?>
                      </p>
                      <p><strong><u><span class="Style30">Source</span></u><span class="Style30">:</span></strong>
                            <?   echo $donneesS2['Source']; 
}
} ?>
                      </p>
                      <p>&nbsp;</p></td>
                  </tr>
                  <tr>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><strong><u><span class="Style25">الكلمة</span></u><span class="Style25">:</span> </strong></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?  echo $donnees11['Mot_AR'];  }
} else {  echo " Erreur de requête de base de données.";  } ?></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p class="Style25"><strong><u>الجذر</u></strong>:</p></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_AR FROM mot,derive,racine  WHERE mot.Mot_FR = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span></p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                      <p> <? echo $donneesR['Rac_AR'];   } ?> </p></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style26"><strong><u>المفهوم</u></strong>:</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse2 = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_FR = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=2"); 
	?>
                        <p>
                          <?
	 while ($donnees2 = mysql_fetch_array($reponse2)) { ?>
                        </p>
                      <p><? echo $donnees2['Definition'];  $Def2=$donnees2['Definition'];  ?></p>
                      <p>
                          <?
	$reponseS3 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition='$Def2' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS3 = mysql_fetch_array($reponseS3)) { ?>
                      </p>
                      <p><strong><u><span class="Style33">المصدر</span></u><span class="Style30">:</span></strong>
                            <?  echo $donneesS3['Source']; 
}
} ?>
                      </p>
                      <p>&nbsp;</p></td>
                  </tr>
                  <tr>
                    <td height="46"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p></td>
                    <td height="46" colspan="4"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p>
                        <p>&nbsp;</p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                  </tr>
                </table>
                <p align="left">
                  <? 
} else { if (( $f=="1")and($d<>"")and($cmpt >0)  ) {
	?>
                </p>
                <table width="1155" height="416" border="0" align="center"  >
                  <tr>
                    <td width="141" height="99"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>The Word</u>:</strong></p></td>
                    <td width="117"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
if($result = mysql_query(" SELECT * FROM mot WHERE mot.Mot_EN = '$d' ")) {
?>
                      </span></span></span></p>
                        <p>
                          <? while ($donnees11 = mysql_fetch_array($result)) { ?>
                        </p>
                      <p> <? echo $donnees11['Mot_EN'];    ?> </p></td>
                    <td width="83"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>Root</u></strong>:</p></td>
                    <td width="67"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_EN FROM mot,derive,racine  WHERE mot.Mot_EN = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span> </p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                      <p> <? echo $donneesR['Rac_EN'];   } ?> </p></td>
                    <td width="32"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td width="33"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p></td>
                    <td width="105"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>Concept</u></strong> : </p></td>
                    <td width="253"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_EN = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=3"); 
	?>
                        <p>
                          <? while ($donnees = mysql_fetch_array($reponse)) { ?>
                        </p>
                      <p><? echo $donnees['Definition']; $Def=$donnees['Definition']; 
 ?></p>
                      <p>
                          <?
	$reponseS1 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition = '$Def' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS1 = mysql_fetch_array($reponseS1)) { ?>
                      </p>
                      <p><strong><u>Source</u>:</strong>
                            <?   echo $donneesS1['Source']; 
}
} ?>
                      </p></td>
                  </tr>
                  <tr>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>Le Mot</u>:</strong></p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?  echo $donnees11['Mot_FR'];  ?></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>Racine</u></strong>:</p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_FR FROM mot,derive,racine  WHERE mot.Mot_EN = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span> </p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                      <p><? echo $donneesR['Rac_FR'];   } ?></p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>Concept</u></strong> : </p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse1 = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_EN = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=1"); 
	?>
                        <p>
                          <? while ($donnees1 = mysql_fetch_array($reponse1)) { ?>
                        </p>
                      <p><? echo $donnees1['Definition']; $Def1=$donnees1['Definition'];  ?></p>
                      <p>
                          <?
	$reponseS2 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition = '$Def1' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS2 = mysql_fetch_array($reponseS2)) { ?>
                      </p>
                      <p><strong><u>Source</u>:</strong>
                            <?   echo $donneesS2['Source']; 
}
} ?>
                      </p></td>
                  </tr>
                  <tr>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><strong><u>الكلمة</u>: </strong></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?   echo $donnees11['Mot_AR'];    }
} else {
	echo " Erreur de requête de base de données.";
}
 ?></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>الجذر</u></strong>:</p></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_AR FROM mot,derive,racine  WHERE mot.Mot_EN = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span></p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                      <p> <? echo $donneesR['Rac_AR'];   } ?> </p></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><strong><u>المفهوم</u></strong>:</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse2 = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_EN = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=2"); 
	?>
                        <p>
                          <?
	 while ($donnees2 = mysql_fetch_array($reponse2)) { ?>
                        </p>
                      <p><? echo $donnees2['Definition'];  $Def2=$donnees2['Definition'];  ?></p>
                      <p>
                          <?
	$reponseS3 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition = '$Def2' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS3 = mysql_fetch_array($reponseS3)) { ?>
                      </p>
                      <p><strong><u>Source</u>:</strong>
                            <?  echo $donneesS3['Source']; 
}
} ?>
                      </p></td>
                  </tr>
                  <tr>
                    <td height="46"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p></td>
                    <td height="46" colspan="5"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p>
                        <p>&nbsp;</p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <p align="left">
                  <? } else {
if (( $f=="5")and($d<>"")and($cmpt >0)  ) { ?>
                </p>
                <table width="1155" height="416" border="0" align="center"  >
                  <tr>
                    <td width="141" height="99"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>الكلمة</u>:</strong></p></td>
                    <td width="117"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
if($result = mysql_query(" SELECT * FROM mot WHERE mot.Mot_AR = '$d' ")) {
?>
                      </span></span></span></p>
                        <p>
                          <? while ($donnees11 = mysql_fetch_array($result)) { ?>
                        </p>
                      <p> <? echo $donnees11['Mot_AR'];    ?> </p></td>
                    <td width="83"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>الجذر</u></strong>:</p></td>
                    <td width="67"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_AR FROM mot,derive,racine  WHERE mot.Mot_AR = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span> </p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                      <p> <? echo $donneesR['Rac_AR'];   } ?> </p></td>
                    <td width="32"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td width="33"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p></td>
                    <td width="105"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>المفهوم</u></strong>:</p></td>
                    <td width="253"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_AR = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=2"); 
	?>
                        <p>
                          <? while ($donnees = mysql_fetch_array($reponse)) { ?>
                        </p>
                      <p><? echo $donnees['Definition']; $Def=$donnees['Definition']; 
 ?></p>
                      <p>
                          <?
	$reponseS1 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition = '$Def' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS1 = mysql_fetch_array($reponseS1)) { ?>
                      </p>
                      <p><strong><u>Source</u>:</strong>
                            <?   echo $donneesS1['Source']; 
}
} ?>
                      </p></td>
                  </tr>
                  <tr>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong> <u>The Word</u>:</strong></p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?  echo $donnees11['Mot_EN'];  ?></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>Root</u></strong>: </p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_EN FROM mot,derive,racine  WHERE mot.Mot_AR = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span> </p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                      <p> <? echo $donneesR['Rac_EN'];   } ?> </p></td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td height="98"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>Concept</u></strong> : </p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse1 = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_AR = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=3"); 
	?>
                        <p>
                          <? while ($donnees1 = mysql_fetch_array($reponse1)) { ?>
                        </p>
                      <p><? echo $donnees1['Definition']; $Def1=$donnees1['Definition'];  ?></p>
                      <p>
                          <?
	$reponseS2 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition = '$Def1' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS2 = mysql_fetch_array($reponseS2)) { ?>
                      </p>
                      <p><strong><u>Source</u>:</strong>
                            <?   echo $donneesS2['Source']; 
}
} ?>
                      </p></td>
                  </tr>
                  <tr>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><strong><u>Le Mot</u>:</strong></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?   echo $donnees11['Mot_FR'];    }
} else {
	echo " Erreur de requête de base de données.";
}
 ?></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><strong><u>Racine</u></strong>:</p></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p><span class="post" style="padding-top: 57px;"><span class="Style12"><span class="Style10 Style13">
                        <? 
$reponseR = mysql_query("SELECT Rac_FR FROM mot,derive,racine  WHERE mot.Mot_AR = '$d' and mot.Cle_mot=derive.Cle_mot and derive.Cle_racine=racine.Cle_racine");
?>
                      </span></span></span></p>
                        <p>
                          <? while ($donneesR = mysql_fetch_array($reponseR)) { ?>
                        </p>
                      <p> <? echo $donneesR['Rac_FR'];   } ?> </p></td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td height="94"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><strong><u>Concept</u></strong> :</td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><?
	$reponse2 = mysql_query("SELECT * FROM mot,avoir,definition WHERE mot.Mot_AR = '$d' and mot.Cle_mot=avoir.Cle_mot and avoir.cle_definition=definition.cle_definition and avoir.Cod_langue=1"); 
	?>
                        <p>
                          <?
	 while ($donnees2 = mysql_fetch_array($reponse2)) { ?>
                        </p>
                      <p><? echo $donnees2['Definition'];  $Def2=$donnees2['Definition'];  ?></p>
                      <p>
                          <?
	$reponseS3 = mysql_query("SELECT DISTINCT Source FROM definition,source WHERE definition.Definition = '$Def2' and definition.cle_source=source.cle_source "); 
	?>
                      </p>
                      <p>
                          <? while ($donneesS3 = mysql_fetch_array($reponseS3)) { ?>
                      </p>
                      <p><strong><u>Source</u>:</strong>
                            <?  echo $donneesS3['Source']; 
}
} ?>
                      </p></td>
                  </tr>
                  <tr>
                    <td height="46"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p></td>
                    <td height="46" colspan="5"  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14"><p>&nbsp;</p>
                        <p>&nbsp;</p></td>
                    <td  align="left" valign="top" bordercolor="#000000" bgcolor="#CDAE46" class="Style14">&nbsp;</td>
                  </tr>
                </table>
                <p align="left">
                  <? }else{
if  ( ($cmpt==0)and($d<>"") ) {
if ($f==2) {$requet1 =mysql_query("INSERT INTO `motrech` ( `mot`,`Langue`) VALUES ('$d','Français')");}
if ($f==1) {$requet1 =mysql_query("INSERT INTO `motrech` ( `mot`,`Langue`) VALUES ('$d','Inglish')");}
if ($f==5) {$requet1 =mysql_query("INSERT INTO `motrech` ( `mot`,`Langue`) VALUES ('$d','اللغة العربية')");}





?>
                </p>
                <table width="605" height="104" border="5" bordercolor="#000000" bgcolor="#CDAE46">
                  <tr>
                    <td width="595" bordercolor="#FFFFFF"><p align="center" class="Style34"><span class="Style37">**</span> Le Mot N'existe Pas <span class="Style37">**</span> </p>
                      <table width="527">
                        <tr>
                          <td width="503" align="left"><span class="Style34">
                            <? 
if ($ff==2) {
if ($reponse = mysql_query("SELECT Mot_FR FROM `mot` WHERE `Mot_FR` LIKE '%$d%' ORDER BY `Mot_FR` ASC  ") ){ echo "Voici des Mots Semblable : ";  echo "<br>"; }
echo "<br>";
while ($donnees = mysql_fetch_array($reponse) ) {
echo "> "; echo $donnees['Mot_FR']; echo "<br>";
}
}
if ($ff==1) {
if ($reponse = mysql_query("SELECT Mot_EN FROM `mot` WHERE `Mot_EN` LIKE '%$d%' ORDER BY `Mot_EN` ASC  ") ){ echo "Voici des Mots Semblable : ";  echo "<br>"; }
echo "<br>";
while ($donnees = mysql_fetch_array($reponse) ) {
echo "> "; echo $donnees['Mot_EN']; echo "<br>";
}
}	
if ($ff==5) {
if ($reponse = mysql_query("SELECT Mot_AR FROM `mot` WHERE `Mot_AR` LIKE '%$d%' ORDER BY `Mot_AR` ASC  ") ){ echo "Voici des Mots Semblable : ";  echo "<br>"; }
echo "<br>";
while ($donnees = mysql_fetch_array($reponse) ) {
echo "> "; echo $donnees['Mot_AR']; echo "<br>";
}
}								
 
 
?>
                          </span></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
                <p align="center" class="Style34">&nbsp;</p>
                <p align="center" class="Style34">&nbsp;</p>
                <p align="left">
                  <? }else{
 ?>
                </p>
                <table width="605" height="104" border="5" bordercolor="#000000" bgcolor="#CDAE46">
                  <tr>
                    <td width="595" valign="top" bordercolor="#FFFFFF"><p align="center" class="Style15"><span class="Style38">**</span> Entrer Le Mot SVP <span class="Style38">**</span></p>
                      <p align="center" class="Style15"><span class="Style38">**</span> Enter the word <span class="Style38">**</span></p>
                      <p align="center" class="Style15"><span class="Style38">**</span> الرجاء ادخال الكلمة <span class="Style38">**</span></p>                      </td>
                  </tr>
                </table>
                <p align="left">
                  <? } } }
}  ?>
                  <? } else { echo "<br>"; echo "<br>";  die("***  Echec de connexion à la base ***"); }

mysql_close();     // Dconnexion de MySQL	

} else {  echo "<br>";  echo "<br>";   die(" *** Echec de connexion au serveur de base de données ***"); }
 ?>
                </p>
              </td>
            </tr>
      </table>      </td>
    </tr>
  </table>
  </div>
<div align="justify" class="Style12">
  <p><a href="Untitled-7.php" class="Style10">Précedent</a></p>
</div></body>
</html>
