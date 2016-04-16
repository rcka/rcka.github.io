<?php
/* Starten på siden .. */
include "menu.php";

/* Identificer den side vi vil have fat i */
if (preg_match('/([[:alnum:]]+)\.html/', $_SERVER["QUERY_STRING"], $regs)) {
  $page = "html/".$regs[1].".php";
} else {
#  $page = "html/praktisk.php";
  $page = "html/billeder.php";
}
if (is_file($page)) {
  include "$page";
} else {
  $undertekst = "";
  $indhold = "
<h1>Intern fejl</h1>
Der opstod desværre en intern fejl på serveren.<br>
<br>
Prøv at hente siden igen og hvis det stadig giver problemer, kontakt
<a href=\"mailto:webmaster@kildetoft.dk\">webmaster@kildetoft.dk</a>
";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>

<head>
  <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
  <title>Maja og Jacob</title>
  <style type="text/css" media="screen">
    @import url( /bryllup.css );
  </style>
  <style type="text/css" media="print">
    @import url( /bryllup_print.css );
  </style>
</head>

<body>

<div id="rap">
<div id="header">
<a href="/images/MajaOgJacob.jpg" target="_blank"><img src="/images/tn_MajaOgJacob.jpg" alt="Klik for at se fuld størrelse"></a>
<h1>Maja og Jacobs bryllup</h1>
<h3><?= $undertekst ?></h3>
</div>
<?
?>

<div id="content">
<div class="post">
<div class="storycontent">
<?= $indhold ?>

</div>
<img src="/images/printer.gif" width="102" height="27" class="pmark" alt=" " />
</div>
</div>

<div id="menu">
<?= $menu; ?>
</div>
<div id="footer">
Denne side vedligeholdes af <a href="mailto:webmaster@kildetoft.dk">webmaster@kildetoft.dk</a> 
&middot; <a target="_top" 
      href="http://validator.w3.org/check?uri=referer">HTML</a>
    &middot; <a target="_top" 
      href="http://jigsaw.w3.org/css-validator/validator?uri=http://kildetoft.dk/bryllup.css">CSS</a>
</div>
</div>
</body>
</html>
