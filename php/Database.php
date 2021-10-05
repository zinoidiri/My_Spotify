<?php

class Database
{
    public $_db;

    public function dbConnect()
    {
        $idBdd = [];
        $fopen = fopen("../php/idBdd", 'r');
        while (true) {
            $line = fgets($fopen);
            array_push($idBdd, trim($line));
            if (feof($fopen)) break;
        }
        fclose($fopen);
        $db = new PDO('mysql:host=127.0.0.1;dbname=Spotify;charset=utf8', "zino", "jjjj");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    }
}

