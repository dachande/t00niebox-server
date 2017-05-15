<?php
use Migrations\AbstractMigration;

class CreateCards extends AbstractMigration
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
        $table = $this->table('cards');

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
            'uuid',
            'string',
            [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]
        );

        $table->addColumn(
            'title',
            'string',
            [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]
        );

        $table->addColumn(
            'files',
            'text',
            [
                'default' => null,
                'null' => false,
            ]
        );

        $table->create();
    }
}
