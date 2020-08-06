<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lexique_ARAB</title>
<style type="text/css">
<!--
.Style1 {
	color: #996633;
	font-weight: bold;
	font-size: xx-large;
	height: 50px;
}
body {
	background-image: url(index_Image/fond.gif);
	background-repeat: repeat;
	background-color: #99CCFF;
	width: inherit;
	border-width: 255;
	height: inherit;
	color: #00FF66;
}
a:link {
	color: #0033FF;
	display: inline;
	text-decoration: underline;
}
.style7 {
	color: #FF33CC;
	font-weight: normal;
	top: 100cm;
	background-color: #99CCFF;
	height: 45px;
	width: 400px;
	font-size: 33px;
	text-decoration: underline;
}
.style71 {	color: #FF33CC;
	font-weight: normal;
	top: 100cm;
	background-color: #99CCFF;
	height: 45px;
	width: 300px;
	font-size: 33px;
	text-decoration: underline;
}
.style72 {	color: #3399FF;
	font-weight: normal;
}
.Style75 {color: #000000; font-weight: bold; font-size: xx-large; height: 50px; }
body,td,th {
	color: #000000;
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
	color: #0000CC;
}
h1 {
	color: #333333;
	font-size: 13px;
}
h2 {
	color: #333333;
	font-size: 13px;
}
h3 {
	color: #565656;
	font-size: 16px;
}
h6 {
	font-size: 9px;
}
.style5 {font-size: 18px}
.Style77 {font-size: 36px}
-->
</style>
<script type="text/JavaScript">
<!--


function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>

<body>
<div>
  <div align="center" class="Style1">
    <p><img src="index_Image/Pro1.JPG" alt="Page En Fran&ccedil;ais" width="844" height="148" border="0" align="middle" lowsrc="01.JPG" /></p>
  </div>
</div>
<div align="center"></div>
<div>
  <table width="1053" height="93" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <th width="202" height="93" valign="top" scope="row"><div align="center">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div></th>
      <td width="851"><p class="Style75"><font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" 
          border="0" /></font><span class="date Style77"> Nombre De Visiteur:
            <?
     $fp = fopen("compteur.txt","r+");
     $nbvisites = fgets($fp,259);
     $nbvisites++;
     fseek($fp,0);
     fputs($fp,$nbvisites);
     fclose($fp);
     print(" $nbvisites ");
     ?>
        </span> </p>
        <p class="Style75">&nbsp;</p>
      </td>
    </tr>
  </table>
  <div align="center">
    <div class=";">
<blockquote>
  <blockquote>
    <blockquote>
      <table width="811" height="150" border="0" cellpadding="2" cellspacing="0">
        <tr>
          <th bordercolor="#FF0000" scope="row"><span class="Style1"> <a href="Untitled-5.php">En Fran&ccedil;ais (FR)</a></span></th>
        </tr>
        <tr>
          <th bordercolor="#FF0000" scope="row"><span class="Style1"><a href="Untitled-4.php">In English (EN)</a></span></th>
        </tr>
        <tr>
          <th align="center" bordercolor="#FF0000" scope="row"><span class="Style1"><a href="Untitled-3.php">&#1576;&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;</a></span></th>
        </tr>
      </table>
      </blockquote>
  </blockquote>
</blockquote>
</div>
  </div>
  <dir>
  <xmp></xmp>
  </dir>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p align="right"><a href="Untitled-2.php" class="Style1">Adminstrateur</a></p>
  <dir>
  <div align="center"></div>
  </dir>
  <object>
  </object>
</div>
</body>
</html>
