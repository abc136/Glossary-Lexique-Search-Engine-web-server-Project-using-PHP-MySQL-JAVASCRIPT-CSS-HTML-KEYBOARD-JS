<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Interface D'inscription</title>
<style type="text/css">
<!--
body {
	background-image: url(index_Image/fond.gif);
	background-repeat: repeat;
}
.Style2 {
	font-size: 24px;
	color: #996600;
}
.Style5 {
	font-size: 24px;
	color: #996666;
}
.style12 {	color: #3399FF;
	font-weight: bold;
	font-size: 17px;
}
.style7 {	color: #3399FF;
	font-weight: bold;
}
.Style9 {
	font-size: 24px;
	color: #996633;
}
.Style14 {font-size: 36px}
a:link {
	color: #0000FF;
}
a:visited {
	color: #0000FF;
}
a:hover {
	color: #FF0000;
}
a:active {
	color: #0000FF;
}
.Style15 {font-size: 24px}
.Style18 {
	color: #996633;
	font-weight: bold;
}
.Style22 {font-size: 17px; color: #3399FF;}
.Style23 {font-size: 22px; color: #996600; }
.Style24 {font-size: 22px; color: #0000FF; }
.Style27 {color: #000000; font-family: "Lucida Console"; font-size: 18px;}
.Style30 {
	font-size: 24px;
	color: #000000;
	font-weight: bold;
}
.Style32 {
	font-size: 22px;
	color: #000000;
	font-weight: bold;
}
.Style33 {font-size: 30px; font-family: Geneva, Arial, Helvetica, sans-serif; }
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<table width="1125" height="743" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="1041" height="497" align="center" valign="top" scope="row"><div align="center"></div>
      <div align="center">
        <p><span lang="fr" xml:lang="fr"><span class="Style2"><span class="Style14"><font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" width="17" height="17" 
          border="0" /></font></span></span><span class="Style14"> <u>Interface D'inscription</u> </span></span></p>
        <p>&nbsp;</p>
      </div>
      <div align="left">
        <table width="1110" height="280" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="1110" height="280" align="left"><div align="right" class="style7">
                <form method="post" action="kk.php">
                  <p align="left" class="Style27">Vous pouvez d'ajouter et chercher un mot Si Vous &eacute;tes D&egrave;ja Inscrit : </p>
                  <p align="left" class="Style27">mais saiser un nom de l'utilisateur et le mot de passe svp <strong>
                    <label></label>
                  </strong>                  </p>
                  <p align="left" class="Style27">&nbsp;</p>
                  <p align="left" class="Style27">&nbsp;</p>
                  <label> </label>
                  <div align="left">
                    <table width="849" height="177" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <th width="229" height="60" align="right" scope="row">&nbsp;</th>
                        <td width="235" valign="middle"><strong><span class="Style18"><span class="Style30">Nom d'utilisateur                        </span></span></strong></td>
                        <td width="385" valign="middle"><strong><span class="Style18"><span class="Style15"><strong><strong><strong><strong><strong><strong>
                          <input name="login" type="text" class="Style27" size="29" />
                        </strong></strong></strong></strong></strong></strong></span></span></strong></td>
                      </tr>
                      <tr>
                        <th height="30" align="right" scope="row"><span class="Style22">
                          <label></label>
                          </span><strong> <span class="style12">
                          <label></label>
                        </span></strong></th>
                        <td valign="bottom"><strong><span class="Style32">Mot de passe                        </span></strong></td>
                        <td valign="bottom"><strong><span class="Style23"><strong>
                          <input name="password" type="password" class="Style27" size="29" />
                        </strong></span></strong></td>
                      </tr>
                      <tr>
                        <th height="87" align="right" scope="row">&nbsp;</th>
                        <td align="right">&nbsp;</td>
                        <td align="right"><div align="left"><strong>
                          
                            <input name="submit" type="submit" class="Style15" onclick="MM_validateForm('login','','R','password','','R');return document.MM_returnValue" value="Envoyer" />
                            
                          <input name="reset" type="reset" class="Style15" value="Effacer" />
                        </strong></div></td>
                      </tr>
                    </table>
                  </div>
                </form>
            </div></td>
          </tr>
        </table>
      </div>
      <p class="Style5"><strong><span class="Style9">
      <label><strong>&nbsp;</strong></label>
    </span></strong></p>
      <p class="Style5">&nbsp;</p>
    <p class="Style5">&nbsp;</p>
    <p class="Style5">&nbsp;</p>
    <p class="Style5">&nbsp;</p>
    <p class="Style5">&nbsp;</p></th>
    <td width="4">&nbsp;</td>
  </tr>
  <tr>
    <th height="104" align="right" valign="middle" scope="row"><div align="left" class="Style24"><a href="k1.php" class="Style33">Nouveau Compte</a></div>    </th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
