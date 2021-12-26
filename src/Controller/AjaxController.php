<?php

namespace App\Controller;

use App\Controller\AppController;

class AjaxController extends AppController
{   
    public function index()
    {

    }
    public function initialize(): void

    {
        parent::initialize();
        
        $this->loadModel("Providers");
        
    }

    public function ajaxAddProvider(){

        if ($this->request->is('ajax')) {
            
            $provider = $this->Providers->newEmptyEntity();

            $provider = $this->Providers->patchEntity($provider, $this->request->getData());
            if ($this->Providers->save($provider)) {

                $this->Flash->success(__('Provider has been updated'));

                echo json_encode(array(
                    "status" => 1,
                    "message" => "Provider has been created"
                )); 

                exit;
            }

            $this->Flash->error(__('Failed to save Provider data'));

            echo json_encode(array(
                "status" => 0,
                "message" => "Failed to create"
            )); 

            exit;
        }
    }

    public function ajaxEditProvider(){

        if ($this->request->is('ajax')) {

            $provider = $this->Providers->get($this->request->getData("provider_ID"), [
                'contain' => [],
            ]);

            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Providers->save($provider)) {

                $this->Flash->success(__('Provider has been updated'));

                echo json_encode(array(
                    "status" => 1,
                    "message" => "Provider has been updated"
                )); 

                exit;
            }

            $this->Flash->error(__('Failed to update Provider data'));

            echo json_encode(array(
                "status" => 0,
                "message" => "Failed to update Provider data"
            )); 

            exit;
        }
    }

    public function ajaxDeleteProvider()
    {
        if ($this->request->is('ajax')) {

            $provider = $this->Providers->get($this->request->getData("provider_ID"));

            if ($this->Providers->delete($provider)) {

                $this->Flash->success(__('The Provider has been deleted.'));

                echo json_encode(array(
                    "status" => 1,
                    "message" => "The Provider has been deleted."
                )); 
    
                exit;

            } else {
                $this->Flash->error(__('The Provider could not be deleted. Please, try again.'));

                echo json_encode(array(
                    "status" => 0,
                    "message" => "The Provider could not be deleted. Please, try again."
                )); 
    
                exit;
            }   
        }
    }
    
}