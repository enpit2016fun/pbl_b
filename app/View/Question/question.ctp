<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<title>質問回答画面</title>
</head>
<body>
<h1>質問回答画面</h1>
<?php
  echo "<ul>";
  for($i = 1; $i < 11; $i++) {
    echo "<li>質問" . $i . "</li>";
  }
  echo "</ul>"
?>

<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'result')); ?>
<?php echo $this->Form->submit('機嫌を測定する'); ?>
<?php echo $this->Form->end(); ?>

</body>
</html>

