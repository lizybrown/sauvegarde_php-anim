<?php
function connexion_BD()
{
    try 
    {
        $db = new PDO("mysql:host=localhost;dbname=nouveau_projet;charset=utf8", "root", "");
        return $db;
    } 
    catch (Exception $e) 
    {
        die($e->getMessage());
    }
}
