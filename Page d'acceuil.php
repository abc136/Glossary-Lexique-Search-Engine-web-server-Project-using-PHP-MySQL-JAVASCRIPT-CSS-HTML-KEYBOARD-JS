<html>
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Page d'accueil</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<STYLE>
.spanstyle {
	FONT-WEIGHT: bold; FONT-SIZE: 15pt; VISIBILITY: visible; COLOR: black; FONT-FAMILY: Verdana; POSITION: absolute; TOP: -50px
}
.Style1 {font-size: 24px}
</STYLE>


<link rel="stylesheet" href="mm_health_nutr.css" type="text/css">
<script language="javascript">
//--------------- LOCALIZEABLE GLOBALS---------------
var d=new Date();
monthname= new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//--------------- END LOCALIZEABLE   ---------------
</script>
<LINK title=style media=screen 
href="index_Script/style4bis.css" 
type=text/css rel=stylesheet>

<LINK media=screen 
href="index_Script/cours.css" 
type=text/css rel=stylesheet>

<SCRIPT src="index_Script/js.js" 
type=text/javascript></SCRIPT>

<SCRIPT src="index_Script/md5.js" 
type=text/javascript></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
      function encrypt(f)
      {
         var password = f.logPassword.value;
         var salt = f.salt.value;
         var encrypted1 = hex_md5(password);
         var encrypted2 = hex_md5(encrypted1+salt);
         f.logPassword.value = encrypted2;
      }
	   </SCRIPT>
