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
                <!--<form action="/cakephp/question/measure.ctp" id="indexForm" method="post" accept-charset="utf-8">
                    <div style="display:none;"><input type="hidden" name="_method" value="POST"/>
                    </div>-->
                    <div class="submit">
                        <!--<input type="submit" class="btn btn-warning btn-xl" value="機嫌を測定" >-->
                        <?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'measure')); ?>
                        <?php echo $this->Form->submit("機嫌を測定", array("type" => "image", "src" => "/pbl/img/measure_btn.png", "id" => "measure", "div" => false)); ?>
                        <?php echo $this->Form->end(); ?>
                        <hr>
                        <!--<input type="submit" class="btn btn-primary btn-xl" value="質問を追加" >-->
                        <?php #echo $this->Form->create(false, array('type' => 'post', 'url' => 'add')); ?>
                        <?php #echo $this->Form->submit("質問を追加", array("type" => "image", "src" => "/pbl/img/question_add.png", "id" => "addQuestion", "div" => false)); ?>
                        <?php #echo $this->Form->end(); ?>
                    </div>
                <!--</form>-->
         
            </div>
        </div>
    </header>

</body>
</html>