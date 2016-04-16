<?php
  $undertekst = "Hilsen til brudeparret";
  $besked = "";  
if (($_SERVER["REMOTE_ADDR"] == "212.242.209.144") ||
    ($_SERVER["REMOTE_ADDR"] == "80.198.165.134"))
    {
  $besked = "
Det er rigtigt, at man ikke kan se hvem der sender 
mail'en .. hvis ikke det står som en del af teksten.

Dette er en teknisk overvejelse, af hensyn til at alle 
skal kunne sende en hilsen.
";
}
  $indhold = "
<h5>Send en hilsen til brudeparret</h5>

<form method=\"post\" action=\"send_mail.php\">
<TEXTAREA name=\"thetext\" rows=\"15\" cols=\"56\" id=\"tekst\">
$besked</TEXTAREA>
<br >
<INPUT type=\"submit\" value=\"Send til brudeparret\" id=\"sub\">
<INPUT type=\"reset\" value=\"Fortryd\" id=\"res\">
</form>
"

?>
