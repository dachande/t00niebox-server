<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class CardsController extends AdminController
{
    public function index()
    {
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->Auth->allow(['index']);
    }
}
