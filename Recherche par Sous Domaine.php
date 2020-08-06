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
.Style80 {font-size: 30px; font-weight: bold; }
.Style85 {
	font-size: 30px;
	font-family: "Segoe UI";
	font-weight: bold;
}
.Style88 {font-size: 18px; font-weight: bold; font-family: "Segoe UI"; }
.Style90 {font-size: 24px; font-family: "Lucida Sans"; }
.Style91 {font-family: "Segoe UI"; font-size: 18px;}
-->
</style>
</head>

<body>
<table width="1222" height="713" border="0" cellpadding="5" cellspacing="4" summary="&#1606;&#1578;&#1604;&#1575;&#1578;&#1576;&#1604;&#1575;&#1578;&#1604;&#1576;">
  <tr>
    <th width="1" height="71" scope="row">&nbsp;</th>
    <td width="1169" class="Style2"><h2 class="Style3"><font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" width="17" height="17" 
          border="0" /></font>  <span class="Style75">La m&eacute;thode de recherche est :</span> </h2>
      <table width="599" height="52" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="599" align="center" scope="row"><p><font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" alt="sd" width="17" height="17" 
          border="0" /></font> <span class="Style6">Par Sous-Domaine</span> </p></th>
        </tr>
    </table>    </td>
    <td width="6">&nbsp;</td>
  </tr>
  <tr>
    <th height="203" scope="row">&nbsp;</th>
    <td align="left" valign="top" class="Style3"><form id="form1" name="form1" method="post" action="Resultat Sous-Domaine.php">
      <table width="1160" height="333" border="0">
        <tr>
          <td height="260" colspan="3" align="left"><table width="1162" height="79">
              <tr>
                <td width="1178"><table width="1155" border="1" bordercolor="#000000">
                  <tr>
                    <td width="1145" align="left" bordercolor="#000000" bgcolor="#00CCCC"><span class="Style80"><span class="Style90">Affichage De Toute Les Sous-Domaines :</span>
                          <? $dom=array(array("fr"=>'',"ar"=>'',"en"=>'',"do"=>'')); ?>
                    </span></td>
                  </tr>
                </table>
                  <table width="1155" height="97" border="2" bordercolor="#000000">
                    <tr>
                      <td width="333" height="43" align="center" valign="middle" bgcolor="#6699FF"><span class="Style88">Les Sous-Domaines En Français ^</span></td>
                      <td width="307" align="center" valign="middle" bgcolor="#6699FF"><span class="Style88">مجال الاستعمال في اللغة العربية </span></td>
                      <td width="286" align="center" valign="middle" bgcolor="#6699FF"><span class="Style88">Sous-Domains In English</span></td>
                      <td width="199" align="center" valign="middle" bgcolor="#6699FF"><span class="Style88">Domaines En (FR)                      </span></td>
                      <?
$link = mysql_connect("localhost", "root", ""); // Connexion  MySQL
	mysql_select_db("bas-lexique"); // Slection de la base dico
	
	$charset = mysql_client_encoding($link);
	 mysql_query("SET CHARACTER SET 'utf8'", $link);
	$reponse = mysql_query("SELECT * FROM sousdomaine ORDER BY `Nom_soudomain_FR` ASC");  
	 
	
 while ($donnees = mysql_fetch_array($reponse) )
{
?>
                    </tr>
                    <tr>
                      <?$compt=count($dom);?>
                      <p>
                        <?$compt++;?>
                        <?$dom[$compt]['fr']=$donnees['Nom_soudomain_FR'];?>
                        <?$dom[$compt]['ar']=$donnees['Nom_soudomain_AR'];?>
                        <?$dom[$compt]['en']=$donnees['Nom_soudomain_EN'];?>
                      </p>
                      <td height="38" valign="top" bordercolor="#FFFFFF"><?echo$dom[$compt]['fr']; ?></td>
                      <td valign="top" bordercolor="#FFFFFF"><?echo$dom[$compt]['ar'];?></td>
                      <td valign="top" bordercolor="#FFFFFF"><?echo$dom[$compt]['en']; 

$lang=$dom[$compt]['en'];?></td>
                      <td valign="top" bordercolor="#FFFFFF"><span class="Style91">
                        
                        <? 
$reponse1 = mysql_query("SELECT Nom_domaine_FR FROM sousdomaine,domaine WHERE sousdomaine.Nom_soudomain_EN='$lang' and sousdomaine.cle_domaine=domaine.cle_domaine");?>
                          </span> <span class="Style91">
                        <?
if ($donnees1 = mysql_fetch_array($reponse1) )
{?>
                        </span>                          <?

echo$donnees1['Nom_domaine_FR']; } ?>                          </td>
                      <?
}

	 
	 mysql_close(); // Dconnexion de MySQL

	
?>
                    </tr>
                  </table>
                  <p></p></td>
                </tr>
            </table>
            <p>
              <label></label>
            </p>            
            </td>
        </tr>
        <tr>
          <td width="850" height="24" valign="middle"><div align="center">
            <p class="Style7"><span class="Style85">&gt; Choisir Un Sous-Domaine :</span></p>
            </div></td>
          <td width="121" valign="middle"><span class="Style7">
            <select name="methode" class="Style7" id="methode" >
              <? $i=2; $counti=count($dom);
       while($i<=$counti)            //*****************        il faut prendre l'indice au lieu de phrase  ********************
       {
	   $d1=$dom[$i]['fr'];
	   ?>
              <?
           $d=$dom[$i]['fr'] ?>
              <option selected="selected" name="<?$d?>"><? echo $dom[$i]['fr']; ?></option>
              <?
	   $i++;
	   }?>
            </select>
          </span></td>
          <td width="175" align="left" valign="middle"><span class="style12">
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
      </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="29" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="36" scope="row"><a href="Untitled-6.php" class="Style7"></a></th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>

</html>
