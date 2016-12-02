<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<title>機嫌表示画面</title>
</head>
<body>
<h1>機嫌表示画面</h1>
<h5><?php echo $measure_result;?>%</h5>
<h4>機嫌が悪いです！</h4>

<?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'add')); ?>
<?php echo $this->Form->submit('質問を追加'); ?>
<?php echo $this->Form->end(); ?>

</body>
</html>
