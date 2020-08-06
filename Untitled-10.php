<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recherche Par Mot</title>
<SCRIPT src="index_Script/keyboard.js" type=text/javascript 
charset=UTF-8></SCRIPT>
<LINK href="index_Script/keyboard.css" type=text/css 
rel=stylesheet>
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
	right: 100px;
}
.Style6 {
	color: #FF0000;
	font-size: 26px;
}
.Style7 {font-size: 24px}
.style12 {	color: #3399FF;
	font-weight: bold;
	font-size: 17px;
}
.style71 {	color: #3399FF;
	font-weight: bold;
}
-->
</style>
<link href="../../Mes documents/Site sans nom 1/keyboard.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Style74 {font-size: 40px}
.Style77 {font: 1222; border-width: 1000;}
.Style10 {	font-size: 36px;
	font-weight: bold;
}
.Style80 {font-size: 30px; font-weight: bold; }
.Style81 {font-size: 36px}
-->
</style>
</head>

<body>
<table width="1140" height="786" border="0" cellpadding="5" cellspacing="4" summary="&#1606;&#1578;&#1604;&#1575;&#1578;&#1576;&#1604;&#1575;&#1578;&#1604;&#1576;">
  <tr>
    <th width="107" height="71" scope="row">&nbsp;</th>
    <td width="938" class="Style2"><h2 class="Style3"><font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" width="17" height="17" 
          border="0" /></font>  <span class="Style74">La m&eacute;thode de recherche est :</span> </h2>
      <table width="290" height="52" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="290" align="center" scope="row"><p><font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" alt="sd" width="17" height="17" 
          border="0" /></font> <span class="Style3 Style81">Par Mot </span> </p></th>
        </tr>
      </table>    </td>
    <td width="8">&nbsp;</td>
  </tr>
  <tr>
    <th height="203" scope="row">&nbsp;</th>
    <td align="center" valign="middle" class="Style3"><table width="868" height="129" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="793" height="62" align="center" scope="row"><form action="Un2.php" method="post" name="form1" id="form1">
          <table width="741" height="225" border="0">
              <tr>
                <td width="309" height="28" align="left">&nbsp;</td>
                <td width="10">&nbsp;</td>
                <td width="410" align="left" valign="middle" class="Style7"><span class="Style80">
                <? $dom=array(); ?>
                </span></td>
              </tr>
              <tr>
                <td height="54"><div align="center" class="Style7"><span class="Style77">Une Langue Source</span> :</div></td>
                <td rowspan="2">&nbsp;</td>
                <td align="left">
                  <div align="left">
                    <select name="select" size="1" class="Style6" onchange="Saiser.value=&quot;&quot;;">
                      <option value="5">اللغة العربية </option>
                      <option value="2" selected="selected">Langue Français </option>
                      <option value="1">Langue English </option>
                    </select>
                  </div></td>
              </tr>
              <tr>
                <td height="66" valign="top"><div align="center" class="Style7">Entrer Votre Mot : </div></td>
                <td align="left" valign="top"><p>
                  <input name="Saiser" type="text" class="keyboardInputCenter" id="Saiser" dir="ltr" onclick="if (value==&quot;Entrer Votre Mot&quot;) {value=&quot;&quot;;}" onmouseup="if (value==&quot;Entrer Votre Mot&quot;) {value=&quot;&quot;;}" value="Entrer Votre Mot" size="25" />
                </p>
                  <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td height="67">&nbsp;</td>
                <td>&nbsp;</td>
                <td align="left" valign="top"><input name="Submit2" type="submit" class="Style7" accesskey="d" tabindex="50" value="Chercher" />
                  <input name="Submit" type="reset" class="Style7" accesskey="d" tabindex="50" value="  Effacer  " /></td>
              </tr>
            </table>
            <p>
              <label></label>
            </p>
            </form>          
        </th><th width="42" align="right" valign="middle" scope="row">&nbsp;</th>
      </tr>
      
    </table>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="191" scope="row"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="#" class="Style10">Précedent</a><a href="Untitled-6.php" class="Style7"></a></p></th>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>

</html>
