<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKRSTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'mahasiswa_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'mata_kuliah_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'semester' => [
                'type' => 'INT',
                'null' => false,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['diambil', 'dibatalkan'],
                'default' => 'diambil',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('mahasiswa_id', 'mahasiswa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('mata_kuliah_id', 'mata_kuliah', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('krs');
    }

    public function down()
    {
        $this->forge->dropTable('krs');
    }
}
