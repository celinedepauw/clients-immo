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
}