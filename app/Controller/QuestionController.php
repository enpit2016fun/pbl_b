<?php

class QuestionController extends AppController {
  public function index() {
  }

  public function measure() {
     App::import('Model', 'Category');
     $this->Category = new Category();
     $test = $this->Category->find('all');
     print_r($test);
     
     $data = $this->Question->find('all');
     $this->set('data', $data);
  }

   public function add() {
     $context = $this->request->data("Question.context");
     $point = $this->request->data("Question.point");
     if ($this->request->isPost() && $context != "" && $point != "") {
       $this->Question->create();
       $this->Question->save($this->request->data);
       $this->redirect('http://175.184.29.233/cakephp/');
     }
   }

   public function result() {

   }
}

?>
