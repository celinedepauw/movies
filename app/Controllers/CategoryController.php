<?php
namespace Movies\Controllers;
use Movies\Models\Category;
use Movies\Models\Movie;

class CategoryController extends MainController{
    // method that displays the page category
    public function category($idCategory)
    {
        $categoryModel = new Category();

        // I get the category thanks to its id
        $category = $categoryModel->find($idCategory);
      
        // I get all the categories fot home page
        $categories = $categoryModel->findAllForHome();

        // I get all the movies for a specific category
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