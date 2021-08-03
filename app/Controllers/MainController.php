<?php

namespace Immo\Controllers;

class MainController extends CoreController {

    public function home() {
        
        $this->show('main/home');
    }
}