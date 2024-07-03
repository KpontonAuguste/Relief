<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactTable extends Migration
{
    
    
        public function up()
        {
            $this->forge->addField([
                'id_contact' => [
                    'type' => 'INT',
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'nom' => [
                    'type' => 'varchar',
                    'constraint' => '255',
                ],
                'prenom' => [
                    'type' => 'varchar',
                    'constraint' => '255',
                ],
                'email' => [
                    'type' => 'varchar',
                    'constraint' => '255',
                ],
                'telephone' => [
                    'type' => 'INT',
                    'constraint' => '255',
               ],
                'message' => [
                'type' => 'varchar',
                'constraint' => '255',
                ],
                 'created_at timestamp default current_timestamp',
                 'updated_at timestamp default current_timestamp on update current_timestamp',
            ]);
            $this->forge->addKey('id_contact', true);
            $this->forge->createTable('contact');
        }
    
        public function down()
        {
            $this->forge->dropTable('contact');
        }
    }
    

