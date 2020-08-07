<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0070)http://www.graphiks.net/cours/mysql/36-connexion-a-mysql-avec-php.html -->
<HTML lang=fr xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>Connexion a mysql avec php - Cours mysql [1]</TITLE>
<META http-equiv=content-type content="text/html; charset=iso-8859-1">
<META 
content="cours affiche et Connexion a mysql avec php - Cours mysql  - Cours et tutoriels sur les langages de programmations internet telle que php et mysql ou encore html et css. MySQL aussi." 
name=description>
<META 
content="Connexion,a,mysql,avec,php,Cours,mysql,cours,tutoriels php,cours php,programmation" 
name=keywords><LINK href="http://www.graphiks.net/data/favicon.ico" 
rel="shortcut icon"><LINK title=style media=screen 
href="Connexion a mysql avec php - Cours mysql [1]_fichiers/style4bis.css" 
type=text/css rel=stylesheet><LINK title=forum 
href="http://www.graphiks.net/forum/rss.xml" type=application/rss+xml 
rel=alternate><LINK title="actualites internet" 
href="http://www.graphiks.net/actualite/rss.xml" type=application/rss+xml 
rel=alternate><LINK title="news du site" 
href="http://www.graphiks.net/communication/nouveautes.xml" 
type=application/rss+xml rel=alternate><LINK media=screen 
href="Connexion a mysql avec php - Cours mysql [1]_fichiers/cours.css" 
type=text/css rel=stylesheet>
<SCRIPT src="Connexion a mysql avec php - Cours mysql [1]_fichiers/js.js" 
type=text/javascript></SCRIPT>

<SCRIPT src="Connexion a mysql avec php - Cours mysql [1]_fichiers/md5.js" 
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

<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
</HEAD>
<BODY onload=frameEat();>
<DIV id=conteneur>
  <DIV id=gauche>
<DIV class=menu>
<H1 class=titre_p2>Menu</H1>
<DIV class=menu_m><A href="#">Accueil</A></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A href="#" class=autremenu  
style="BACKGROUND-COLOR: #fff">UTILISATEUR</A> 
  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this);>
<DIV><A href="#">Cours PHP</A></DIV>
<DIV><A href="#">Fonctions 
PHP</A></DIV>
<DIV><A href="#">Cours 
AJAX</A></DIV>
<DIV><A href="#">Cours 
Ruby</A></DIV>
<DIV><a href="#">Aide web 
serveur</a></DIV>
<DIV><A href="#">Cours 
MySQL</A></DIV>
<DIV><A href="#">Cours 
HTML</A></DIV>
<DIV><A href="#">Cours 
Javascript</A></DIV>
<DIV><A href=""">Cours 
Perl</A></DIV>
<DIV><A href="#">Cours CSS</A></DIV>
<DIV><A href="#">Cours 
Photoshop</A></DIV>
  </DIV></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
href="#">ADMINISTRATEUR</A> 
  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
<DIV><A 
href="#">Programmation</A></DIV>
<DIV><A href="#">Scripts PHP</A></DIV>
<DIV><A href="#">Création de 
site</A></DIV>
<DIV><A href="#">Graphisme</A></DIV>
<DIV><A href="#">Publicité 
gratuite</A></DIV>
<DIV><A href="#">Open source</A></DIV>
<DIV><A href="#">Exprimez 
vous</A></DIV>
<DIV><A href="#">Forum H.S</A></DIV>
<DIV><A href="#">Infos du 
site</A></DIV>
  </DIV></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
href="#">STATISTIQUES</A> 
  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
<DIV><A 
href="#">Portions 
PHP</A></DIV>
<DIV><A 
href="#">Outils</A></DIV>
<DIV><A 
href="#">Générateurs</A></DIV>
<DIV><A 
href="#">Hébergeurs 
gratuits</A></DIV>
<DIV><A 
href="#">Tester mon 
site</A></DIV>
<DIV><A 
href="#">Google 
sitemaps</A></DIV>
<DIV><A 
href="#">Optimisation</A></DIV>
<DIV><A href="#">Normes 
W3C</A></DIV>
<DIV><A href="#">Astuces 
google</A></DIV>
<DIV><A href="#">Liste 
d'annuaire</A></DIV>
  </DIV></DIV>
<DIV><A href="#">INSCRIPTION</A></DIV>
<DIV><A href="#">CONTACT</A></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
href="#">EMAIL</A> 
  <DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
<DIV><A 
href="#">Télécharger</A></DIV>
<DIV><A href="#">Foire aux 
Questions</A></DIV>
<DIV><A href="#">Trucs et 
astuces</A></DIV>
<DIV><A href="#">Démonstration</A></DIV>
<DIV><A 
href="#">Historique</A></DIV>
<DIV><A href="#">Version 
antérieur</A></DIV>
<DIV><A href="#">Mise à 
jour</A></DIV>
  </DIV></DIV>
<DIV>
  <p><A href="#">A PROPOS</A></p>
  </DIV>
</DIV>
  </DIV>
</DIV>
</BODY></HTML>
