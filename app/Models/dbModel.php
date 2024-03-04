<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class dbModel extends Model{
        protected $table = "users";
        protected $allowedFields = ['name', 'number1', 'number2', 'sum'];

        public function getPosts($name = null){
            if(!$name){
                return $this->findAll();
            }
            return $this->asArray()
                        ->where(['name' => $name])
                        ->first();
        }
    }