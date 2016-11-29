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
    echo '<div class="switch"><input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox"><label for="cmn-toggle-1"></label></div>
          <div class="switch"><input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" type="checkbox"><label for="cmn-toggle-4"></label></div>
          <div class="switch"><input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-yes-no" type="checkbox"><label for="cmn-toggle-7" data-on="Yes" data-off="No"></label></div>';
    echo "</tr>";
  }
?>
</table>

<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'result')); ?>
<?php echo $this->Form->submit('機嫌を測定する'); ?>
<?php echo $this->Form->end(); ?>

</body>
</html>
