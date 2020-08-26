<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'user_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'role' => [
				'type'           => 'INT',
				'constraint'     => 1,
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nomer_telpon'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '13',
			],
		]);
		$this->forge->addKey('user_id', true);
		$this->forge->createTable('user'); //
	}	//


	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
