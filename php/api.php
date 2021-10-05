<?php
require_once("Router.php");
require_once(find_file('Database.php'));

class getSearch
{
    private $bdd;

    public function __construct()
    {
        $mybdd = new Database;
        $this->bdd = $mybdd->dbConnect();
    }

    public function searchMusic($name)
    {
        $searchMusic = $this->bdd->prepare("SELECT * FROM tracks WHERE name=?");
        $searchMusic->execute([$name]);
        while ($data = $searchMusic->fetch()) {   
            echo json_encode($data);
        }
    }

    public function searchAlbums($name)
    {
        $searchMusic = $this->bdd->prepare("SELECT * FROM albums WHERE name=?");
        $searchMusic->execute([$name]);

        while ($data = $searchMusic->fetch()) {
            echo json_encode($data);
        }
    }

    public function searchArtist($name)
    {
        $searchMusic = $this->bdd->prepare("SELECT * FROM artists WHERE name=?");
        $searchMusic->execute([$name]);

        while ($data = $searchMusic->fetch()) {
            echo json_encode($data);
        }
    }

    public function searchGenre($name)
    {
        $searchMusic = $this->bdd->prepare("SELECT * FROM genres WHERE name=?");
        $searchMusic->execute([$name]);

        while ($data = $searchMusic->fetch()) {
            echo json_encode($data);
        }
    }

    public function searchGenreAlbums($name)
    {
        $searchMusic = $this->bdd->prepare("SELECT * FROM genres_albums WHERE name=?");
        $searchMusic->execute([$name]);

        while ($data = $searchMusic->fetch()) {
            echo json_encode($data);
        }
    }
}

$tracksName = htmlspecialchars($_POST['tracksname']);
$albumsName = htmlspecialchars($_POST['albumsname']);
$artistsName = htmlspecialchars($_POST['artistsname']);
$genreName = htmlspecialchars($_POST['genrename']);

$music = new getSearch;
$music->searchMusic($tracksName);
$music->searchAlbums($albumsName);
$music->searchArtist($artistsName);
$music->searchGenre($genreName);

$music->searchMusic("Nada");
$music->searchAlbums("8-Bit Pimp");
$music->searchArtist("A_Rival");
$music->searchGenre("World");
var_dump($_POST);