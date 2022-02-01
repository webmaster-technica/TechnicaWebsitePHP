<?php if(empty($_SESSION['user'])){
    $url = base_url()."app";
    header('Location: '.$url);
}else {?>
<div class="grid grid-pad nav-correction">
    <div class="col-1-1">
        <div class="content">
            <div class="schacht-detail">
                <h1 class="center"><?php echo $schacht->naam;?></h1>
                <div class="schacht-id center">#<span><?php echo $schacht->id;?></span></div>
                <div class="dijkels">
                    <?php echo count($dijkels); ?>
                </div>
            </div>
            <div class="dijkel-nav">
                <?php if (!empty($_SESSION['user'])) { ?>
                <button id="geef-dijkel" class="dijkel-btn">Geef Dijkel</button>
                
                <div class="geef-dijkel">
                    <h2 class="center">Reden dijkel</h2>
                    <i class="far fa-times-circle"></i>
                    <p>Wat is de reden voor het geven van de dijkel?</p>
                    <form method="POST" action="">
                        <input type="hidden" name="schacht_id" value="<?php echo $schacht->id; ?>"/>
                        <input type="hidden" name="praesidium_id" value="<?php echo $_SESSION['user'][0]; ?>"/>
                        <textarea name="reason" required=""></textarea>
                        <input class="dijkel-btn" type="submit" value="Verstuur" />
                    </form>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-1-1">
        <div class="content">
            <div class="dijkel-history">
                <?php foreach($dijkels as $dijkel){ ?>
                <a href="<?php echo base_url();?>app/dijkel?id=<?php echo $dijkel->id ?>">
                    <div class="dijkel-history-stamp">
                        <div class="datetime">
                            <?php $date = new DateTime($dijkel->datetime); echo $date->format('H:i d-m-y')?>
                        </div>
                        <div class="dijkel-state green">
                            +1
                        </div>
                        <div class="person">
                            <?php $arr = explode(' ',trim($dijkel->praesidium)); echo $arr[0];?>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<script type="text/javascript">
    $('#geef-dijkel').on('click tap', function(){
       $('.geef-dijkel').css('display','block'); 
    });
    $('.fa-times-circle').on('click tap', function(){
        $('.geef-dijkel').css('display','none');
    });
</script>