<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
<?php echo $this->Html->css("measure.css"); ?>
<title>質問回答画面</title>
</head>
<body>
<?php echo $this->Html->image("background.png", array("id" => "background")); ?>
<?php echo $this->Html->image("clipboard_long.png", array("id" => "clipboard")); ?>

<p id="title">PAPA DOUMEI</p>
<p id="sub_title" class="desc">アンケート</p>
<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'result')); ?>
<table>
<?php
  $point_sum = 0;
  foreach ($data as $d) {
    $tmp = $d;
    foreach ($tmp as $item) {
      $question = $item["Question"];
      $id = $question["id"];
      $context = $question["context"];
      $point_sum += $question["point"];
      echo "<tr>";
      echo "<td><input type='checkbox' name='answer[]' value='". $id . "' id='label_". $id . "'/><label for='label_". $id . "' class='check_css'>". $context. "</label>/td>";
      echo "</tr>";
    }
  }
  echo "<input type='hidden' name='sum' value='". $point_sum. "'>";
?>
</table>
<?php echo $this->Form->submit("質問を追加", array("type" => "image", "src" => "/miyai/pbl_b/img/measure_btn.png", "id" => "measure")); ?>
<?php echo $this->Form->end(); ?>

</body>
</html>
