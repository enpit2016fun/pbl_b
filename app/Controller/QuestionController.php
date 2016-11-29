<?php

class QuestionController extends AppController {
  public function index() {
  }

  public function measure() {
    App::import('Model', 'Category');
    $this->Category = new Category();
    $category_list= $this->Category->find('all');

    $result = array();
    foreach ($category_list as $category) {
      $cate_id = $category['Category']['id'];
      $cate = $category['Category']['category'];

      $data = $this->Question->find('all', array(
        'conditions' => array('Question.cate_id' => $cate_id),
        'order' => 'rand()',    // ORDER BY RAND()
        'limit' => 3            // 3件取得
      ));

      $result[] = $data[0];
    }

     $this->set('data', $result);
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
     $answer = "";
     if ($this->request->isPost()) {
       print_r($this->request->data['answer']);
     }
   }
}

?>
