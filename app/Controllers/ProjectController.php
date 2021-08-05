<?php

namespace Immo\Controllers;
use Immo\Models\Project;

class ProjectController extends CoreController
{
    public function list()
    {
        $projectsList = Project::findAll();

        $viewVars = [
            'projectsList' => $projectsList,
        ];

        $this->show('project/list', $viewVars);
    }
}