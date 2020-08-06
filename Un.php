<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<form method="post" action="ajoute11.php">
  <p align="center" class="Style28">**<u> Interface D'ajoute </u>** </p>
  <div align="center">
    <table width="1115" height="677" border="2" cellpadding="0" cellspacing="2" bordercolor="#000000">
      <tr>
        <th width="154" height="82" bordercolor="#FFFFFF" scope="row"><div align="center">
          <p align="left"><strong>Terme (FR)</strong></p>
        </div></th>
        <th width="213" nowrap bordercolor="#FFFFFF" scope="row"><div align="left" onMouseUp="keybut.visibility: hidden;"><strong>
          <input name="mot1" type="text" class="keyboardInputCenter" id="mot1" />
        </strong></div></th>
        <th width="154" align="left" bordercolor="#FFFFFF" scope="row"><div align="center">
          <p align="left"><strong> Term (EN)</strong></p>
        </div></th>
        <th width="214" align="left" bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="mot2" type="text" class="keyboardInputCenter" id="mot2" />
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row"><p align="left"><strong>&#1575;&#1604;&#1605;&#1589;&#1591;&#1604;&#1581; (AR)

              
        </strong></p></th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="mot3" type="text" class="keyboardInputCenter" id="mot3" dir="rtl" lang="ar" />
        </strong></div></th>
      </tr>
      <tr>
        <th height="71" align="center" valign="middle" bordercolor="#FFFFFF" scope="row"><div align="center">
          <p align="left"><strong>Dom_FR</strong></p>
        </div></th>
        <th height="71" align="center" valign="middle" nowrap bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="dom1" type="text" class="keyboardInputCenter" id="dom1" />
        </strong></div></th>
        <th align="center" valign="middle" bordercolor="#FFFFFF" scope="row"><p align="left"><strong> Dom_EN
             :  
             
        </strong></p></th>
        <th align="center" valign="middle" bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="dom2" type="text" class="keyboardInputCenter" id="dom2" />
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row"><p align="left"><strong>Dom_AR</strong></p></th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="dom3" type="text" class="keyboardInputCenter" id="dom3" dir="rtl" lang="ar" />
        </strong></div></th>
      </tr>
      <tr>
        <th height="70" bordercolor="#FFFFFF" scope="row"><div align="center">
          <p align="left"><strong>Sous_Dom_FR</strong></p>
        </div></th>
        <th height="70" nowrap bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="sou_dom1" type="text" class="keyboardInputCenter" id="sou_dom1" />
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row"><p align="left">Sous_Dom_EN</p>          </th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="sou_dom2" type="text" class="keyboardInputCenter" id="sou_dom2" />
        </strong></div></th>
        <th width="127" bordercolor="#FFFFFF" scope="row"><p align="left"><strong>Sous_Dom_AR
          
        </strong></p></th>
        <th width="223" bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="sou_dom3" type="text" class="keyboardInputCenter" id="sou_dom3" dir="rtl" lang="ar" />
        </strong></div></th>
      </tr>
      <tr>
        <th height="71" bordercolor="#FFFFFF" scope="row"><div align="center">
          <p align="left"><strong>Racine (FR)</strong></p>
        </div></th>
        <th height="71" nowrap bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="rac1" type="text" class="keyboardInputCenter" id="rac1" />
        </strong></div></th>
        <th align="right" bordercolor="#FFFFFF" scope="row"><p align="left"><strong>
          Root (EN)
                
        </strong></p></th>
        <th align="right" bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="rac2" type="text" class="keyboardInputCenter" id="rac2" />
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row"><p align="left">&#1575;&#1604;&#1580;&#1584;&#1585; (AR)</p></th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="rac3" type="text" class="keyboardInputCenter" id="rac3" dir="rtl" lang="ar" />
        </strong></div></th>
      </tr>
      <tr>
        <th height="183" align="center" valign="middle" bordercolor="#FFFFFF" scope="row"><p align="center"><strong>Concept</strong> (FR) </p>
        <p>&nbsp;</p></th>
        <th height="183" align="center" valign="middle" nowrap bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <textarea name="def1" cols="" rows="7" class="keyboardInputCenter" id="def1" dir="rtl"></textarea>
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row"><p align="center"><strong> Concept</strong> (EN)</p>          
        <p>&nbsp;</p></th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <textarea name="def2" cols="" rows="7" class="keyboardInputCenter" id="def2" dir="rtl"></textarea>
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row"><p align="center"><strong>&#1575;&#1604;&#1605;&#1601;&#1607;&#1608;&#1605;</strong> (AR)</p>
        <p>&nbsp;</p></th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <textarea name="def3" cols="" rows="7" class="keyboardInputCenter" id="def3" dir="rtl"></textarea>
        </strong></div></th>
      </tr>
      <tr>
        <th height="62" bordercolor="#FFFFFF" scope="row"><p>&nbsp;</p></th>
        <th height="62" nowrap bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="source" type="text" class="keyboardInputCenter" id="source" onMouseUp="if  ( value==&quot;La Source Du Terme&quot; )  { value=&quot;&quot; }" onMouseMove="color: #3399FF;" value="La Source Du Terme" maxlength="20" />
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row"><p>&nbsp;</p>        </th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="source2" type="text" class="keyboardInputCenter" id="source2" onMouseUp="if  ( value==&quot;Votre Nom&quot; )  { value=&quot;&quot; }" value="Votre Nom" maxlength="20" />
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row">&nbsp;</th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="source3" type="text" class="keyboardInputCenter" id="source3" onMouseUp="if  ( value==&quot;Votre EMAIL @&quot; )  { value=&quot;&quot; }" value="Votre EMAIL @" />
        </strong></div></th>
      </tr>
      <tr>
        <th height="55" colspan="2" bordercolor="#FFFFFF" scope="row">&nbsp;</th>
        <th bordercolor="#FFFFFF" scope="row"><div align="right"><strong>
          <input name="submit" type="submit" class="Style27" onClick="MM_validateForm('email','','RisEmail','pass','','R');return document.MM_returnValue" value="Ajouter" />
        </strong></div></th>
        <th bordercolor="#FFFFFF" scope="row"><div align="left"><strong>
          <input name="reset" type="reset" class="Style27" value="Effacer Tout" />
        </strong></div></th>
        <th colspan="2" bordercolor="#FFFFFF" scope="row">&nbsp;</th>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
