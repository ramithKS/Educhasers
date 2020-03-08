<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=id12809399_edu;charset=utf8', 'id12809399_admin', 'dbmsProject');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}