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
        $project = new Project();

        $this->show('project/add', ['project' => $project]);
    }

    public function addPost()
    {
        global $router;

        $lastname = filter_input(INPUT_POST, 'lastname');
        $firstname = filter_input(INPUT_POST, 'firstname');
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email');
        $address = filter_input(INPUT_POST, 'address');
        $zipcode = filter_input(INPUT_POST, 'zipcode');
        $town = filter_input(INPUT_POST, 'town');
        $category = filter_input(INPUT_POST, 'category');
        $type = filter_input(INPUT_POST, 'type');
        $surface = filter_input(INPUT_POST, 'surface', FILTER_VALIDATE_INT);
        $landSurface = filter_input(INPUT_POST, 'landSurface', FILTER_VALIDATE_INT);
        $rooms = filter_input(INPUT_POST, 'rooms', FILTER_VALIDATE_INT);
        $location = filter_input(INPUT_POST, 'location');
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
        $financing = filter_input(INPUT_POST, 'financing');
        $comments = filter_input(INPUT_POST, 'comments');
        $date = filter_input(INPUT_POST, 'date');

        var_dump($_POST);
        //header('Location: ' . $router->generate('home'));
        //exit();
    }
}