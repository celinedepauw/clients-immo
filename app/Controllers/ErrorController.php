<?php

namespace Immo\Controllers;

class ErrorController extends CoreController {

    public function err404() {
        header('HTTP/1.0 404 Not Found');

        $this->show('error/error404');
    }
}