<?php
    require("Database.php");
    header('Access-Control-Allow-Origin: *'); 
    class getArtists{
        private $db;
        private $name;
        private $artists;
        public function __construct(){
            $newDB = new Database();
            $this->db = $newDB->dbConnect();
            $this->getAllArtists();
        }
        public function getAllArtists(){
            $req = $this->db->prepare("SELECT * FROM artists");
            $req->execute();
            // echo('{"artists":[');
            $artists = $req->fetchAll();
            echo json_encode($artists);
            return json_encode($artists);
            // echo("]}");
        }
    }
    $getartists = new getArtists();
?>