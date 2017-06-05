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
                'title' => 'Marlin Janus - Psy-Kinetic Energy Flux',
                'files' => 'a:1:{i:0;s:81:"/home/dachande/Musik/Marlin Janus/alpha001-marlin_janus_-_psy-kinetic_energy_flux";}',
                // 'files' => 'a:3:{i:0;s:7:"/foobar";i:1;s:61:"/home/pilznille/Musik/alpha006-marlin_janus_-_this_is_science";i:2;s:58:"/home/pilznille/Musik/alpha008-marlin_janus_-_tek-no-logic";}',
            ],

            [
                'created' => '2017-04-30 20:31:46',
                'modified' => '2017-04-30 20:31:46',
                'uuid' => '0e85acb4',
                'title' => 'ALPHA002 & ALPHA003',
                'files' => 'a:2:{i:0;s:82:"/home/dachande/Musik/Marlin Janus/alpha002-marlin_janus_-_glow-pathik_audio_killer";i:1;s:68:"/home/dachande/Musik/Marlin Janus/alpha003-marlin_janus_-_one-eighty";}',
            ],

            [
                'created' => '2017-04-30 20:31:46',
                'modified' => '2017-04-30 20:31:46',
                'uuid' => '12345678',
                'title' => 'Some music',
                'files' => 'a:2:{i:0;s:50:"/home/dachande/Musik/05-Innersound_-_Tek_Freak.mp3";i:1;s:74:"/home/dachande/Musik/06-Psy_Cut_Fingers_-_Bombay_Fx_(Multi_Evil_Remix).mp3";}',
            ],
        ];

        $table = $this->table('cards');
        $table->insert($data)->save();
    }
}
