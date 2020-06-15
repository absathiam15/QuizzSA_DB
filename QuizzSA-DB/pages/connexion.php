<?php 
require_once ('./data/connexion_db.php');
?> 

<div class="zone-form rounded ">
    <div class="container-fluid pt-3 pl-4 login">Login Form</div>
    <div class="container-fluid d-flex align-items-center justify-content-center zone-formulaire ">
        <form class="form bg-transparent" id="formulaire" method="post">
            <div class="form-group champ">
                <input type="text" name="login" id="login" value="" autocomplete="off">
                <span class="iconify" data-icon="bx:bxs-user" data-inline="false" style="color: #ffffff;"></span>
                <small class="d-block pl-4 w-75 h-25 text-danger error-msg"></small>
            </div>
            <div class="form-group champ">
                <input type="password" name="pwd" id="pwd" value="" autocomplete="off">
                <span class="iconify" data-icon="uil:padlock" data-inline="false" style="color: #ffffff;"></span>
                <small class="d-block pl-4 w-75 h-25 text-danger error-msg"></small>
            </div>
            <div class="container d-flex align-items-center validation">
                <a href="index.php?lien=inscription">S'inscrire pour jouer ?</a>
                <button name="submit" id="connexion">Connexion</button>
            </div>
        </form>
    </div>
</div>



      

