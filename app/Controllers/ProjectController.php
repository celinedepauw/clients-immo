<?php

namespace Immo\Controllers;
use Immo\Models\Project;

class ProjectController extends CoreController
{
    public function listSales()
    {
        $salesList = Project::findAllSales();

        $viewVars = [
            'salesList' => $salesList,
        ];

        $this->show('project/sales', $viewVars);
    }

    public function listPurchases()
    {
        $purchasesList = Project::findAllPurchases();

        $viewVars = [
            'purchasesList' => $purchasesList,
        ];

        $this->show('project/purchases', $viewVars);
    }

    public function displayPurchase($idProject)
    {
        $purchase = Project::find($idProject);

        $viewVars = [
            'purchase' => $purchase,
            'idProject' => $idProject,
        ];

        $this->show('project/purchase', $viewVars);
    }

    public function add()
    {
        $this->show('project/add', $viewVars);
    }
}