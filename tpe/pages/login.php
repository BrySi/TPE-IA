<?php
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 17/11/2017
 * Time: 20:25
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php
    $title = "Connexion";
    include '../includes/head.php';
    ?>
</head>
<body id="login">
<div class="login-logo">
    <a href="/tpe/home"><img src="/tpe/images/logo.png" alt=""/></a>
</div>
<h2 class="form-heading">login</h2>
<div class="app-cam">
    <form>
        <input type="text" class="text" value="Adresse mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Adresse mail';}">
        <input type="password" value="Mot de passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mot de passe';}">
        <div class="submit"><input type="submit" onclick="myFunction()" value="Se connecter"></div>
        <div class="login-social-link">
            <a href="index.html" class="facebook">
                Connexion Facebook
            </a>
            <a href="index.html" class="twitter">
                Connexion Twitter
            </a>
        </div>
        <ul class="new">
            <li class="new_left"><p><a href="#">Mot de passe oublié ?</a></p></li>
            <li class="new_right"><p class="sign">Première fois ici ? <a href="register.html"> Inscription</a></p></li>
            <div class="clearfix"></div>
        </ul>
    </form>
</div>
<div class="copy_layout login">
    <p>Copyright &copy; <?= date('Y') ?> Bryan SIMON & Thomas FABBRO. Tous droits réservés</p>
</div>
</body>
</html>

