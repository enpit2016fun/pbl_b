<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<title>質問追加画面</title>
</head>
<body>
<h1>質問追加画面</h1>

<?php
  foreach ($data as $item) {
    $question = $item["Question"];
    print_r($question);
    #echo "<tr>";
    #echo "<td>{$question->id}</td>";
    #echo "<td>{$question->context}</td>";
    #echo "<td>{$question->point}</td>";
    #echo "</tr>";
  }
?>

</body>
</html>
