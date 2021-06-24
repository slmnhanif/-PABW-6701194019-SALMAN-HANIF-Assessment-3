<?php

namespace App\Models;

use CodeIgniter\Model;

class DiabetesModel extends Model
{
    protected $table         = 'data';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $allowedFields = ['nama_user', 'age', 'gender', 'polyuria','polydipsia', 'sudden_weight_loss', 'weakness', 'polyphagia','genital_thrush', 'visual_blurring', 'itching', 'irritability','delayed_healing', 'partial_paresis', 'muscle_stiffness', 'alopecia','obesity'];
    protected $useTimestamps = true;

}