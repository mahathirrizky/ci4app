<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailTransaksi extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'detailtransaksi_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_pelanggan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => "100",
			],
			'id_user'   => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'id_transaksi'   => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'total'   => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'tanggal'   => [
				'type'           => 'TIMESTAMP',
			],
		]);
		$this->forge->addKey('detailtransaksi_id', true);
		$this->forge->addForeignKey('id_user', 'user', 'user_id');
		$this->forge->addForeignKey('id_transaksi', 'transaksi', 'transaksi_id');
		$this->forge->createTable('detailtransaksi'); //
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
