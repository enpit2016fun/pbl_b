<?php
#namespace App\Controller;

#use App\Controller\AppController;

class AddQuestionController extends AppController {
   public function index() {
     $data = $this->AddQuestionTable->find()->all();
     $this->set('data', $data);
   }
}

?>
