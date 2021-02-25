<?php

namespace Movies\Controllers;

// Classe gérant les erreurs (404, 403)
class ErrorController extends MainController {
    /**
     * Méthode gérant l'affichage de la page 404
     *
     * @return void
     */
    public function err404() {
        // On envoie le header 404
        header('HTTP/1.0 404 Not Found');

        // Puis on gère l'affichage
        $this->show('err404');

    }
}