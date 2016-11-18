<?php

class QuestionController extends AppController {
  public function index() {
  }

  public function measure() {
     $data = $this->Question->find('all');
     $this->set('data', $data);
  }

   public function add() {
     if ($this->request->isPost() && isset($this->request->query['context']) && isset($this->request->query['point'])) {
       $this->Question->create();
       $this->Question->save($this->request->data);
       $this->redirect('http://175.184.29.233/cakephp/');
     }
   }

   public function result() {

   }
}

?>
