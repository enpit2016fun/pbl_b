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
    echo "<tr>";
    echo "<td>". $question["context"] ."</td>";
    echo '<div class="onoffswitch">
          <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
          <label class="onoffswitch-label" for="myonoffswitch">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
          </label>
          </div>';
    echo "</tr>";
  }
?>
</table>

<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'result')); ?>
<?php echo $this->Form->submit('機嫌を測定する'); ?>
<?php echo $this->Form->end(); ?>

</body>
</html>
