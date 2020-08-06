<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Interface D'ajoute</title>
<SCRIPT src="index_Script/keyboard.js" type=text/javascript 
charset=UTF-8></SCRIPT>
<LINK href="index_Script/keyboard.css" type=text/css 
rel=stylesheet>
<style type="text/css">
<!--
body {
	background-image: url(index_Image/fond.gif);
	background-repeat: repeat;
	top: auto;
	font-size: 18px;
	display: inline;
	font-weight: 100;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style12 {color: #3399FF;
	font-weight: bold;
	font-size: 17px;
}
#Layer1 {
	position:absolute;
	left:50px;
	top:100px;
	width:927px;
	height:35px;
	z-index:1;
	background-color: #999900;
	overflow: visible;
	visibility: hidden;
}
#Layer2 {
	position:absolute;
	left:100px;
	top:772px;
	width:143px;
	height:28px;
	z-index:1;
	background-color: #999999;
}
#Layer3 {
	position:absolute;
	left:375px;
	top:400px;
	width:117px;
	height:35px;
	z-index:2;
	background-color: #999933;
}
.Style27 {
	font-size: 18px;
	font-weight: bold;
}
.Style28 {
	font-family: "Segoe Script";
	font-weight: bold;
	font-size: 36px;
}
.Style32 {font-size: 20px}
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
<form method="post" action="Ajout_Utilisateur1.php">
  <p align="center" class="Style28">**<u> Interface D'ajoute de L'tilisateur </u>** </p>
  <p align="center" class="Style28">&nbsp;</p>
  <div align="center">
    <table width="852" height="477" cellpadding="0" cellspacing="2" bordercolor="#000000">
      
      <tr>
        <th width="223" height="50" align="left" valign="top" bordercolor="#FFFFFF" scope="row"><p align="left" class="Style32">Nom de L'utilisateur</p>        </th>
        <th width="556" align="center" valign="top" bordercolor="#FFFFFF" scope="row"><div align="left">
          <p><strong>
            <input name="nom" type="text" class="keyboardInputCenter" id="nom" onMouseUp="if  ( value==&quot;Votre Nom&quot; )  { value=&quot;&quot; }" value="Votre Nom" size="63" />
          </strong></p>
        </div></th>
      </tr>
      <tr>
        <th height="47" align="center" valign="top" bordercolor="#FFFFFF" scope="row"><p align="left" class="Style32">EMAIL</p>        </th>
        <th width="556" align="center" valign="top" bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="email" type="text" class="keyboardInputCenter" id="email" onMouseUp="if  ( value==&quot;Votre @MAIL&quot; )  { value=&quot;&quot; }" value="Votre @MAIL" size="63" />
        </strong></div></th>
      </tr>
      <tr>
        <th height="47" align="center" valign="top" bordercolor="#FFFFFF" scope="row"><p align="left" class="Style32">Source</p>          </th>
        <th width="556" align="center" valign="top" bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="source" type="text" class="keyboardInputCenter" id="source" onMouseUp="if  ( value==&quot;La Source Du Terme&quot; )  { value=&quot;&quot; }" value="La Source Du Terme" size="63" />
        </strong></div></th>
      </tr>
      <tr>
        <th height="47" align="center" valign="top" bordercolor="#FFFFFF" scope="row"><p align="left" class="Style32">Profession</p>        </th>
        <th width="556" align="center" valign="top" bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="profession" type="text" class="keyboardInputCenter" id="profession" onClick="if  ( value==&quot;La Source Du Terme&quot; )  { value=&quot;&quot; }" onMouseUp="if  ( value==&quot;Votre Profession&quot; )  { value=&quot;&quot; }" value="Votre Profession" size="63" />
        </strong></div></th>
      </tr>
      <tr>
        <th height="200" align="center" valign="middle" bordercolor="#FFFFFF" scope="row"><p align="left" class="Style32">Proposition</p>        </th>
        <th width="556" align="center" valign="top" bordercolor="#FFFFFF" scope="row"><div align="left">
          <p><strong>
            <textarea name="proposition" cols="50" rows="10" wrap="virtual" class="keyboardInputCenter" id="proposition" dir="ltr"></textarea>
          </strong></p>
          <p>&nbsp;</p>
        </div></th>
      </tr>
      <tr>
        <th height="70" bordercolor="#FFFFFF" scope="row">&nbsp;</th>
        <th height="70" bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="submit" type="submit" class="Style27" onClick="MM_validateForm('email','','RisEmail','pass','','R');return document.MM_returnValue" value="Ajouter" />
          <input name="reset" type="reset" class="Style27" value="Effacer Tout" />
        </strong></div></th>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
