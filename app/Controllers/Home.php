<?php

namespace App\Controllers;

use App\Models\dbModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new dbModel();

            if (!$model->db->tableExists('users')) {

                $forge = \Config\Database::forge();
                $forge->createDatabase('proj1db', true);          
                $fields = [
                    'name'     => [
                        'type'       => 'VARCHAR',
                        'constraint' => '50',
                        'unique'     => true,
                    ],
                    'number1'  => [
                        'type'       => 'INT',
                        'constraint' => 11,
                    ],
                    'number2'  => [
                        'type'       => 'INT',
                        'constraint' => 11,
                    ],
                    'sum'      => [
                        'type'       => 'INT',
                        'constraint' => 11,
                    ],
                ];
                $forge->addField($fields);
                $forge->createTable('users');
            }

        $data['news'] = $model->getPosts();

        echo view("pages/header", $data);
        echo view("pages/home");
        echo view("pages/footer");
    }

    function create(){
        helper('form');
        $model = new dbModel();

        if(! $this->validate([
            'name' => 'required|min_length[3]|max_length[50]',
            'number1' => 'required',
            'number2' => 'required'
        ])){
            echo view('pages/header');
            echo view('pages/create');
            echo view('pages/footer');
        }else{
            try{
                $name = $this->request->getVar('name');
                $number1 = $this->request->getVar('number1');
                $number2 = $this->request->getVar('number2');
                $sum = $number1 + $number2;

                $model->save(
                    [
                        "name" => $name,
                        "number1" => $number1,
                        "number2" => $number2,
                        "sum" => $sum,
                    ]
                );

                $session = \Config\Services::session();
                $session->setFlashdata('success', 'The following data was added to the database:');
                $session->setFlashdata('newline', [$name, $number1, $number2, $sum]);
                return redirect()->to('/');

            } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
                $session = \Config\Services::session();
                $session->setFlashdata('error', 'Duplicate entry!');
                return redirect()->to('/');
            }
        }
    }

    function table(){

        $model = new dbModel();
        $data['news'] = $model->getPosts();

            echo view('pages/header', $data);
            echo view('pages/table');
            echo view('pages/footer');

    }
}