<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
<?php  echo $this->Html->css("top.css"); ?>
<title>トップ画面</title>
</head>
<body>
<?php echo $this->Html->image("background.png", array("id" => "background")); ?>

<p id="title">PAPA DOUMEI</p>
<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'measure')); ?>
<?php echo $this->Form->submit("機嫌を測定", array("type" => "image", "src" => "/papa-doumei/img/measure_btn.png", "id" => "measure", "div" => false)); ?>
<?php echo $this->Form->end(); ?>


<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'add')); ?>
<?php echo $this->Form->submit("質問を追加", array("type" => "image", "src" => "/papa-doumei/img/question_add.png", "id" => "addQuestion", "div" => false)); ?>
<?php echo $this->Form->end(); ?>
</body>
</html>
