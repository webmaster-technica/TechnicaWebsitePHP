<div class="grid grid-pad">
    <div class="col-1-1">
        <div class="content">
            <div class="logo-wrap">
                <img src="<?php echo base_url(); ?>assets/images/app/app_logo.png" />
            </div>
        </div>
    </div>
    <div class="col-1-1">
       <div class="content">
           <h1 class="center">Praesidium Login</h1>
           <h2 class="center" style="color:red"><?php echo $error; ?></h2>
           <div class="login-wrap">
               <form method="POST" action="">
                   <input type="text" name="username" placeholder="Gebruikersnaam" />
                   <input type="password" name="password" placeholder="Wachtwoord" />
                   <input type="submit" value="Inloggen" class="button" />
               </form>
           </div>
       </div>
    </div>
</div>