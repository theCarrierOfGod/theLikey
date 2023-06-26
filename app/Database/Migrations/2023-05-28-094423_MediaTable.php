<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MediaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 25,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'V' => [
                'type'           => 'VARCHAR',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'D' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_by' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('media');
    }

    public function down()
    {
        $this->forge->dropTable('media');
    }
}
