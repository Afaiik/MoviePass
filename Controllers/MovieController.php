<?php

namespace Controllers;

use DAO\MovieRepository as MovieRepository;
use DAO\GenreRepository as GenreRepository;
use Utils\Utils as Utils;

class MovieController{

    public function ShowMovies(){

        include_once(VIEWS_PATH."workInProgress.php");
    }
    
    public function AddMovieToDatabase(){
        include_once(VIEWS_PATH."workInProgress.php");
    }

    public function Index($message = "")
    {
        Utils::CheckAdmin();
        $movieRepo = new MovieRepository();
        $movieList = $movieRepo->GetAllFromApi();
        $movieList = $movieRepo->GetAll();

        $genreRepo = new GenreRepository();

        $genres = $genreRepo->getAll();

        require_once(VIEWS_PATH."movieList.php");
    }           

    public function MovieSearch(){
        Utils::CheckAdmin();
        if($_POST){
            $movieRepo = new MovieRepository();

            $genreId = Utils::CleanInput($_POST["genre"]);
            $movieList = $movieRepo->GetAllByGenre($genreId);
            
            $genreRepo = new GenreRepository();

            $genres = $genreRepo->getAll();

            require_once(VIEWS_PATH."movieList.php");
        }
        
    }
}
?>