<?php

namespace App\Models;

class BookModel extends \CodeIgniter\Model {

    protected $table = 'book';
    protected $allowedFields = ['title', 'description', 'image', 'author', 'availability',
        'language', 'category', 'pages', 'isbn_no', 'no_copy'];

    public function createBook($data) {
        return $this->save($data);
    }
    
    public function read(){
        return $this->paginate(6);
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
    public function getBooksByCategory($category){
        return $this->where('category',$category)->findAll();
    }
    
    public function getBooksBySearch($search){
        return $this->like('title',$search)->findAll();
    }

}
