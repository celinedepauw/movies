<?php

namespace Movies\Controllers;
use Movies\Models\Category;

class MainController{
    // method to display home page
    public function home()
    {
        $categoryModel = new Category();

        // I get all the categories for home page
        $categories = $categoryModel->findAllForHome();

        $viewVars = [
            'categories' => $categories,
        ];

        $this->show('home', $viewVars);
    }


    // method that displays the good page
    protected function show($viewName, $viewVars = [])
    {
        global $router;

        extract($viewVars);

        // I register in $viewVars' array the root's url
        $baseUri = $_SERVER['BASE_URI'];

        require __DIR__ . '/../views/partials/header.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/partials/footer.php';
    }
}