<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
    
<?php  echo $this->Html->css("creative.css"); ?>
<title>質問回答画面</title>
</head>
<body>
<div id="gage"></div>
<?php echo $this->Html->image("clipboard.png", array("id" => "clipboard")); ?>
<h1>質問回答画面</h1>
<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'result')); ?>
<table>
<?php
  $point_sum = 0;
  foreach ($data as $item) {
    $question = $item["Question"];
    $id = $question["id"];
    $context = $question["context"];
    $point_sum += $question["point"];
    echo "<tr>";
    echo "<td>". $id . "</td>";
    echo "<td>". $context ."</td>";
    echo "<td>". $question["point"] ."</td>";
    echo "<td><input type='checkbox' name='answer[]' value='" . $id . "'></td>";
    echo "</tr>";
  }
  echo "<input type='hidden' name='sum' value='". $point_sum. "'>";
?>
</table>
<?php echo $this->Form->submit('機嫌を測定する'); ?>
<?php echo $this->Form->end(); ?>

<?php echo $this->Html->script('measure'); ?>
</body>
</html>
