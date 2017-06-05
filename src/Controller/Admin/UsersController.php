<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class UsersController extends AdminController
{
    public function index()
    {
    }

    public function view($id)
    {
    }

    public function add()
    {
    }

    public function edit($id)
    {
    }

    public function delete($id)
    {
    }

    public function toggle($id)
    {
    }

    public function login()
    {
        // Set login-box layout
        $this->viewBuilder()->setLayout('login');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }

            $this->Flash->error(__('Invalid username or password. Please try again.'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->Auth->allow(['add', 'logout']);
    }
}
