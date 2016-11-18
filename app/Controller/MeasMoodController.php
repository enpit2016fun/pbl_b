<?php
#namespace App\Controller;

#use App\Controller\AppController;

class MeasMoodController extends AppController {
   public function index() {
    # if ($this->request->is('post') || $this->request->is('put')) {
    #   if(isset($this->request->data['question'])) {
    #     $this->set("");
    #   } else if (isset($this->request->data['add']) {
    #   }
    # }
   }

   public function question() {
   }

   public function result() {
   }

   public function add() {
     $this->loadModel('MeasMood');
     $data = $this->MeasMood->find()->all();
     $this->set('data', $data);
   }
}

?>
