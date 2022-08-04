<?php

namespace App\Models;

class CartModel extends \CodeIgniter\Model{
    protected $table = 'Cart';
    protected $allowedFields = ['name','book_id','isbn_no','image'];
    
    public function cart($data){
        return $this->save($data);
    }
    
    public function getAll(){
        return $this->findAll();
    }
    
    public function getCartByBookId($id){
        return $this->where('book_id',$id)->first();
    }
    
    public function getCount(){
        return $this->countAllResults();
    }
 
}
