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
                'title' => 'Lorem ipsum dolor sit amet',
                'files' => 'a:2:{i:0;s:61:"/home/pilznille/Musik/alpha006-marlin_janus_-_this_is_science";i:1;s:58:"/home/pilznille/Musik/alpha008-marlin_janus_-_tek-no-logic";}',
                // 'files' => 'a:3:{i:0;s:7:"/foobar";i:1;s:61:"/home/pilznille/Musik/alpha006-marlin_janus_-_this_is_science";i:2;s:58:"/home/pilznille/Musik/alpha008-marlin_janus_-_tek-no-logic";}',
            ],

            [
                'created' => '2017-04-30 20:31:46',
                'modified' => '2017-04-30 20:31:46',
                'uuid' => '0e85acb4',
                'title' => 'Nam finibus nisl quis urna sollicitudin',
                'files' => 'a:1:{i:0;s:69:"/home/pilznille/Musik/Marlin Janus - Ektoplazmic Surgery - 2012 - MP3";}',
            ],

            [
                'created' => '2017-04-30 20:31:46',
                'modified' => '2017-04-30 20:31:46',
                'uuid' => '572c78a2',
                'title' => 'In eget aliquam libero',
                'files' => 'a:3:{i:0;s:134:"/home/pilznille/Musik/Ripped/Die 30 besten Spiel- und Bewegungslieder (2011)/16. Simone Sommerland - Große Uhren machen tick tack.mp3";i:1;s:121:"/home/pilznille/Musik/Ripped/Die 30 besten Spiel- und Bewegungslieder (2011)/17. Simone Sommerland - Wir Fröschelein.mp3";i:2;s:131:"/home/pilznille/Musik/Ripped/Die 30 besten Spiel- und Bewegungslieder (2011)/18. Die Kita-Frösche - Die Maus auf Weltraumreise.mp3";}',
            ],
        ];

        $table = $this->table('cards');
        $table->insert($data)->save();
    }
}
