<?php
session_start();
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
<h2 class="form-heading">Se connecter </h2>
<div class="app-cam">
    <!--<div class="alert alert-warning">
        <?php
        //var_dump($_SESSION['user_infos']);
        ?>
    </div>-->
    <form action="system/authentication.php" method="POST">
        <?php
        if(!empty($_SESSION['login_error'])) { ?>
            <div class="alert alert-danger">
                <?php
                //var_dump($_SESSION['login_error'])
                ?>
                <?= implode('<br/>', $_SESSION['login_error']) ?></div>
        <?php }
        ?>
        <input type="text" class="text" value="Nom d'utilisateur" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom d\'utilisateur';}" name="username">
        <input type="password" value="Mot de passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mot de passe';}" name="password">
        <div class="submit"><input type="submit" onclick="myFunction()" value="Se connecter"></div>
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
<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyB6Ea7N3n3YF8YYtIN7V3OBg49LppYmkhM",
        authDomain: "tpe-ia.firebaseapp.com",
        databaseURL: "https://tpe-ia.firebaseio.com",
        projectId: "tpe-ia",
        storageBucket: "tpe-ia.appspot.com",
        messagingSenderId: "749985797215"
    };
    firebase.initializeApp(config);
</script>
</body>
</html>
<?php
unset($_SESSION['login_error']);
?>