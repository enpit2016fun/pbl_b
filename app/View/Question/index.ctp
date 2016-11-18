<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<title>質問回答画面</title>
</head>
<body>
<h1>質問回答画面</h1>
<table>
<?php
  foreach ($data as $item) {
    $question = $item["Question"];
    echo "<tr>";
    echo "<td>". $question["id"] ."</td>";
    echo "<td>". $question["context"] ."</td>";
    echo "<td>". $question["point"] ."</td>";
    echo "</tr>";
  }
?>
</table>

<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'result')); ?>
<?php echo $this->Form->submit('機嫌を測定する'); ?>
<?php echo $this->Form->end(); ?>

</body>
</html>
