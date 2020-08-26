<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaketKiloan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'paketkiloan_id' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'harga'       => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
		]);
		$this->forge->addKey('paketkiloan_id', true);
		$this->forge->createTable('paketkiloan'); ////
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
