<?php
class QuestionController extends AppController {
  public $autoLayout = false;
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
      $question = $item["Question"];
    }
     $this->set('data', $result);
  }

   public function add() {
     $context = $this->request->data("Question.context");
     $point = $this->request->data("Question.point");
     $solution = $this->request->data("Question.solution");

     App::import('Model', 'Solution');
     $this->Solution = new Solution();
     if ($this->request->isPost() && $context != "" && $point != "") {
       foreach ($this->request->data['category'] as $cate_id) {
         $this->Question->create();
         $this->Question->set(array(
           'cate_id' => $cate_id,
           'context' => $context,
           'point' => $point
         ));
         $this->Question->save();

         $this->Solution->create();
         $this->Solution->set(array(
           'cate_id' => $cate_id,
           'solution' => $solution,
         ));
         $this->Solution->save();
       }

       $this->redirect('http://175.184.29.233/cakephp/');
     }

     App::import('Model', 'Category');
     $this->Category = new Category();
     $category_list = $this->Category->find('all');
     $this->set('category', $category_list);
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

       $percentage = $selected_pt_sum * (100 / $this->request->data['sum']);
       $this->set('measure_result', (int)$percentage);
     }
   }
}

?>
