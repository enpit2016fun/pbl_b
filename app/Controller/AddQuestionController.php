<?php
#namespace App\Controller;

#use App\Controller\AppController;

class AddQuestionController extends AppController {
   public function index() {
     $data = $this->AddQuestion->find()->all();
     $this->set('data', $data);
   }
}

?>
