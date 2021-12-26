<?php

namespace App\Controller;

use App\Controller\AppController;

class ProvidersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        //Cargamos el modelo providers
        $this->loadModel("Providers");
        //Y definimos el archivo app.php dentro de /templates/layout/app.php como nuestralayout
        $this->viewBuilder()->setLayout("app");
    }

    public function addProvider()
    {
        $this->set("title", "Add Provider");
    }

    public function listProviders()
    {
        $providers = $this->Providers->find()->toList();
        $this->set("title", "List Provider");
        $this->set(compact("providers"));
    }

    public function editProvider($ID = null)
    {
        $provider = $this->Providers->get($ID, [
            'contain' => [],
        ]);
        $this->set(compact('provider'));
        $this->set("title", "Edit Provider");
    }
}