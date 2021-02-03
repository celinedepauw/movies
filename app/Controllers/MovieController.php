<?php

namespace Movies\Controllers;
use Movies\Models\Movie;
use Movies\Models\Category;

class MovieController extends MainController{
    public function movie($variables)
    {
        $movieModel = new Movie();
        $movies = $movieModel->find();

        // récupération de toutes les catégories pour la nav
        $categoryModel = new Category();
        $categories = $categoryModel->findAllForHome();

        $viewVars = [
            'movies' => $movies,
            'categories' =>$categories
        ];

        $this->show('movie', $viewVars); 
       
    }

}