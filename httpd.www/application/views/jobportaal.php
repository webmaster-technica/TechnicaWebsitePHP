<div class="block jobportaal">
    <div class="container textual">
        <h2 class="h1">Job portaal</h2>
        <div class="grid">
            <div class="col-4 mcol-1 textual jobportaal-menu">
                <h3>Zoeken</h3>
                <form method="post" action="">
                    <div class="searchbar-wrap">
                        <input type="text" placeholder="Zoeken" />
                        <button type="submit" class="fabutton">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-search search-loop fa-stack-1x"></i>
                            </span>
                        </button>
                    </div>
                </form>
                <form>
                    <h3>Afstudeer richting</h3>
                    <ul>
                        <?php if (!sizeof($filters['study']) == 0) { for ($i = 0; $i <= sizeof($filters['study']) -1; $i++) {?>
                        <li>
                            <input type="checkbox" name="study" class="filter_chk" value="<?php echo $filters['study'][$i]; ?>"<?php if (isset($_GET['study']) && in_array(strtolower($filters['study'][$i]), $_GET['study'])){ echo "checked";} ?>/>
                            <div class="filter_key"><?php echo $filters['study'][$i]; ?></div>
                        </li>
                        <?php } }else{ ?><p style="font-style: italic">Er zijn geen filters beschikbaar</p><?php }?>
                    </ul>
                    <h3>Plaats</h3>
                    <ul>
                        <?php if (!sizeof($filters['location']) == 0) { for ($i = 0; $i <= sizeof($filters['location']) -1; $i++) {?>
                        <li>
                            <input type="checkbox" name="location" class="filter_chk" value="<?php echo $filters['location'][$i]; ?>" <?php if (isset($_GET['location']) && in_array(strtolower($filters['location'][$i]), $_GET['location'])){ echo "checked";} ?>/>
                            <div class="filter_key"><?php echo $filters['location'][$i]; ?></div>
                        </li>
                        <?php } }else{ ?><p style="font-style: italic">Er zijn geen filters beschikbaar</p><?php }?>    
                    </ul>
                    <h3>Bedrijf</h3>
                    <ul>
                        <?php if (!sizeof($filters['company']) == 0) { for ($i = 0; $i <= sizeof($filters['company']) -1; $i++) {?>
                        <li>
                            <input type="checkbox" name="company" class="filter_chk" value="<?php echo $filters['company'][$i]; ?>" <?php if (isset($_GET['company']) && in_array(strtolower($filters['company'][$i]), $_GET['company'])){ echo "checked";} ?>/>
                            <div class="filter_key"><?php echo $filters['company'][$i]; ?></div>
                        </li>
                        <?php } }else{ ?><p style="font-style: italic">Er zijn geen filters beschikbaar</p><?php }?>    
                    </ul>
                </form>
            </div>
            <div class="col-34 mcol-1 textual vacature-list">
                <h2>vacatures</h2>
                <?php if (!sizeof($vacancy) == 0) { foreach ($vacancy as $vac) {?>
                <div class="vacature">
                    <a href="<?php echo base_url(); ?>jobportaal/<?php echo $vac->slug; ?>">
                        <h3><?php echo $vac->title; ?></h3>
                        <p><?php echo $vac->summary; ?></p>
                    </a>
                    <div class="tags">
                        <ul>
                            <?php foreach ($vac->tags as $tag) {?>
                            <li><a href="<?php echo base_url(); ?>jobportaal?tag=<?php echo strtolower($tag->name); ?>"><?php echo $tag->name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } } else {?>
                    <p style="font-style: italic">Er zijn op dit moment geen vacatures beschikbaar</p>
                <?php }?>
            </div>
        </div>
    </div>
</div>