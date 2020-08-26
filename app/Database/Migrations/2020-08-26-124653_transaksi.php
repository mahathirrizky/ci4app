<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'transaksi_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'berat'       => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_paketsatuan'   => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
		]);
		$this->forge->addKey('transaksi_id', true);
		$this->forge->addForeignKey('id_paketsatuan', 'paketsatuan', 'paketsatuan_id');
		$this->forge->createTable('transaksi'); //
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
