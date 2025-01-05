<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMataKuliahTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'unique' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'teori' => [
                'type' => 'INT',
                'default' => 0,
            ],
            'praktikum' => [
                'type' => 'INT',
                'default' => 0,
            ],
            'min_sks' => [
                'type' => 'INT',
                'null' => true,
            ],
            'angkatan' => [
                'type' => 'INT',
                'null' => true,
            ],
            'semester' => [
                'type' => 'INT',
                'null' => true,
            ],
            'peminatan' => [
                'type' => 'ENUM',
                'constraint' => ['RPLD', 'SC', 'SKKKD'],
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('mata_kuliah');
    }

    public function down()
    {
        $this->forge->dropTable('mata_kuliah');
    }
}
