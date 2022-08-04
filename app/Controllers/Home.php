<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\Contactus;
use App\Models\BookModel;

class Home extends BaseController
{
    public function  index()
    {
        $model = new BookModel();
        $model2 = new CategoryModel();
        $data['categories'] = $model2->getAllCategories();
        $data['books'] = $model->read();
        $data['pager'] = $model->pager;
        return view('index',$data);
    }
    public function category(){
        $model = new CategoryModel();
        $data['categories'] = $model->getAllCategories();
        return view('category',$data);
    }
    public function contact(){
        $data = [];
        if($this->request->getMethod() == 'post'){
            $data = ([
                'name'=> $this->request->getVar('name'),
                'email'=> $this->request->getVar('email'),
                'roll_no'=> $this->request->getVar('roll_no'),
                'query'=> $this->request->getVar('query'),
            ]);
            $model = new Contactus();
            $model->contact($data);
            $session = \Config\Services::session();
            $session->setTempdata('success','Contact has been saved' ,2);
            return redirect()->to("/contact");
        }
        return view('/contact',$data);
    }  
    
    public function single($id){
        $model = new BookModel();
        $data['book'] = $model->getDataById($id);
        return view('single',$data);
    }
    public function showcategory($category){
        $model = new BookModel();
        $data['books'] = $model->getBooksByCategory($category);
        $data['category'] = $category;
        return view('showCategory',$data);
    }
    
    public function search(){
        if($this->request->getMethod() == 'post'){
            $search = $this->request->getVar('search');
            $model = new BookModel();
            $data['books'] = $model->getBooksBySearch($search);
            $data['search'] = $search;
            return view('search',$data);
        }
//        return view('search');
    }
}
