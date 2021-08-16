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

    public function displayPurchase($idPurchase)
    {
        $purchase = Project::findPurchase($idPurchase);

        $viewVars = [
            'purchase' => $purchase,
            'idPurchase' => $idPurchase,
        ];

        $this->show('project/purchase', $viewVars);
    }

    public function displaySale($idSale)
    {
        $sale = Project::findSale($idSale);

        $viewVars = [
            'sale' => $sale,
            'idSale' => $idSale,
        ];

        $this->show('project/sale', $viewVars);
    }

    public function add()
    {
        $this->show('project/add');
    }
}