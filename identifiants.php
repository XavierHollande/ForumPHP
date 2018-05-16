//Connection à la base de donnée

<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=Forum', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
