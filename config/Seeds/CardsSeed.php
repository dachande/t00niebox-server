<?php
use Migrations\AbstractSeed;

/**
 * Playlists seed.
 */
class CardsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'created' => '2017-04-30 20:31:46',
                'modified' => '2017-04-30 20:31:46',
                'uuid' => '57da3a9f',
                'title' => 'Synology Test Playlist',
                'share' => '/volume1/Musik Daniel',
                'files' => serialize([
                    "/Psychedelic/MP3/Dark Whisper - Psychedelic Adventure (2009)",
                ]),
            ],
        ];

        $table = $this->table('cards');
        $table->insert($data)->save();
    }
}
