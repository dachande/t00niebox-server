<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class CardsController extends AdminController
{
    public function index()
    {
        $cards = \Cake\ORM\TableRegistry::get('Cards')->find('all');
        $this->set('cards', $cards);
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

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->Auth->allow(['index']);
    }
}
