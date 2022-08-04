<?php


namespace App\Models;


class IssueModel extends \CodeIgniter\Model {
    protected $table = 'book_issued';
    protected $allowedFields = ['book_name','isbn_no','issue_date','return_date','student_name','class','semester'];
    
    public function bookissue($data){
        return $this->save($data);
    }
    
    public function get(){
        return $this->findAll();
    }
    
}
