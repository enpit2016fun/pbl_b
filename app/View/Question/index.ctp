<!DOCTYPE html>
<html long = "ja">
<head>
<meta http-equiv=“Content-Type” content=“text/html; charset=UTF-8”/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
    
<?php  echo $this->Html->css("creative.css"); ?>
    
</head>
<body>
<?php echo $this->Html->image("background.png", array("id" => "background")); ?>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">PAPA DOUMEI</h1>
                <p></p>
                <div class="submit">
                        <?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'measure')); ?>
                        <?php echo $this->Form->submit("機嫌を測定", array("type" => "image", "src" => "/pbl_b/img/measure_btn.png", "id" => "measure", "div" => false)); ?>
                        <?php echo $this->Form->end(); ?>
                        <hr>
                        <?php echo $this->Form->create(false, array('type' => 'post', 'url' => 'add')); ?>
                        <?php echo $this->Form->submit("質問を追加", array("type" => "image", "src" => "/pbl_b/img/question_add.png", "id" => "addQuestion", "div" => false)); ?>
                        <?php echo $this->Form->end(); ?>
                </div>
                <!--</form>-->
         
            </div>
        </div>
    </header>
    
</body>
</html>
