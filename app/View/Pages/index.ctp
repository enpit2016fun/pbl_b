<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<title>トップ画面</title>
</head>
<body>
<h3>PAPA DOUMEI</h3>
<h1>質問に答えるだけで，あなたの機嫌を測定します！</h1>
<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'question')); ?>
<?php echo $this->Form->submit('機嫌を測定', array('name' => 'question')); ?>
<br>
<?php echo $this->Form->submit('質問を追加', array('name' => 'add')); ?>
<?php echo $this->Form->end(); ?>
</body>
</html>
