<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMahasiswaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unique' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ipk' => [
                'type' => 'FLOAT',
            ],
            'sks_diambil' => [
                'type' => 'INT',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
