<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Document sans titre</title>
</head>
<body>
<?
function Mon_compteur($page) {
     $fp = fopen("compteur.txt","r+");
     $nbvisites = fgets($fp,259);
     $nbvisites++;
     fseek($fp,0);
     fputs($fp,$nbvisites);
     fclose($fp);
     print(" $nbvisites ");
}
?>
<?
session_start();
if(! isset($PAGES_LIST)) {
  $PAGES_LIST = array($page);
session_register($PAGES_LIST);
Mon_compteur($page);
  }else{
   if (! in_array($page, $PAGES_LIST)) {
     $PAGES_LIST[] = $page;
     Mon_compteur($page);
}
}
?>
</body>
</html>
