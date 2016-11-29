<?php

class QuestionController extends AppController {
  public function index() {
  }

  public function measure() {
     App::import('Model', 'Category');
     $this->Category = new Category();
     $category_list= $this->Category->find('all');

    foreach ($category_list as $category) {
      $cate_id = $category['Category']['id'];
      $cate = $category['Category']['category'];
      print_r($cate_id);
      print_r($cate);
    }

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
