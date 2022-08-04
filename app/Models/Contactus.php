<?php

namespace App\Models;

class Contactus extends \CodeIgniter\Model{
    protected $table = 'contact';
    protected $allowedFields = ['name','email','roll_no','query'];
    
     public function contact($data) {
        return $this->save($data);
    }
    
    public function getAllContact(){
        return $this->findAll();
    }
    
}
