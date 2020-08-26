<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaketSatuan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'paketsatuan_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => "100",
			],
			'harga'       => [
				'type'           => 'INT',
				'constraint'     => 10,
			], //
		]);
		$this->forge->addKey('paketsatuan_id', true);
		$this->forge->createTable('paketsatuan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
