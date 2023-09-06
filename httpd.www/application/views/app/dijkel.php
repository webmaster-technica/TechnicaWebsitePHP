<?php if(empty($_SESSION['user'])){
    $url = base_url()."app";
    header('Location: '.$url);
}else {?>
<div class="grid grid-pad nav-correction">
    <div class="col-1-1">
        <div class="content">
            <div class="schacht-detail">
                <h1 class="center"><?php echo $dijkel->schacht;?></h1>
                <div class="schacht-id center">#<span><?php echo $dijkel->schachten_id;?></span></div>
                <div class="dijkel-reason">
                    <p class="center"><?php echo $dijkel->reason; ?></p>
                </div>
            </div>
            <div class="dijkel-nav">
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $dijkel->id ?>"/>
                    <input type="hidden" name="schachten_id" value="<?php echo $dijkel->schachten_id ?>"/>
                    <?php if ($_SESSION['user'][2]) { ?><input class="dijkel-btn red" type="submit" value="Verwijder Dijkel" /><?php } ?>
                </form>
                <a href="javascript:history.back()" class="dijkel-btn" >Terug</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
