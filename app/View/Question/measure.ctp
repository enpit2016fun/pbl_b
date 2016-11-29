<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<?php echo $this->Html->css('toggle'); ?>
<title>質問回答画面</title>
</head>
<body>
<h1>質問回答画面</h1>

<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'result')); ?>
<table>
<?php
  foreach ($data as $item) {
    $question = $item["Question"];
    $id = $question["id"];
    $context = $question["context"];
    echo "<tr>";
    echo "<td>". $context ."</td>";
    echo '<td><label class="switch"><input type="checkbox" name="answer[]" value="' . $id . '"><div class="slider round"></div></label></td>';
    echo "</tr>";
  }
?>
</table>
<?php echo $this->Form->submit('機嫌を測定する'); ?>
<?php echo $this->Form->end(); ?>

</body>
</html>
