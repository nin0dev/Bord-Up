<?php
include '../../header.php';

?>

<div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">Connexion</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Connectez-vous
            </div>
            <form action="#">
               <div class="data">
                  <label>Email</label>
                  <input type="text" required>
               </div>
               <div class="data">
                  <label>Mot de passe</label>
                  <input type="password" required>
               </div>
               <div class="forgot-pass">
                  <a href="#">Mot de passe oublié?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Connexion</button>
               </div>
               <div class="signup-link">
                  Pas de compte ?  <a href="#">S'inscrire maintenant</a>
            </div>
        </form>
    </div>
</div>

<?php
include '../../footer.php';

?>