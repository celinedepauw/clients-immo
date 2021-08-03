<?php

namespace Immo\Controllers;

class ProjectController extends CoreController
{
    public function list()
    {
        $this->show('project/list');
    }
}