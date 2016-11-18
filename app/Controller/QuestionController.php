<?php
#namespace App\Controller;

#use App\Controller\AppController;

class QuestionController extends AppController {
   public function index() {
     $data = $this->Question->find('all');
     $this->set('data', $data);
   }

   public function add() {
     if ($this->request->isPost()) {
       $this->Question->create();
       $this->Question->save($this->request->data);
     }
     $this->redirect('http://175.184.29.233/miyai/cakephp/');
   }
}

?>
