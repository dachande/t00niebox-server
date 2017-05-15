<?php
namespace App\Controller;

class CardsController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $cards = $this->Cards->find('all', [
            'fields' => [
                'uuid',
                'title',
                'files',
            ],
        ]);

        $this->set([
            'cards' => $cards,
            '_serialize' => ['cards'],
        ]);
    }

    public function view($uuid)
    {
        $card = $this->Cards->find('all', [
            'conditions' => [
                'uuid' => $uuid,
            ],
            'fields' => [
                'uuid',
                'title',
                'files',
            ],
        ])->first();

        $this->set([
            'card' => $card,
            '_serialize' => ['card'],
        ]);
    }
}
