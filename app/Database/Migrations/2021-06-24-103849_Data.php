<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'	=> 'BIGINT',
				'constraint'	=> '50',
				'unsigned'		=> true,
				'auto_increment'=> true
			],
			'nama_user' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '50',
			],
			'age' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '5',
			],
			'gender' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'polyuria' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'polydipsia' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'sudden_weight_loss' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'weakness' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'polyphagia' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'genital_thrush' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'visual_blurring' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'itching' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'irritability' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'delayed_healing' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'partial_paresis' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'muscle_stiffness' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'alopecia' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'obesity' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'created_at' => [
				'type' => 'TEXT',
                'null' => true,
			],
			'updated_at' => [
				'type' => 'TEXT',
                'null' => true,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('data');
	}

	public function down()
	{
		$this->forge->dropTable('data');
	}
}
