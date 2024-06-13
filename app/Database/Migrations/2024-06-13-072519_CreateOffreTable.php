<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOffreTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'offre_reference' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
                'constraint' => '255',
            ],
            'offre_localisation' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'offre_type' => [
                'type' => 'INT',
                'constraint' => '255',
            ],
            'offre_duration' => [
                'type' => 'TEXT',
                'constraint' => '255',
            ],
            'offre_nb_poste' => [
                'type' => 'TEXT',
                'constraint' => '255',
            ],
            'offre_status' => [
                'type' => 'INT',
                'DEFAULT' => '0',
            ],
            'offre_date_end' => [
                'type' => 'DATE',
            ],
            'offre_file' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => '255',
            ],
            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('offre');
    }

    public function down()
    {
        $this->forge->dropTable('offre');
    }
}
