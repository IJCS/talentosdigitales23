<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class usuario extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'ID'          => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'usuario'          => [
        'type'           => 'VARCHAR',
        'constraint'     => 100,
        'unsigned'       => TRUE
      ],
      'pass'       => [
        'type'           => 'VARCHAR',
        'constraint'     => 100,
        'unsigned'       => TRUE
      ],
      'mail' => [
        'type'           => 'VARCHAR',
        'constraint'     => 100,
        'unsigned'       => TRUE
      ],
      'creacion' => [
        'type'           => 'DateTime',
        'unsigned'       => TRUE
      ],
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('movies');
  }

  //--------------------------------------------------------------------

  public function down()
  {
    $this->forge->dropTable('movies');
  }
}
