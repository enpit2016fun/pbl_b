<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>PAPA DOUMEI</title>
<?php  echo $this->Html->css('creative'); ?>
<?php  echo $this->Html->css('bootstrap'); ?>

</head>
<!--
<body id="page-top">
-->
<body>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">PAPA DOUMEI</h1>
                <p></p>
                <form action="/cakephp/question/measure.ctp" id="indexForm" method="post" accept-charset="utf-8">
                    <div style="display:none;"><input type="hidden" name="_method" value="POST"/>
                    </div>
                    <div class="submit">
                        <input type="submit" class="btn btn-warning btn-xl" value="機嫌を測定" >
                        <hr>
                        <input type="submit" class="btn btn-primary btn-xl" value="質問を追加" >
                    </div>
                </form>
         
            </div>
        </div>
    </header>

</body>
</html>
