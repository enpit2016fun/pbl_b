<?php
$Question = new QuestionController();

class QuestionController extends AppController {
  private $ques_pt_sum = 0;

  public function getSum() {
      return $this->$ques_pt_sum;
  }

  public function setSum($value) {
    $this->$ques_pt_sum += $value;
  }

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

    foreach ($result as $item) {
      global $Question;
      $question = $item["Question"];
      //$ques_pt_sum += $question["point"];
      $Question->setSum($question["point"]);
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
     global $ques_pt_sum;
     if ($this->request->isPost()) {
       foreach ($this->request->data['answer'] as $answer_id) {
         $data = $this->Question->find('all', array(
           'conditions' => array('Question.id' => $answer_id),
           'fields' => array('Question.point')
         ));
         $point = $data[0]["Question"]["point"];
         $selected_pt_sum += $point;
       }
       global $Question;
       $percentage = $selected_pt_sum * (100 / $Question->getSum());
       $this->set('measure_result', $percentage);
     }
   }
}

?>
