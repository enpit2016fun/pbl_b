<?php
#namespace App\Controller;

#use App\Controller\AppController;

class QuestionController extends AppController {
   public function index() {
     $data = $this->Question->find("all");
     $this->set('data', $data);
   }

   public function add() {
      error_log($this->request->data, 3, "/var/tmp/my-errors.log");
     if ($this->request->isPost()) {
       $this->Question->create();
       $this->Question->save($this->request->data);
     }
   }
}

?>
