<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<?php echo $this->Html->css("result.css"); ?>
<?php echo $this->Html->script("jquery.js"); ?>
<title>機嫌表示画面</title>
</head>
<body>

<?php echo $this->Html->image("background.png", array("id" => "background")); ?>
<div id="blackboard"></div>
<div id="gage"></div>
<?php echo $this->Html->image("clipboard.png", array("id" => "clipboard")); ?>

<p id="title">PAPA DOUMEI</p>
<p id="desc">お母さんの機嫌度</p>
<p id="measure_result"><?php echo $measure_result ?>%</p>
<div id="solution_text">
  <p>お母さんの機嫌は非常に危険な状態です。すぐに精神的衛生上、迅速に対処する必要があるでしょう。お母さんは何で悩んでいると思いますか？わからなければ問いかけましょう。女ってのはそんなもんです。選んだからには寄り添い合いましょう。</p>
</div>
<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'add')); ?>
<?php echo $this->Form->submit("質問を追加", array("type" => "image", "src" => "/pbl_b/img/question_add_btn.png", "id" => "addQuestion", "div" => false)); ?>
<?php echo $this->Form->end(); ?>

<?php echo $this->Html->script("result.js"); ?>
</body>
</html>
