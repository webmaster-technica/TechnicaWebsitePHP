<div class="block single-vacature">
    <div class="container">
        <div class="grid">
            <div class="col-23">
                <h1><?php echo $vacancy->title;?></h1>
                <?php echo $vacancy->text;?>
            </div>
            <div class="col-3">
                <h2>Bedrijf gegevens</h2>
                <img src="<?php echo base_url(); ?>assets/images/sponsors/<?php $string = strtolower($company->name); echo preg_replace('/\s+/', '', $string); ?>.png"/>
                <h2><?php echo $company->name;?></h2>
                <div class="detail">
                    <h4>E-mail</h4>
                    <p><?php echo $company->email;?></p>
                </div>
                <div class="detail">
                    <h4>Telefoon</h4>
                    <p><?php echo $company->phone_number;?></p>
                </div>
                <div class="detail">
                    <h4>Website</h4>
                    <p><a href="https://<?php echo $company->website;?>" target="_blank"><?php echo preg_replace('#^https?://#', '', rtrim($company->website,'/'));;?></a></p>
                </div>
                <div class="detail">
                    <h4>Adres</h4>
                    <p>
                        <?php echo $company->street; echo " "; echo $company->house_number;?><br/>
                        <?php echo $company->postal_code; echo ", "; echo $company->city;?><br/>
                        <?php echo $company->country;?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>