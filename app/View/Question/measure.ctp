<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<?php echo $this->Html->css('toggle'); ?>
<title>質問回答画面</title>
</head>
<body>
<h1>質問回答画面</h1>
<table>
<?php
  foreach ($data as $item) {
    $question = $item["Question"];
    $id = $question["id"];
    $context = $question["context"];
    echo "<tr>";
    echo "<td>". $id . "</td>";
    echo "<td>". $context ."</td>";
    echo "<td>". $question["point"] ."</td>";
    #echo "<td><input type='checkbox' name='answer[]' value='" . $id . "'></td>";
    echo "<td><label class='switch'><input type='checkbox' name='answer[]' value='" . $id . "' checked><div class='slider round'></div></label></td>";
    echo "</tr>";
  }
?>
</table>
<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'result')); ?>
<?php echo $this->Form->submit('機嫌を測定する'); ?>
<?php echo $this->Form->end(); ?>

<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('measure'); ?>
</body>
</html>
