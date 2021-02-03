<?php

namespace Movies\Controllers;
use Movies\Models\Category;

class MainController{
    // méthode pour afficher la home page
    public function home()
    {
        $categoryModel = new Category();

        // récupération de toutes les catégories pour la page home
        $categories = $categoryModel->findAllForHome();

        $viewVars = [
            'categories' => $categories,
        ];

        $this->show('home', $viewVars);
    }


    // méthode qui affiche la page demandée
    protected function show($viewName, $viewVars = [])
    {
        global $router;

        extract($viewVars);

        // on enregistre dans le tableau $viewVars l'url racine du site
        $baseUri = $_SERVER['BASE_URI'];

        require __DIR__ . '/../views/partials/header.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/partials/footer.php';
    }
}