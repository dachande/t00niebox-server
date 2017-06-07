<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AdminController
{
    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success(__('User successfully added.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Unable to add user.'));
        }

        $this->set('user', $user);
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
        $this->viewBuilder()->setLayout('custom-login');

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
