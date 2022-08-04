<?php



namespace App\Controllers;
use App\Models\CategoryModel;


class Controller extends \CodeIgniter\Controller {
    public $model;
    public $session;
    public function __construct() {
        helper('form');
        $this->model = new CategoryModel();
        $this->session = \Config\Services::session();
    }
    public function create(){
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $file = $this->request->getFile('image');
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                if($file->move(FCPATH . '/uploads/category/', $newName)){
                    $data = ([
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'image' => $newName,
                    ]);
                    $this->model->createcategory($data);
                    $this->session->setTempdata('success'," created succesfully",2);
                    return redirect()->to('category/create');
                }else{
                    echo $file->getErrorString()."".$file->getError();
                }
            }
            }
        return view('category/create');
    }
    public function read(){
        $data = [
                'categories' => $this->model->read(),
                'pager' => $this->model->pager,
            ];
        return view('category/read',$data);
    }
    
    public function update($id){
        $data = [];
        $data['category'] = $this->model->getDataById($id);
        if ($this->request->getMethod() == 'post') {
            $file = $this->request->getFile('image');
            if($file == ''){
                $newName = $data['category']['image'];
            }else{
                $newName = $file->getRandomName();
                $file->move(FCPATH.'/uploads/category/',$newName);
            }
            $data = ([
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'image' => $newName,
            ]);
            $this->model->updateData($id,$data);
            $this->session->setTempdata('success'," created succesfully",2);
            return redirect()->to('/category/read');    
        }
        
        $data['id'] = $id;
        return view('category/update',$data);
    }
    
    public function delete($id){
        $this->model->deleteData($id);
        return redirect()->to('/category/read');
    }
    
}
