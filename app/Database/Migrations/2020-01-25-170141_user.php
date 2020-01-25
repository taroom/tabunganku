<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'uid' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 32,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 32,
			],
			'last_log' => [
				'type' => 'DATETIME',
			]
		]);

		$this->forge->addKey('uid', true);

		if($this->forge->createTable('user')){
			echo "Tabel user sudah dibuat\n";
		}
	}

	//--------------------------------------------------------------------

	public function down()
	{
		if($this->forge->dropTable('user'))
		{
			echo "Tabel user sudah dihapus\n";
		}
	}
}
