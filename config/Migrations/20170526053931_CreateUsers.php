<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');

        $table->addColumn(
            'created',
            'datetime',
            [
                'default' => null,
                'null' => false,
            ]
        );

        $table->addColumn(
            'modified',
            'datetime',
            [
                'default' => null,
                'null' => false,
            ]
        );

        $table->addColumn(
            'username',
            'string',
            [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ]
        );

        $table->addColumn(
            'password',
            'string',
            [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ]
        );

        $table->addColumn(
            'role',
            'string',
            [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ]
        );

        $table->create();
    }
}
