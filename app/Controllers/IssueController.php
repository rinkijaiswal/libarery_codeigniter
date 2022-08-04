<?php

namespace App\Controllers;

use App\Models\IssueModel;
use App\Models\CartModel;

class IssueController extends \CodeIgniter\Controller {

    public $model;
    public function __construct() {
        $this->model = new IssueModel();
    }

    public function issue() {
        if ($this->request->getMethod() == 'post') {
            $CartModel = new CartModel();
            $data['books'] = $CartModel->getAll();
            foreach($data['books'] as $book){
                $data = [
                'book_name' => $book['name'],
                'isbn_no' => $book['isbn_no'],
                'issue_date' => '15/05/2022',
                'return_date' => '15/06/2022',
                'student_name' => $this->request->getVar('student_name'),
                'class' => $this->request->getVar('class'),
                'semester' => $this->request->getVar('semester')
                ];
               $this->model->bookissue($data);
            }
            $CartModel->emptyTable('cart');
            return redirect()->to('/');
        }
    }
    public function delete($id){
        $this->model->delete($id);
        return redirect()->to(base_url('admin/issue'));
    }

}
