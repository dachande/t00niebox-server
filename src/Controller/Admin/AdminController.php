<?php
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;

class AdminController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'view',
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
            ],
        ]);
    }

    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        $this->viewBuilder()->theme('AdminLTE');
        $this->set('theme', Configure::read('Theme'));
    }
}
