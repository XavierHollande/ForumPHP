
<?php

session_start();

include("./header.php");
include("includes/identifiants.php");
include ("./menu.php");

?>

<h2>Football et chicha tabac menthe</h2><br />
<p>Football et chicha compatible ou pas? Bouna Sarr nous repond</p><br />
<p>Voir l'interview complete<a href="">ici</a></p>

<?

$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

//On inclue les 2 pages restantes
include("./includes/functions.php");
include("./includes/constants.php");


?>

<?php
require("./footer.php");
?>
