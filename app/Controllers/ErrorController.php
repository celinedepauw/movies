<?php

namespace Movies\Controllers;

// Class that manages errors
class ErrorController extends MainController {
    /**
     * page 404
     *
     * @return void
     */
    public function err404() {
        // I send the header 404
        header('HTTP/1.0 404 Not Found');

        // I display the page
        $this->show('err404');

    }
}