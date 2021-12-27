<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Prorders Controller
 *
 * @method \App\Model\Entity\Prorder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrordersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $prorders = $this->paginate($this->Prorders);

        $this->set(compact('prorders'));
    }

    /**
     * View method
     *
     * @param string|null $id Prorder id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prorder = $this->Prorders->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('prorder'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prorder = $this->Prorders->newEmptyEntity();
        if ($this->request->is('post')) {
            $prorder = $this->Prorders->patchEntity($prorder, $this->request->getData());
            if ($this->Prorders->save($prorder)) {
                $this->Flash->success(__('The prorder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prorder could not be saved. Please, try again.'));
        }
        $this->set(compact('prorder'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prorder id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prorder = $this->Prorders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prorder = $this->Prorders->patchEntity($prorder, $this->request->getData());
            if ($this->Prorders->save($prorder)) {
                $this->Flash->success(__('The prorder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prorder could not be saved. Please, try again.'));
        }
        $this->set(compact('prorder'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prorder id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prorder = $this->Prorders->get($id);
        if ($this->Prorders->delete($prorder)) {
            $this->Flash->success(__('The prorder has been deleted.'));
        } else {
            $this->Flash->error(__('The prorder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
