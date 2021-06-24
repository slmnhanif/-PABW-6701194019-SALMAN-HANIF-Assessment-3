<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'nama_user' => 'Salman Hanif',
			'age' => '21',
			'gender' => 'male',
            'polyuria' => 'yes',
            'polydipsia' => 'no',
            'sudden_weight_loss' => 'yes',
            'weakness' => 'no',
            'polyphagia' => 'yes',
            'genital_thrush' => 'no',
            'visual_blurring' => 'yes',
            'itching' => 'no',
            'irritability' => 'no',
            'delayed_healing' => 'no',
            'partial_paresis' => 'no',
            'muscle_stiffness' => 'no',
            'alopecia' => 'no',
            'obesity' => 'no',
		];
		$this->db->table('data')->insert($data);
	}
}
