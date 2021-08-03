<?php

namespace Immo\Controllers;

abstract class CoreController
{
    /**
     * Method that displays a page according its name
     *
     * @param string $viewName name of the view file
     * @param array $viewVars array of data to give to the views
     * @return void
     */
    protected function show(string $viewName, $viewVars = [])
    { 
        global $router;

        $viewVars['currentPage'] = $viewName;

        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . '/assets/';
     
        $viewVars['baseUri'] = $_SERVER['BASE_URI'];

        // extract() avoid to create a variable for each element of an array
        extract($viewVars);

        // $viewVars is available in each view file
        require_once __DIR__.'/../views/partials/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/partials/footer.tpl.php';
    }
}


