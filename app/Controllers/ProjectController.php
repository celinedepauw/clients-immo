<?php

namespace Immo\Controllers;
use Immo\Models\Project;
use Immo\Models\Category;
use Immo\Models\Type;
use Immo\Models\Financing;

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

    //public function displayPurchase($idPurchase)
    //{
      //  $purchase = Project::findPurchase($idPurchase);

       // $viewVars = [
       //     'purchase' => $purchase,
        //    'idPurchase' => $idPurchase,
       // ];

      //  $this->show('project/purchase', $viewVars);
   // }

  //  public function displaySale($idSale)
   // {
     //   $sale = Project::findSale($idSale);

     //   $viewVars = [
     //       'sale' => $sale,
      //      'idSale' => $idSale,
      //  ];

     //   $this->show('project/sale', $viewVars);
   // }

    public function displayProject($idProject)
    {
        $project = Project::findProject($idProject);

        $viewVars = [
            'project' => $project,
            'idProject' => $idProject,
        ];

        $project->getProjectCategory() == 1 ? 
        ($this->show('project/purchase', $viewVars)) :
        ($this->show('project/sale', $viewVars));
    }

    public function add()
    {
        $project = new Project();
        $categories = Category::findAllCategories();
        $types = Type::findAllTypes();
        $financings = Financing::findAllFinancings();

        $this->show('project/add', [
            'project' => $project,
            'categories' => $categories,
            'types' => $types,
            'financings' => $financings
        ]);
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
       // var_dump($_POST);

        $project = new Project();
        $project->setClientLastname($lastname);
        $project->setClientFirstname($firstname);
        $project->setClientPhone($phone);
        $project->setClientEmail($email);
        $project->setClientAddress($address);
        $project->setClientTown($town);
        $project->setClientZipcode($zipcode);

        // category
        if($category === "acheteur") {
            $project->setProjectCategory(1);
        }
        else if($category === "vendeur") {
            $project->setProjectCategory(2);
        }
        
        // type
        $project->setTypeName($type);
        if($type === "maison") {
            $project->setProjectType(1);
        }
        else if($type === "appartement") {
            $project->setProjectType(2);
        }
        else if($type === "terrain") {
            $project->setProjectType(3);
        }
        else if($type === "local") {
            $project->setProjectType(4);
        }
        
        $project->setProjectSurface($surface);
        $project->setProjectLandSurface($landSurface);
        $project->setProjectRooms($rooms);
        $project->setProjectLocation($location);
        $project->setProjectPrice($price);

        // financing
        $project->setFinancingName($financing);
        if($financing === "banque") {
            $project->setProjectFinancing(1);
        }
        else if($financing === "courtier") {
            $project->setProjectFinancing(2);
        }
        
        $project->setComments($comments);
        $project->setAppointmentDate($date);

        // var_dump($project);

        $project->insert();

        if($project->getProjectCategory() === 1) {
            header('Location: ' . $router->generate('purchases-list'));
            exit();
        }
        if($project->getProjectCategory() === 2) {
            header('Location: ' . $router->generate('sales-list'));
            exit();
        }
        
    }

    public function edit($idProject)
    {
        $project = Project::findProject($idProject);
        $categories = Category::findAllCategories();
        $types = Type::findAllTypes();
        $financings = Financing::findAllFinancings();

        $viewVars = [
            'project' => $project,
            'idProject' => $idProject,
            'categories' => $categories,
            'types' => $types,
            'financings' => $financings
        ];
        $this->show('project/edit', $viewVars);
    }
}