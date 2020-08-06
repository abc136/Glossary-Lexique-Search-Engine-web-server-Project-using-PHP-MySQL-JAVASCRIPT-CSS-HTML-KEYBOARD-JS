<html>
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Page d'accueil</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
	text-decoration: underline;
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
<meta http-equiv="refresh" content="500">
<meta http-equiv="refresh" content="500;URL=Page d'acceuil.php">
<meta http-equiv="refresh" content="500">
<meta http-equiv="refresh" content="500;URL=">
<meta http-equiv="refresh" content="500;URL=Page d'acceuil.php">
<meta http-equiv="refresh" content="500;URL=Page d'acceuil.php">
<meta http-equiv="refresh" content="500">
<meta http-equiv="refresh" content="500;URL=Page d'acceuil.php">
<meta http-equiv="refresh" content="500">
</head>
<body bgcolor="#F4FFE4">
<table width="1257" border="0" cellspacing="0" cellpadding="0">
  

  <tr bgcolor="#D5EDB3">
    <td colspan="2" align="left" valign="top" bgcolor="#FAFAFA"><table width="94%" height="62" border="0" cellpadding="0" cellspacing="0" class="Style75">
        <tr bgcolor="#a4c2c2">
          <td width="13" height="62" align="left" valign="middle" nowrap bgcolor="#0099FF">&nbsp;</td>
          <td width="218" align="left" valign="middle" nowrap bgcolor="#0099FF"><p class="Style103"><span class="Style14"><img src="index_Image/Sans titre.PNG" alt="Lexique"></span></p>
            <p class="Style18">
              <script language="JavaScript">
      document.write(TODAY);	</script>
            </p>
            <p class="Style140"><span class="navText petiTexte Style7">Nombre De Visiteur:</span> <span class="Style141">
                <?
     $fp = fopen("index_Script/compteur.txt","r+");
     $nbvisites = fgets($fp,259);
     $nbvisites++;
     fseek($fp,0);
     fputs($fp,$nbvisites);
     fclose($fp);
     print(" $nbvisites ");
     ?>
            </span> </p></td>
        </tr>
      </table>      </td>
    <td width="1009" height="108" align="left" valign="top" bgcolor="#0099FF" id="tagline"><table width="1003" height="135" border="0" cellpadding="0" cellspacing="0" id="leftcol">
      <tr>
        <td height="73" bgcolor="#0099FF">&nbsp;</td>
        <td height="73" colspan="2" bgcolor="#0099FF"><p class="navText Style98">&nbsp;</p>
          <p class="navText Style98 Style142"><u><span class="Style143"><strong>Theme</strong></span></u><span class="Style143"><strong>:</strong></span><span class="Style144"> Contribution to The implementation of an On-line Lexicon System For The Language Arab</span></p></td>
      </tr>
      <tr valign="top">
        <td height="28" align="left" bgcolor="#0099FF" class="navText Style9">&nbsp;</td>
        <td width="509" bgcolor="#0099FF" class="navText Style9"><p><span class="Style116"><u>Achieve By:</u></span></p>          </td>
        <td width="455" bgcolor="#0099FF" class="navText Style9"><p><span class="Style116"><u><span class="Style110">Direct By:</span></u></span></p>          </td>
      </tr>
      <tr>
        <td width="39" height="34" align="left" valign="top" bgcolor="#0099FF"><p>&nbsp;</p></td>
        <td valign="top" bgcolor="#0099FF"><p class="Style9 Style7 navText"><strong>Fellague Djabir &amp; Derkaoui Ramdhan</strong></p></td>
        <td valign="top" bgcolor="#0099FF" class="Style14">Mr.Loukam Mourad</td>
      </tr>
    </table></td>
  </tr>
  
  

  <tr>
    <td height="27" colspan="2" align="left" bgcolor="#FAFAFA"><p class="Style147"><span class="Style163"><span class="Style164">&gt;Page Of Welcome</span></span><span class="Style164"></span></p>
    </td>
    <td height="27" align="center" bgcolor="#FAFAFA"> <p>&nbsp;</p>
      <table width="837" height="50" border="0">
        
        <tr>
          <td width="831" height="46" align="center" bgcolor="#00CCCC"><span class="Style147">In line lexicon </span></td>
        </tr>
      </table>
      <table width="961" height="31" border="0">
        
        <tr>
          <td width="59" height="27" align="center">&nbsp;</td>
          <td width="270" align="center" bgcolor="#99CCFF"><span class="Style149"><a href="Page d'acceuil.php">En Français (FR) </a></span></td>
          <td width="10" align="center">&nbsp;</td>
          <td width="285" align="center" bgcolor="#99CCFF" class="Style149"><a href="#">In English (EN) </a></td>
          <td width="10" align="center">&nbsp;</td>
          <td width="239" align="center" bgcolor="#99CCFF" class="Style149"><a href="Page d'acceuil_AR.php">بالعربية</a></td>
          <td width="58" align="center" class="Style149">&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>

 
 <tr>
   <td width="235" height="559" align="center" valign="top" background="index_Image/Page d'acceuil_clip_image001_0043.gif" bgcolor="#FFFFFF"><div align="left" class="bodyText">
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
href="#">  RESEARCH BY: </A> </p>
                  <p>&nbsp;</p>
                  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
                    <DIV><span class="petiTexte"><span class="petiTexte"><span class="petiTexte"><span class="petiTexte"><A 
