<?php
$ques_pt_sum = 0;

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

    global $ques_pt_sum;
    $ques_pt_sum = 0;
    foreach ($result as $item) {
      global $ques_pt_sum;
      $question = $item["Question"];
      $ques_pt_sum += $question["point"];
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
     $selected_pt_sum = 0;
     if ($this->request->isPost()) {
       foreach ($this->request->data['answer'] as $answer_id) {
         $data = $this->Question->find('all', array(
           'conditions' => array('Question.id' => $answer_id),
           'fields' => array('Question.point')
         ));
         $point = $data[0]["Question"]["point"];
         $selected_pt_sum += $point;
       }
       print_r($GLOBALS['ques_pt_sum']);
     }
   }
}

?>
