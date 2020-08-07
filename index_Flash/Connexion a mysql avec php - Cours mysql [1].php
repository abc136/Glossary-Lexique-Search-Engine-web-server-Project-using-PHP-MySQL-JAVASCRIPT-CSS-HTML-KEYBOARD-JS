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

<META content="MSHTML 6.00.2900.2180" name=GENERATOR></HEAD>
<BODY onload=frameEat();>
<DIV id=conteneur><!-- Head -->
  <DIV id=haut></DIV><!-- FIN Head --><!-- Menus gauche -->
<!-- menu droite -->
<DIV id=gauche>
<DIV class=menu>
<H1 class=titre_p2>Menu </H1>
<DIV class=menu_m><A href="http://www.graphiks.net/">Accueil</A></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
style="BACKGROUND-COLOR: #fff" href="http://www.graphiks.net/cours/">Cours 
Internet</A> 
<DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this);>
<DIV><A href="http://www.graphiks.net/cours/cours-php.html">Cours PHP</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/fonctions.html">Fonctions 
PHP</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-ajax.html">Cours 
AJAX</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-ruby.html">Cours 
Ruby</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-serveur.html">Aide web 
serveur</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-mysql.html">Cours 
MySQL</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-html.html">Cours 
HTML</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-javascript.html">Cours 
Javascript</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-perl.html">Cours 
Perl</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-css.html">Cours CSS</A></DIV>
<DIV><A href="http://www.graphiks.net/cours/cours-photoshop.html">Cours 
Photoshop</A></DIV></DIV></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
href="http://www.graphiks.net/forum/forums.html">Le Forum</A> 
<DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
<DIV><A 
href="http://www.graphiks.net/forum/index-1.html">Programmation</A></DIV>
<DIV><A href="http://www.graphiks.net/forum/index-2.html">Scripts PHP</A></DIV>
<DIV><A href="http://www.graphiks.net/forum/index-3.html">Création de 
site</A></DIV>
<DIV><A href="http://www.graphiks.net/forum/index-9.html">Graphisme</A></DIV>
<DIV><A href="http://www.graphiks.net/forum/index-4.html">Publicité 
gratuite</A></DIV>
<DIV><A href="http://www.graphiks.net/forum/index-7.html">Open source</A></DIV>
<DIV><A href="http://www.graphiks.net/forum/index-8.html">Exprimez 
vous</A></DIV>
<DIV><A href="http://www.graphiks.net/forum/index-6.html">Forum H.S</A></DIV>
<DIV><A href="http://www.graphiks.net/forum/index-5.html">Infos du 
site</A></DIV></DIV></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
href="http://www.graphiks.net/outils-webmaster/">Outils webmaster</A> 
<DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
<DIV><A 
href="http://www.graphiks.net/outils-webmaster/portions-php/index.html">Portions 
PHP</A></DIV>
<DIV><A 
href="http://www.graphiks.net/outils-webmaster/outils.html">Outils</A></DIV>
<DIV><A 
href="http://www.graphiks.net/outils-webmaster/generateurs.html">Générateurs</A></DIV>
<DIV><A 
href="http://www.graphiks.net/outils-webmaster/hebergeurs-gratuit.html">Hébergeurs 
gratuits</A></DIV>
<DIV><A 
href="http://www.graphiks.net/outils-webmaster/tester-mon-site.html">Tester mon 
site</A></DIV>
<DIV><A 
href="http://www.graphiks.net/referencement/google-sitemaps-plan-site.html">Google 
sitemaps</A></DIV>
<DIV><A 
href="http://www.graphiks.net/referencement/optimisation.html">Optimisation</A></DIV>
<DIV><A href="http://www.graphiks.net/referencement/normes.html">Normes 
W3C</A></DIV>
<DIV><A href="http://www.graphiks.net/referencement/astuces-google.html">Astuces 
google</A></DIV>
<DIV><A href="http://www.graphiks.net/referencement/liste-annuaire.html">Liste 
d'annuaire</A></DIV></DIV></DIV>
<DIV><A href="http://www.graphiks.net/annuaire/">Annuaire</A></DIV>
<DIV><A href="http://www.graphiks.net/actualite/">Actualités</A></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
href="http://www.graphiks.net/myspeach/">MySpeach</A> 
<DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
<DIV><A 
href="http://www.graphiks.net/scripts-php/script-7-1-0.html">Télécharger</A></DIV>
<DIV><A href="http://www.graphiks.net/myspeach/faq-myspeach.html">Foire aux 
Questions</A></DIV>
<DIV><A href="http://www.graphiks.net/myspeach/trucs-et-astuces.html">Trucs et 
astuces</A></DIV>
<DIV><A href="http://www.graphiks.net/demo/myspeach.php">Démonstration</A></DIV>
<DIV><A 
href="http://www.graphiks.net/myspeach/historique-myspeach.html">Historique</A></DIV>
<DIV><A href="http://www.graphiks.net/myspeach/versions-myspeach.html">Version 
antérieur</A></DIV>
<DIV><A href="http://www.graphiks.net/myspeach/maj-myspeach.html">Mise à 
jours</A></DIV></DIV></DIV>
<DIV><A href="http://www.graphiks.net/scripts-php/">Scripts PHP</A></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
href="http://www.graphiks.net/communication/">Le site</A> 
<DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
<DIV><A href="http://www.graphiks.net/actualite/">Actualités du web</A></DIV>
<DIV><A href="http://www.graphiks.net/communication/nouveautes.html">News du 
site</A></DIV>
<DIV><A href="http://www.graphiks.net/communication/flux-rss.html">Nos flux 
RSS</A></DIV>
<DIV><A 
href="http://www.graphiks.net/communication/creation-de-site.html">Création de 
site</A></DIV>
<DIV><A href="http://www.graphiks.net/communication/contact.html">Contactez-nous 
!</A></DIV>
<DIV><A href="http://www.graphiks.net/communication/equipe.html">L'équipe 
Graphiks</A></DIV>
<DIV><A 
href="http://www.graphiks.net/communication/informations.html">Informations</A></DIV>
<DIV><A href="http://www.graphiks.net/echange/bannieres.html">Nos 
bannieres</A></DIV>
<DIV><A 
href="http://www.graphiks.net/echange/partenaire.html">Partenaires</A></DIV></DIV></DIV>
<DIV onmouseover=montre(this.childNodes[2]) 
onmouseout=cache(this.childNodes[2])><A class=autremenu 
href="http://www.graphiks.net/goodies/">Les Extras</A> 
<DIV class=sous_menu onmouseover=montre(this); onmouseout=cache(this)>
<DIV><A href="http://www.graphiks.net/goodies/zestory/index.html">Ze 
Story</A></DIV>
<DIV><A href="http://www.graphiks.net/goodies/galerie/index.html">Galerie 
images</A></DIV>
<DIV><A href="http://www.graphiks.net/goodies/jeux/reflexes.html">Reflexes 
test</A></DIV>
<DIV><A href="http://www.graphiks.net/goodies/jeux/jeux-flash.html">Jeux 
flash</A></DIV>
<DIV><A 
href="http://www.graphiks.net/goodies/cadavre-exquis/sommaire.html">Cadavre 
exquis</A></DIV>
<DIV><A href="http://www.graphiks.net/echange/lien.html">Des liens</A></DIV>
<DIV><A 
href="http://www.graphiks.net/echange/remerciements.html">Remerciements</A></DIV></DIV></DIV></DIV>
</DIV>
<!-- Contenu -->
<DIV id=centre>
<DIV class=yot>
<H1>Connexion a mysql avec php - Cours mysql</H1></DIV>
<!-- footer -->
<DIV style="CLEAR: both"></DIV>
</DIV>
<!-- FIN contenu --></DIV></BODY></HTML>
