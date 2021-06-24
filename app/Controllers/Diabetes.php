<?php

namespace App\Controllers;

use App\Models\DiabetesModel;

class Diabetes extends BaseController
{
     protected $diabetesModel;

    public function __construct()
    {
        $this->model = new diabetesModel();
        helper('form'); 
    }
    public function index()
    {
        $data = [
            'data' => $this->model->findAll()
        ];
        
        return view('diabetes/index', $data);
    }
    public function add_data()
    {           
                 $inserted = [
                    'nama_user' => $this->request->getPost('nama_user'),
                    'age' => $this->request->getPost('age'),
                    'gender' => $this->request->getPost('gender'),
                    'polyuria' => $this->request->getPost('polyuria'),
                    'polydipsia' => $this->request->getPost('polydipsia'),
                    'sudden_weight_loss' => $this->request->getPost('sudden_weight_loss'),
                    'weakness' => $this->request->getPost('weakness'),
                    'polyphagia' => $this->request->getPost('polyphagia'),
                    'genital_thrush' => $this->request->getPost('genital_thrush'),
                    'visual_blurring' => $this->request->getPost('visual_blurring'),
                    'itching' => $this->request->getPost('itching'),
                    'irritability' => $this->request->getPost('irritability'),
                    'delayed_healing' => $this->request->getPost('delayed_healing'),
                    'partial_paresis' => $this->request->getPost('partial_paresis'),
                    'muscle_stiffness' => $this->request->getPost('muscle_stiffness'),
                    'alopecia' => $this->request->getPost('alopecia'),
                    'obesity' => $this->request->getPost('obesity'),
                ];

                $this->model->insert($inserted);
                return redirect()->to('/diabetes');
    }

    public function delete_data($id)
    {
        $this->model->delete($id);
        return redirect()->to('/diabetes');
    }

    public function update_data($id)
    {
        $inserted = [
            'nama_user' => $this->request->getPost('nama_user'),
            'age' => $this->request->getPost('age'),
            'gender' => $this->request->getPost('gender'),
            'polyuria' => $this->request->getPost('polyuria'),
            'polydipsia' => $this->request->getPost('polydipsia'),
            'sudden_weight_loss' => $this->request->getPost('sudden_weight_loss'),
            'weakness' => $this->request->getPost('weakness'),
            'polyphagia' => $this->request->getPost('polyphagia'),
            'genital_thrush' => $this->request->getPost('genital_thrush'),
            'visual_blurring' => $this->request->getPost('visual_blurring'),
            'itching' => $this->request->getPost('itching'),
            'irritability' => $this->request->getPost('irritability'),
            'delayed_healing' => $this->request->getPost('delayed_healing'),
            'partial_paresis' => $this->request->getPost('partial_paresis'),
            'muscle_stiffness' => $this->request->getPost('muscle_stiffness'),
            'alopecia' => $this->request->getPost('alopecia'),
            'obesity' => $this->request->getPost('obesity'),
        ];

        $this->model->update($id, $inserted);
        return redirect()->to('/diabetes');
    }
    
}