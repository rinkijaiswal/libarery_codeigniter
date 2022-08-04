<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\CategoryModel;

class BookController extends \CodeIgniter\Controller {

    public $model;
    public $session;
    public function __construct() {
        helper('form');
        $this->model = new BookModel();
        $this->session = \Config\Services::session();
    }

    public function book(){
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $file = $this->request->getFile('image');
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                if($file->move(FCPATH . '/uploads/books/', $newName)){
                    $data = ([
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'image' => $newName,
                    'author' => $this->request->getPost('author'),
                    'availability' => $this->request->getPost('availability'),
                    'language' =>$this->request->getPost('language'),
                    'category' =>$this->request->getPost('category'),
                    'pages' =>$this->request->getPost('pages'),
                    'isbn_no'=>$this->request->getPost('isbn_no'),
                    'no_copy'=>$this->request->getPost('no_copy')
                    ]);
                    $this->model->createBook($data);
                    $this->session->setTempdata('success'," created succesfully",2);
                    return redirect()->to('/book/read');
                }else{
                    echo $file->getErrorString()."".$file->getError();
                }
            }
            }
            $categoryModel = new CategoryModel();
            $data['categories'] = $categoryModel->getAllCategories();
        return view('book/createbook',$data);
    }
    
    public function read(){
        $data = [
                'books' => $this->model->read(),
                'pager' => $this->model->pager,
            ];
        return view('book/read',$data);
    }
    
    public function update($id){
        $data = [];
        $data['blog'] = $this->model->getDataById($id);
        if ($this->request->getMethod() == 'post') {
            $file = $this->request->getFile('image');
            if($file == ''){
                $newName = $data['blog']['image'];
            }else{
                $newName = $file->getRandomName();
                $file->move(FCPATH.'/uploads/',$newName);
            }
            $data = ([
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'image' => $newName,
                'author' => $this->request->getPost('author'),
                'availability' => $this->request->getPost('availability'),
                'language' =>$this->request->getPost('language'),
                'category' =>$this->request->getPost('category'),
                'pages' =>$this->request->getPost('pages'),
                'isbn_no'=>$this->request->getPost('isbn_no'),
                'no_copy'=>$this->request->getPost('no_copy')
            ]);
            $this->model->updateData($id,$data);
            $this->session->setTempdata('success'," updated succesfully",2);
            return redirect()->to('/book/read');
            }
        
        $data['id'] = $id;
        return view('book/update',$data);
    }
    
    public function delete($id){
        $this->model->deleteData($id);
        return redirect()->to('/book/read');
    }
}
    