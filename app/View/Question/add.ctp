<!DOCTYPE html>
<html long = 'ja'>
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<?php echo $this->Html->css("add.css"); ?>
<?php echo $this->Html->script("jquery.js"); ?>
<?php echo $this->Html->script("add.js"); ?>
<title>質問追加画面</title>
</head>
<body>
<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'add')); ?>
<?php echo $this->Html->image("background.png", array("id" => "background")); ?>
<?php echo $this->Html->image("clipboard_long.png", array("id" => "clipboard")); ?>
<p id="title">PAPA DOUMEI</p>
<p id="sub_title" class="desc">質問項目追加</p>

<p id="cate_desc" class="desc"><b>1. 追加する質問のカテゴリを選択してください</b></p>
<?php
  foreach ($category as $item) {
    $cate = $item["Category"];
    $id = $cate["id"];
    $name = $cate["category"];
    echo "<input type='checkbox' name='category[]' value='". $id . "' id='label_". $id . "'/><label for='label_". $id . "' class='check_css'>". $name. "</label><br>";
  }
?>

<p id="cate_desc" class="desc"><b>2. 追加する質問を記入してください</b></p>
<?php echo $this->Form->textarea('Question.context', array(
	'rows' => '3', 
	'cols' => '24', 
	'id' => 'ques_area',
	'placeholder' => '(例) 帰りが遅くなることをしっかり連絡していますか',
	'div' => false));
?>

<p id="cate_desc" class="desc"><b>3. 追加する質問の点数を記入してください</b></p>
<div id="pointArea">
<?php echo $this->Form->number('Question.point', array(
        'min' => 1,
 	'max' => 10,
	'id' => 'pt_area',
	'class' => 'float',
        'div' => false)); 
?>
<p id="pt" class="float">点</p>
</div>

<p id="cate_desc" class="desc" style="clear:both;"><b>4. 質問する追加の解決策を記入してください</b></p>
<?php echo $this->Form->textarea('Question.solution', array(
        'rows' => '3', 
        'cols' => '24', 
        'id' => 'solu_area',
        'placeholder' => '(例) 〜〜〜〜〜',
        'div' => false));
?>

<?php echo $this->Form->submit("質問を追加", array(
	"type" => "image", 
	"src" => "/miyai/pbl_b/img/question_add_btn_2.png",
	"id" => "add_btn"));
?>

<?php echo $this->Form->end(); ?>
</body>
</html>
