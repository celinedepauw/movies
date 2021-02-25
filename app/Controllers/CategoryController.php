<?php
namespace Movies\Controllers;
use Movies\Models\Category;
use Movies\Models\Movie;

class CategoryController extends MainController{
    // méthode pour afficher la page category
    public function category($idCategory)
    {
        $categoryModel = new Category();

        // récupération de la catégorie grace à son id
        $category = $categoryModel->find($idCategory);
      
        // récupération de toutes les catégories pour la page home
        $categories = $categoryModel->findAllForHome();

        // récupération de tous les films pour une catégorie donnée
        $movieModel = new Movie();
        $movies = $movieModel->findAllInCategory($idCategory);

        $viewVars = [
            'idCategory' => $idCategory,
            'category' => $category,
            'categories' => $categories,
            'movies' => $movies,
        ];

        $this->show('category', $viewVars);
    }

}