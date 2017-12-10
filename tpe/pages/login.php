<?php
session_start();
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 17/11/2017
 * Time: 20:25
 */
include '../includes/functions.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php
    $title = get_lang('LOGIN__TITLE');
    include '../includes/head.php';
    ?>
</head>
<body id="login">
<div class="login-logo">
    <a href="/tpe/home"><img src="/tpe/images/logo.png" alt=""/></a>
</div>
<h2 class="form-heading"><?= get_lang('LOGIN__HEADING') ?></h2>
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
        <input type="text" class="text" value="<?= get_lang('LOGIN__FORM_USERNAME') ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?= get_lang('LOGIN__FORM_USERNAME') ?>';}" name="username">
        <input type="password" value="<?= get_lang('LOGIN__FORM_PASSWORD') ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?= get_lang('LOGIN__FORM_PASSWORD') ?>';}" name="password">
        <div class="submit"><input type="submit" onclick="myFunction()" value="<?= get_lang('LOGIN__FORM_SUBMIT') ?>"></div>
        <ul class="new">
            <li class="new_left"><p><?= get_lang('LOGIN__PASSWORD_FORGOTTEN') ?></p></li>
            <li class="new_right"><p class="sign"><?= get_lang('LOGIN__REGISTER') ?></p></li>
            <div class="clearfix"></div>
        </ul>
    </form>
</div>
<div class="copy_layout login">
    <p><?= str_replace('YEAR', date('Y'), get_lang('LOGIN__FOOTER')) ?></p>
    <?= get_lang('AUTH__SWITCH_LANG') ?>
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