<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * @property \App\Model\Table\CardsTable $Cards
 */
class CardsController extends AdminController
{
    public function index()
    {
        $this->set('cards', $this->Cards->find('all'));
    }

    public function view($id)
    {
        $card = $this->Cards->get($id);
        $this->set(compact('card'));
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

        $this->Auth->allow(['index', 'view']);
    }
}
