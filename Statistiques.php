<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Statiqtiques</title>
<style type="text/css">
<!--
body {
	background-image: url(index_Image/fond.gif);
	background-repeat: repeat;
}
.style20 {	color: #3399FF;
	font-weight: bold;
	font-size: 21px;
}
.Style10 {	font-size: 36px;
	font-weight: bold;
}
.Style11 {font-size: 24px}
.style5 {font-size: 18px}
.Style22 {
	font-size: 24px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.Style24 {
	font-weight: bold;
	font-size: 25px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
</style></head>

<body>
<p><span class="Style10">
  <?
$link = mysql_connect("localhost", "root", ""); // Connexion  MySQL
mysql_select_db("bas-lexique"); // Slection de la base dico
	
$charset = mysql_client_encoding($link);
mysql_query("SET CHARACTER SET 'utf8'", $link);

$requets =mysql_query("SELECT * FROM statmot ORDER BY `nbmot` DESC");
?>
</span></p>

<div align="center">
  <p class="Style24"><u>Statiques Du Mot </u></p>
  <table width="819" height="211" border="1" bordercolor="#FFFFFF">
    <tr>
      <td width="403" height="55" bordercolor="#000000" bgcolor="#FFFFFF"><span class="Style22">Le Mot</span></td>
      <td width="400" bordercolor="#000000" bgcolor="#FFFFFF"><span class="Style22">Nombre D'accés </span></td>
    </tr>
    <tr>
      <td height="22" colspan="2" bordercolor="#000000"><span class="Style22"><span class="Style11">
        <? $c1=0;  $c2=0;  
while ($donnees = mysql_fetch_array($requets)) { ?>
      </span></span></td>
    </tr>
    <tr class="Style22">
      <td height="61" bordercolor="#000000"><span class="style5">
        <? 
$requetsm =mysql_query("SELECT * FROM mot WHERE mot.Cle_mot = $donnees[0] "); 
while ($donneesm = mysql_fetch_array($requetsm)) { 
echo $donneesm['Mot_FR']; echo" , "; echo $donneesm['Mot_EN']; echo" , "; echo $donneesm['Mot_AR']; $c1=$c1+1;
}?>
      </span></td>
      <td bordercolor="#000000"><span class="style5">
        <? 
echo $donnees['nbmot'];  $c2=$c2+$donnees['nbmot']; } ?>
      </span></td>
    </tr>
    <tr class="Style22">
      <td height="61" bordercolor="#000000"><span class="style5">
        &gt; Le Nombre du Mot Recherché : <? 
echo $c1;?>
      </span></td>
      <td bordercolor="#000000" class="style5">
        &gt; Le Nombre d'accés Totale : <? 
echo $c2;?>      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr align="center" size="5" class="Style22" />
  <p><u class="Style24">Statiques Du Sous-Domaine </u><span class="Style10">
    <?
$requets1 =mysql_query("SELECT * FROM statsoudomaine ORDER BY `nbsoudomaine` DESC");
?>
  </span></p>
  <table width="819" height="211" border="1" bordercolor="#FFFFFF">
    <tr>
      <td width="403" height="55" bordercolor="#000000" bgcolor="#FFFFFF"><span class="Style22">Le Sous-Domaine </span></td>
      <td width="400" bordercolor="#000000" bgcolor="#FFFFFF"><span class="Style22">Nombre D'accés </span></td>
    </tr>
    <tr>
      <td height="22" colspan="2" bordercolor="#000000"><span class="Style22"><span class="Style11">
        <? $c1=0;  $c2=0;  
while ($donnees1 = mysql_fetch_array($requets1)) { ?>
      </span></span></td>
    </tr>
    <tr class="Style22">
      <td height="61" bordercolor="#000000"><span class="style5">
        <? 
echo $donnees1['soudomain'];  $c1=$c1+1; ?>
      </span></td>
      <td bordercolor="#000000"><span class="style5">
        <? 
echo $donnees1['nbsoudomaine'];   $c2=$c2+$donnees1['nbsoudomaine'];  } ?>
      </span></td>
    </tr>
    <tr class="Style22">
      <td height="61" bordercolor="#000000"><span class="style5">&gt; Le Nombre du Sous-Domaine Rech :
          <? 
echo $c1;?>
      </span></td>
      <td bordercolor="#000000"><span class="style5">&gt; Le Nombre d'accés Totale :
          <? 
echo $c2;?>
      </span></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
  <div align="center"></div><p><span class="Style11">
  <?	 mysql_close(); // Dconnexion de MySQL	 ?>
</span></p>
</body>
</html>
