<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

use Cake\ORM\TableRegistry;

class DashboardController extends AdminController
{
    public function index()
    {
        $this->set('cardCount', TableRegistry::get('Cards')->find('all')->count());
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->Auth->allow(['index']);
    }
}
