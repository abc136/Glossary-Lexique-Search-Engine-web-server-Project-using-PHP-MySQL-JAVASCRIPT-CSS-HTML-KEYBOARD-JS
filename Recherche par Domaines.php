<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
<style type="text/css">
<!--
.Style2 {
	color: #9933FF;
	font-weight: bold;
	font-size: 22px;
	height: 50px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
body {
	background-image: url(index_Image/fond.gif);
	background-repeat: repeat;
}
a:link {
	color: #0000FF;
	text-decoration: underline;
}
a:visited {
	text-decoration: underline;
	color: #0000FF;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: underline;
	color: #0000FF;
}
.Style3 {
	font-size: 20px;
	color: #000000;
}
.Style6 {
	color: #000000;
	font-size: 36px;
}
.Style7 {font-size: 24px}
.style12 {	color: #3399FF;
	font-weight: bold;
	font-size: 17px;
}
.Style75 {font-size: 40px}
.Style78 {
	font-size: 20px;
	font-weight: bold;
}
.Style80 {font-size: 30px; font-weight: bold; }
.Style83 {font-family: "Segoe UI"}
.Style85 {
	font-size: 35px;
	font-family: "Segoe UI";
	font-weight: bold;
}
.Style86 {font-size: 30px}
-->
</style>
</head>

<body>
<table width="1021" height="780" border="0" cellpadding="5" cellspacing="4" summary="&#1606;&#1578;&#1604;&#1575;&#1578;&#1576;&#1604;&#1575;&#1578;&#1604;&#1576;">
  <tr>
    <th width="104" height="71" scope="row">&nbsp;</th>
    <td width="841" class="Style2"><h2 class="Style3"><font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" width="17" height="17" 
          border="0" /></font>  <span class="Style75">La m&eacute;thode de recherche est :</span> </h2>
      <table width="355" height="52" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="355" align="center" scope="row"><p><font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" alt="sd" width="17" height="17" 
          border="0" /></font> <span class="Style6">Par Domaine</span> </p></th>
        </tr>
    </table>    </td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <th height="203" scope="row">&nbsp;</th>
    <td align="left" valign="top" class="Style3"><form id="form1" name="form1" method="post" action="Resutat-Domaine.php">
      <table width="812" height="551" border="0">
        <tr>
          <td height="467" colspan="3" align="center"><p>&nbsp;</p>
            <table width="795" border="1" bordercolor="#000000">
              <tr>
                <td width="785" align="left" bordercolor="#000000" bgcolor="#00CCCC"> <span class="Style80"><span class="Style83">Affichage De Toute Les Domaines :</span> 
                  <?$dom=array(array("fr"=>'',"ar"=>'',"en"=>''));?>
                </span></td>
              </tr>
            </table>
            <table width="793" height="101" border="2" bordercolor="#000000">
              <tr>
                <td width="283" height="36" align="center" valign="top" bgcolor="#6699FF"><span class="Style78">Le Domaines En Français <span class="Style86">^</span></span></td>
                <td width="240" align="center" valign="top" bgcolor="#6699FF"><strong>المجال في اللغة العربية </strong></td>
                <td width="246" align="center" valign="top" bgcolor="#6699FF"><span class="Style78">Domains In English</span></td>
                <?
$link = mysql_connect("localhost", "root", ""); // Connexion  MySQL
	mysql_select_db("bas-lexique"); // Slection de la base dico
	
	$charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	$reponse = mysql_query("SELECT * FROM domaine ORDER BY `Nom_domaine_FR` ASC");  
	 
	
 while ($donnees = mysql_fetch_array($reponse) )
{
?>
              </tr>
              <tr>
                <?$compt=count($dom);?>
                <p>
                  <?$compt++;?>
                  <?$dom[$compt]['fr']=$donnees['Nom_domaine_FR'];?>
                  <?$dom[$compt]['ar']=$donnees['Nom_domaine_AR'];?>
                  <?$dom[$compt]['en']=$donnees['Nom_domaine_EN'];?>
                </p>
                <td height="31" valign="top"><?echo$dom[$compt]['fr'];?></td>
                <td valign="top"><?echo$dom[$compt]['ar'];?></td>
                <td valign="top"><?echo$dom[$compt]['en'];?></td>
                <?
}

	 
	 mysql_close(); // Dconnexion de MySQL

	
?>
              </tr>
            </table>
            <p>
              <label></label>
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p></td>
          </tr>
        <tr>
          <td width="448" height="24" align="right" valign="middle"><div align="center">
            <p class="Style7"><span class="Style85">&gt; Choisir Un Domaine:</span></p>
            </div></td>
          <td width="119" valign="middle"><span class="Style7">
            <select name="methode" class="Style7" id="methode" >
              <? $i=2; $counti=count($dom);
       while($i<=$counti)            //*****************        il faut prendre l'indice au lieu de phrase  ********************
       {
	   $d1=$dom[$i]['fr'];
	   ?>
              <?
           $d=$dom[$i]['fr'] ?>
              <option name="<?$d?>"><?echo$dom[$i]['fr']?></option>
              <?
	   $i++;
	   }?>
            </select>
          </span></td>
          <td width="231" align="left" valign="middle"><span class="style12">
            <input name="Submit2" type="submit" class="Style7" accesskey="d" tabindex="50" value=" Extraire " />
          </span></td>
          </tr>
        <tr>
          <td height="24" colspan="3">&nbsp;</td>
          </tr>
      </table>
      <p>&nbsp;</p>
      <p>
        <label></label>
      </p>
      </form>
      <p>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="234" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row"><a href="Untitled-6.php" class="Style7">Pr&eacute;cedent</a></th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>

</html>
