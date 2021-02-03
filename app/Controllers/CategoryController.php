<?php
namespace Movies\Controllers;
use Movies\Models\Category;
use Movies\Models\Movie;

class CategoryController{
    // méthode pour afficher la page category
    public function category($variables)
    {
        $idCategory = $variables['idCategory'];

        $categoryModel = new Category();

        // récupération de la catégorie grace à son id
        $category = $categoryModel->find($idCategory);

        // récupération de toutes les catégories pour la page home
        $categories = $categoryModel->findAllForHome();

        // récupération de tous les films pour une catégorie donnée
        $movieModel = new Movie();
        $movies = $movieModel->findAllInCategory($idCategory);

        $viewVars = [
            'idCategory' => $variables['idCategory'],
            'category' => $category,
            'categories' => $categories,
            'movies' => $movies,
        ];

        $this->show('category', $viewVars);
    }

    // méthode qui affiche la page demandée
    private function show($viewName, $viewVars = [])
    {
        global $router;

        extract($viewVars);


        $baseUri = $_SERVER['BASE_URI'];

        require __DIR__ . '/../views/partials/header.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/partials/footer.php';
    }
}