<?php

class QuestionController extends AppController {
  public function index() {
  }

  public function measure() {
     $data = $this->Question->find('all');
     $this->set('data', $data);
  }

   public function add() {
     $data = $this->request->data("Question");
     if ($this->request->isPost() && isset($data['context']) && isset($data['point'])) {
       $this->Question->create();
       $this->Question->save($this->request->data);
       $this->redirect('http://175.184.29.233/cakephp/');
     }
   }

   public function result() {

   }
}

?>
