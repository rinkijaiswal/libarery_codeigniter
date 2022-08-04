<?php

namespace App\Models;

class CategoryModel extends \CodeIgniter\Model {
    protected $table = 'category';
    protected $allowedFields =['title','description','image'];
    
    public function createcategory($data){
        return $this->save($data);
    }
    
    public function read(){
        return$this->paginate(4);
    }
    
    public function getAllCategories(){
        return$this->findAll();
    }
    
    public function getDataById($id){
        return $this->where('id',$id)->first();
    }
    
    public function updateData($id,$data){
        return $this->update($id, $data);  
    }
    
    public function deleteData($id){
        return $this->delete($id);
    }
    
}