href="Untitled-10.php">WORD </A></span></span></span></span></DIV>
                    <DIV class="petiTexte petiTexte petiTexte petiTexte"><A 
href="#">ROOT </A></DIV>
                    <DIV class="petiTexte petiTexte petiTexte petiTexte"><A 
href="Recherche par Domaines.php">DOMAIN </A></DIV>
                    <DIV>
                      <div align="left"><span class="petiTexte petiTexte petiTexte petiTexte"><A 
href="Recherche par Sous Domaine.php">SUB-DOMAIN </A></span> </div>
                    </DIV>
                    <DIV></DIV>
                  </DIV>
                </DIV>
                <DIV class="Style99" onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])>
                  <p><A href="Un.php">TO ADD</A>                </p>
                  <p>&nbsp;</p>
                </DIV>
                <DIV class="Style99" onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])>
                  <p><A class=autremenu 
href="#">STATISTICAL</A> </p>
                  <p>&nbsp;</p>
                </DIV>
                <DIV class="Style99" onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])>
                  <p><A class=autremenu 
href="#">ADMINISTRATOR</A>                </p>
                  <p>&nbsp;</p>
                  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
                    <DIV><A 
href="#">Updating </A></DIV>
                    <DIV><a href="#">Modify</a></DIV>
                    <DIV><A 
href="#">Add</A></DIV>
                    <DIV><A 
href="#">Test my site</A></DIV>
                    <DIV></DIV>
                  </DIV>
                </DIV>
                <DIV class="Style99">
                  <p><A href="#">STAINS TO DO </A></p>
                  <p>&nbsp;</p>
                </DIV>
                <DIV class="Style99">
                  <p><A href="#">INSCRIPTION</A></p>
                  <p>&nbsp;</p>
                </DIV>
                <DIV class="Style99" onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])>
                  <p><A class=autremenu 
href="#">CONTACT</A> </p>
                  <p>&nbsp;</p>
                  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
                    <DIV><A 
href="#">My Address</A></DIV>
                    <DIV><A 
href="#">To send A Comentaires </A></DIV>
                    <DIV></DIV>
                  </DIV>
                </DIV>
                <DIV>
                  <p><span class="Style99"><A href="#">BY THE WAY OF THE SITE</A></span></p>
                </DIV>
              </DIV>
            </DIV>
          </DIV>
        </div>
    </div>    </td>
   <td width="13" rowspan="2" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
    <p>&nbsp;</p></td>
   <td rowspan="2" align="left" valign="top"><p class="Style14"><img src="index_Image/Monde.JPG" alt="" width="1008" height="556"></p>
    <p class="Style14">&nbsp;</p>
    <p class="Style14">&nbsp;</p>
    <p class="Style14">&nbsp;</p>
    <p class="Style14">&nbsp;</p></td>
 </tr>
 <tr>
   <td height="620" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
 </tr>
</table>
</body>
</html>
