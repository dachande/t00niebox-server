<?php
use Migrations\AbstractSeed;

/**
 * Playlists seed.
 */
class PlaylistsSeed extends AbstractSeed
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
                'uuid' => '57da3a9f-d172-433e-ad3f-383a2e7e7bc3',
                'title' => 'Lorem ipsum dolor sit amet',
                'files' => 'a:2:{i:0;s:61:"/home/pilznille/Musik/alpha006-marlin_janus_-_this_is_science";i:1;s:58:"/home/pilznille/Musik/alpha008-marlin_janus_-_tek-no-logic";}',
            ],

            [
                'created' => '2017-04-30 20:31:46',
                'modified' => '2017-04-30 20:31:46',
                'uuid' => '0e85acb4-5acd-462d-86f6-1a936b7f5e1d',
                'title' => 'Nam finibus nisl quis urna sollicitudin',
                'files' => 'a:1:{i:0;s:69:"/home/pilznille/Musik/Marlin Janus - Ektoplazmic Surgery - 2012 - MP3";}',
            ],

            [
                'created' => '2017-04-30 20:31:46',
                'modified' => '2017-04-30 20:31:46',
                'uuid' => '572c78a2-e145-41d5-a3bc-be0940122f4c',
                'title' => 'In eget aliquam libero',
                'files' => 'a:3:{i:0;s:134:"/home/pilznille/Musik/Ripped/Die 30 besten Spiel- und Bewegungslieder (2011)/16. Simone Sommerland - Große Uhren machen tick tack.mp3";i:1;s:121:"/home/pilznille/Musik/Ripped/Die 30 besten Spiel- und Bewegungslieder (2011)/17. Simone Sommerland - Wir Fröschelein.mp3";i:2;s:131:"/home/pilznille/Musik/Ripped/Die 30 besten Spiel- und Bewegungslieder (2011)/18. Die Kita-Frösche - Die Maus auf Weltraumreise.mp3";}',
            ],
        ];

        $table = $this->table('playlists');
        $table->insert($data)->save();
    }
}
