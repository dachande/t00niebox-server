<?php
namespace App\Controller;

class CardsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    public function index()
    {
        $cards = $this->Cards->find('all', [
            'fields' => [
                'uuid',
                'title',
                'share',
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
                'share',
                'files',
            ],
        ])->first();

        $this->set([
            'card' => $card,
            '_serialize' => ['card'],
        ]);
    }
}
