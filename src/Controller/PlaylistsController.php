<?php
namespace App\Controller;

class PlaylistsController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $playlists = $this->Playlists->find('all', [
            'fields' => [
                'uuid',
                'title',
                'files',
            ],
        ]);

        $this->set([
            'playlists' => $playlists,
            '_serialize' => ['playlists'],
        ]);
    }

    public function view($uuid)
    {
        $playlist = $this->Playlists->find('all', [
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
            'playlist' => $playlist,
            '_serialize' => ['playlist'],
        ]);
    }
}
