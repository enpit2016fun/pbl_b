<!DOCTYPE html>
<html long = 'ja'>
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<title>質問追加画面</title>
</head>
<body>
<h1>質問追加画面</h1>

<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'add')); ?>

<h5>カテゴリ</h5>
<?php
  foreach ($category as $item) {
    $cate = $item["Category"];
    $id = $cate["id"];
    $name = $cate["category"];
    echo "<p>". $name ."</p><input type='checkbox' name='answer[]' value='" . $id . "'><br>";
  }
?>

<h5>新しい質問</h5>
<?php echo $this->Form->text('Question.context'); ?>

<h5>配点</h5>
<?php echo $this->Form->text('Question.point'); ?>

<?php echo $this->Form->submit('質問を追加する'); ?>
<?php echo $this->Form->end(); ?>

</body>
</html>
