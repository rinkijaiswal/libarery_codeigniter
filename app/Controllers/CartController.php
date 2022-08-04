<?php

namespace App\Controllers;
use App\Models\CartModel;

class CartController extends \CodeIgniter\Controller{
    
    public $session;
    public $model;
    
    public function __construct() {
        $this->session = \Config\Services::session();
        $this->model = new CartModel();
    }

    public function index(){
        $data = [];
        if($this->request->getMethod() == 'post'){
            $book_id =$this->request->getVar('book_id');
            $result = $this->model->getCartByBookId($book_id);
            if($result){
                $this->session->setTempdata('error','book already added to cart');
                return redirect()->to('/single/'.$book_id);
            }else{
                $data = [
                    'name' => $this->request->getVar('name'),
                    'book_id' => $book_id,
                    'isbn_no' => $this->request->getVar('isbn_no'),
                    'image' => $this->request->getVar('image')
                ];
                $this->model->cart($data);
                $this->session->setTempdata('succes','book added to cart');
            }
        }
          $data['carts'] = $this->model->getAll();
          return view('cart',$data);
    }
    
    public function delete($id){
        $this->model->delete($id);
        return redirect()->to('/cart/create');
    }
    
}
