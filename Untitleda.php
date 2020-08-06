<%@LANGUAGE="JAVASCRIPT" CODEPAGE="1252"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604;</title>
<style type="text/css">
<!--
body {
	background-image: url(index_Image/fond.gif);
	background-repeat: repeat;
}
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
.style12 {	color: #3399FF;
	font-weight: bold;
	font-size: 17px;
}
.style7 {	color: #3399FF;
	font-weight: bold;
}
.Style13 {color: #996633; font-weight: bold; font-size: 24px; }
.Style17 {font-size: 24px}
.Style18 {color: #996633; font-weight: bold; font-size: 36px; }
.Style20 {font-size: 24px; color: #996633; }
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
<div align="center">
  <div align="right" class="style12">
    <h2 align="center" class="Style18">&#1575;&#1604;&#1585;&#1580;&#1600;&#1600;&#1600;&#1600;&#1575;&#1569; &#1605;&#1606;&#1603;&#1605; &#1605;&#1604;&#1571; &#1575;&#1604;&#1576;&#1610;&#1575;&#1606;&#1600;&#1600;&#1600;&#1600;&#1575;&#1578; &#1575;&#1604;&#1578;&#1575;&#1604;&#1610;&#1577; <font face="arial, helv" size="2"><img 
            src="index_Image/next.gif" width="17" height="17" 
          border="0" /></font></h2>
    <h2 class="footer">
      <form method="post" action="Untitledb.php">
        <strong>
        <label>
        <div align="center"><br />
          <strong>
          <table width="511" height="232" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <th width="511" scope="row"><strong><span class="Style13">&nbsp; </span></strong><span class="Style13">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1587;&#1578;&#1582;&#1600;&#1583;&#1605;&nbsp;&nbsp;&nbsp; </span></th>
              <th width="511" scope="row"><strong>
                <input name="login" type="text" maxlength="12" />
              </strong></th>
            </tr>
            <tr>
              <th scope="row"><span class="Style13"> <strong> &nbsp; </strong>&#1575;&#1604;&#1585;&#1602;&#1605; &#1575;&#1604;&#1587;&#1585;&#1610; <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></span></th>
              <th scope="row"><strong>
                <input name="pass" type="password" maxlength="10" id="pass" />
              </strong></th>
            </tr>
            <tr>
              <th scope="row"><span class="Style20">&#1575;&#1604;&#1576;&#1585;&#1610;&#1583; &#1575;&#1604;&#1575;&#1604;&#1603;&#1578;&#1585;&#1608;&#1606;&#1610; </span></th>
              <th scope="row"><strong>
                <input type="text" name="email" id="email" />
              </strong></th>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <th scope="row"><strong>
                <input name="submit" type="submit" class="Style17" onclick="MM_validateForm('email','','RisEmail','pass','','R');return document.MM_returnValue" value="&#1587;&#1580;&#1604;" />
                <input name="reset" type="reset" class="Style17" value="&#1605;&#1587;&#1600;&#1600;&#1600;&#1600;&#1581;" />
              </strong></th>
            </tr>
          </table>
          </strong>
          <p><br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                <br />
          </p>
        </div>
        </label>
        </strong>
        <p>&nbsp;</p>
        <div align="center" class="style12">
          <p align="center"><strong><br />
            </strong></p>
        </div>
      </form>
    </h2>
  </div>
</div>
</body>
</html>