<meta http-equiv="refresh" content="500">
<meta http-equiv="refresh" content="500;URL=Page d'acceuil.php">
<meta http-equiv="refresh" content="500">
<meta http-equiv="refresh" content="500;URL=">
<meta http-equiv="refresh" content="500;URL=Page d'acceuil.php">
<meta http-equiv="refresh" content="500;URL=Page d'acceuil.php">
<meta http-equiv="refresh" content="500">
<meta http-equiv="refresh" content="500;URL=Page d'acceuil.php">
<meta http-equiv="refresh" content="500">
<style type="text/css">
<!--
.Style2 {font-size: 16px}
.Style3 {
	font-size: 25px;
	color: #000000;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.Style6 {font-size: 15px}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="1257" border="0" cellspacing="0" cellpadding="0">
  

  <tr bgcolor="#D5EDB3">
    <td colspan="2" align="left" valign="top" bgcolor="#F4FFE4"><table width="94%" height="184" border="0" cellpadding="0" cellspacing="0" class="Style75">
        <tr bgcolor="#a4c2c2">
          <td width="13" height="184" align="left" valign="middle" nowrap bgcolor="#0099FF">&nbsp;</td>
          <td width="218" align="left" valign="middle" nowrap bgcolor="#0099FF"><p class="Style103"><span class="Style14"><img src="index_Image/Sans titre.PNG" alt="Lexique" width="209"></span></p>
            <p class="Style18">
			     <script LANGUAGE="JavaScript">

<!-- Original: Michael Tartaglia <stonedstan@hotmail.com> -->
<!-- Web Site:  http://www.geocities.com/SiliconValley/Horizon/5235 -->

<!-- Begin
day = new Date();
miVisit = day.getTime();
function clock() {
dayTwo = new Date();
hrNow = dayTwo.getHours();
mnNow = dayTwo.getMinutes();	
scNow = dayTwo.getSeconds();
miNow = dayTwo.getTime();
if (hrNow == 0) {
hour = 12;
ap = " AM";
} else if(hrNow <= 11) {
ap = " AM";
hour = hrNow;
} else if(hrNow == 12) {
ap = " PM";
hour = 12;
} else if (hrNow >= 13) {
hour = (hrNow - 12);
ap = " PM";
}
if (hrNow >= 13) {
hour = hrNow - 12;
}
if (mnNow <= 9) {
min = "0" + mnNow;
}
else (min = mnNow)
if (scNow <= 9) {
secs = "0" + scNow;
} else {
secs = scNow;
}
time = hour + ":" + min + ":" + secs + ap;
document.form.button.value = time;
self.status = time;
setTimeout('clock()', 1000);
}
function timeInfo() {
milliSince = miNow;
milliNow = miNow - miVisit;
secsVisit = Math.round(milliNow / 1000);
minsVisit = Math.round((milliNow / 1000) / 60);
alert("There have been " + milliSince + " milliseconds since midnight, January 1, 1970.  "
+ "You have spent " + milliNow + " of those milliseconds on this page.  "
+ ".... About " + minsVisit + " minutes, and "
+ secsVisit + " seconds.");
}
document.write("<form name=\"form\">"
+ "<input type=button value=\"Click for info!\""
+ " name=button onClick=\"timeInfo()\"></form>");
onError = null;
clock();
// End -->
</script>
            </p>
            <p class="Style18">
              <script language="JavaScript">
      document.write(TODAY);	</script>
            </p>
            <p class="Style18"><span class="navText petiTexte Style7">Nombre De Visiteur<span class="Style2">:</span></span> <span class="Style141 Style2">
              <?
     $fp = fopen("index_Script/compteur.txt","r+");
     $nbvisites = fgets($fp,259);
     $nbvisites++;
     fseek($fp,0);
     fputs($fp,$nbvisites);
     fclose($fp);
     print(" $nbvisites ");
     ?>
            </span></p></td>
        </tr>
    </table>      </td>
    <td width="1012" height="108" align="center" valign="top" bgcolor="#0099FF" id="tagline"><table width="1003" height="135" border="0" cellpadding="0" cellspacing="0" id="leftcol">
      <tr>
        <td height="73" bgcolor="#0099FF">&nbsp;</td>
        <td height="73" colspan="2" bgcolor="#0099FF"><p class="navText Style98">&nbsp;</p>
          <p class="navText Style98 Style142"><u><span class="Style143"><strong>Th&eacute;me</strong></span></u><span class="Style143"><strong>:</strong></span><span class="Style144"> Contribution &agrave; La Mise En Oeuvre D'un Syst&eacute;me De Lexique En-Ligne Pour La Langue Arabe</span></p></td>
      </tr>
      <tr valign="top">
        <td height="28" align="left" bgcolor="#0099FF" class="navText Style9">&nbsp;</td>
        <td width="509" bgcolor="#0099FF" class="navText Style9"><p><span class="Style116"><u>R&eacute;aliser Par</u>:</span></p>          </td>
        <td width="455" bgcolor="#0099FF" class="navText Style9"><p><span class="Style116"><u><span class="Style110">Diriger Par:</span></u></span></p>          </td>
      </tr>
      <tr>
        <td width="39" height="34" align="left" valign="top" bgcolor="#0099FF"><p>&nbsp;</p></td>
        <td valign="top" bgcolor="#0099FF"><p class="Style9 Style7 navText"><strong>Fellague Djabir &amp; Derkaoui Ramdhan</strong></p></td>
        <td valign="top" bgcolor="#0099FF" class="Style14">Mr.Loukam Mourad</td>
      </tr>
    </table>      </td>
  </tr>
  
  

  <tr>
    <td height="27" colspan="2" align="left" valign="middle" bgcolor="#F4FFE4"><div align="center" class="Style3"> <span class="Style6">&gt;</span> Accueil </div></td>
    <td height="27" align="center" bgcolor="#F4FFE4"><table width="837" height="50" border="0">
      <tr>
        <td width="831" height="46" align="center" bgcolor="#00CCCC"><span class="Style147">Lexique En Ligne </span></td>
      </tr>
    </table>
      <table width="961" height="31" border="0">
        <tr>
          <td width="59" height="27" align="center"><span class="Style14 Style1">
          <style type="text/css">
<!--
.Style7 {font-size: 12px}
.Style9 {color: #000000}
.Style75 {color: #E0DFE3; font-weight: bold; font-size: xx-large; height: 50px; }
.Style14 {
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
.Style18 {
	color: #000000;
	font-size: 24px;
	font-weight: bold;
}
.Style98 {font-size: 14px}
.Style99 {font-size: 13px}
.Style103 {
	font-size: 15px;
	line-height: 18px;
	letter-spacing: 0.1em;
	text-decoration: none;
	font: 18px Arial, Helvetica, sans-serif;
}
a:hover {
	color: #FF0000;
	text-decoration: none;
}
.Style110 {
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
	font-family: Tahoma;
}
.Style116 {font-size: 18px; color: #FFFFFF; font-family: Tahoma; font-weight: bold; }
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:active {
	color: #FF0000;
	text-decoration: none;
}
body,td,th {
	color: #000000;
	font-family: Georgia, Times New Roman, Times, serif;
	font-size: 18px;
}
body {
	background-image: url();
}
.Style136 {color: #000000; font-size: 34px; font-weight: bold; }
.Style140 {font-size: 14px; line-height: 18px; letter-spacing: 0.1em; text-decoration: none; font: 18px Arial, Helvetica, sans-serif; }
.Style141 {font-family: Tahoma; font-weight: bold; color: #000000;}
.Style142 {color: #FFFFFF}
.Style143 {font-family: Tahoma; font-size: 18px;}
.Style144 {font-size: 14px; font-weight: bold; }
.Style147 {
	color: #000000;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 30px;
	font-weight: bold;
}
a {
	font-family: Tahoma;
}
.Style149 {color: #000000; font-family: Georgia, "Times New Roman", Times, serif; font-size: 18px; font-weight: bold; }
.Style163 {font-size: 28px}
.Style164 {font-size: 25px}
-->
          </style>
          </span> </td>
          <td width="270" align="center" bgcolor="#99CCFF"><span class="Style149"><a href="#"><u>En Français (FR)</u> </a></span></td>
          <td width="10" align="center">&nbsp;</td>
          <td width="285" align="center" bgcolor="#99CCFF" class="Style149"><a href="Page d'acceuil_EN.php"><u>In English (EN) </u></a></td>
          <td width="10" align="center">&nbsp;</td>
          <td width="239" align="center" bgcolor="#99CCFF" class="Style149"><a href="Page d'acceuil_AR.php"><u>بالعربية</u></a></td>
          <td width="58" align="center" class="Style149">&nbsp;</td>
        </tr>
    </table>      </td>
  </tr>

 
 <tr>
   <td width="235" height="559" align="center" valign="top" background="index_Image/Page d'acceuil_clip_image001_0043.gif" bgcolor="#F4FFE4"><div align="left" class="bodyText">
     <div align="left">
       <DIV id=div>
         <DIV id=div2>
           <DIV class=menu>
             <H1 align="center" class=Style18 Style89>&nbsp;</H1>
             <H1 align="center" class=Style18 Style89>&nbsp;</H1>
             <H1 align="center" class=Style136 Style89>Menu</H1>
             <DIV class="Style99" onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])>
                  <p><A class=autremenu 
href="#">  RECHERCHE PAR : </A> </p>
                  <p>&nbsp;</p>
                  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
                    <DIV><span class="petiTexte"><span class="petiTexte"><span class="petiTexte"><span class="petiTexte"><A 
href="Untitled-10.php">MOT </A></span></span></span></span></DIV>
                    <DIV class="petiTexte petiTexte petiTexte petiTexte"><A 
href="#">RACINE </A></DIV>
                    <DIV class="petiTexte petiTexte petiTexte petiTexte"><A 
href="Recherche par Domaines.php">DOMAINE </A></DIV>
                    <DIV>
                      <div align="left"><span class="petiTexte petiTexte petiTexte petiTexte"><A 
href="Recherche par Sous Domaine.php">SOUS-DOMAINE </A></span> </div>
                    </DIV>
                    <DIV></DIV>
                  </DIV>
                </DIV>
                <DIV class="Style99">
                  <p><A href="Ajout_Utilisateur.php">AJOUTER</A>                </p>
                  <p>&nbsp;</p>
                </DIV>
                <DIV class="Style99">
                  <p><A class=autremenu 
href="Statistiques.php">STATISTIQUES</A> </p>
                  <p>&nbsp;</p>
                </DIV>
                <DIV class="Style99" onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])>
                  <p><A class=autremenu 
href="#">ADMINISTRATEUR</A>                </p>
                  <p>&nbsp;</p>
                  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
                    <DIV><A 
href="Un.php">Ajouter</A></DIV>
                    <DIV><A 
href="#">Modifier</A></DIV>
                    <DIV><A 
href="#">Supprimer</A></DIV>
                    <DIV><A 
href="#">Consulter</A></DIV>
                    <DIV></DIV>
                  </DIV>
                </DIV>
                <DIV class="Style99">
                  <p><A href="#">TACHES A EFFECTUER </A></p>
                  <p>&nbsp;</p>
                </DIV>
                <DIV class="Style99">
                  <p><A href="k.php">INSCRIPTION</A></p>
                  <p>&nbsp;</p>
                </DIV>
                <DIV class="Style99" onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])>
                  <p><A class=autremenu 
href="#">CONTACT</A> </p>
                  <p>&nbsp;</p>
                  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
                    <DIV><A 
href="#">Mon Adresse</A></DIV>
                    <DIV></DIV>
                  </DIV>
                </DIV>
                <DIV>
                  <p><span class="Style99"><A href="#">A PROPOS DU SITE</A></span></p>
                </DIV>
              </DIV>
            </DIV>
          </DIV>
        </div>
    </div>    </td>
   <td width="10" valign="top" bgcolor="#F4FFE4"><p>&nbsp;</p>
    <p>&nbsp;</p></td>
   <td align="left" valign="top" bgcolor="#F4FFE4"><p class="Style14 Style1">
</p>
    <p class="Style89 Style1">&nbsp;     </p></td>
 </tr>
</table>
</body>
</html>
