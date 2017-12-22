<?php
session_start();
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 22/12/2017
 * Time: 08:19
 */
include_once '../includes/functions.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php
    $title = get_lang('REGISTER__TITLE');
    include_once '../includes/head.php';
    ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="/"><img src="/tpe/images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading"><?= get_lang('REGISTER__HEADING') ?></h2>
  <form class="form-signin app-cam" method="POST" action="/tpe/system/register.php">
      <p><?= get_lang('REGISTER__INSTRUCTION') ?></p>
      <input type="text" name="name" class="form-control1" placeholder="<?= get_lang('REGISTER__FORM_NAME') ?>" autofocus="">
      <input type="text" name="username" class="form-control1" placeholder="<?= get_lang('REGISTER__FORM_USERNAME') ?>" autofocus="">
      <input type="text" name="email" class="form-control1" placeholder="<?= get_lang('REGISTER__FORM_EMAIL') ?>" autofocus="">
      <input type="password" name="password" class="form-control1" placeholder="<?= get_lang('REGISTER__FORM_PASSWORD') ?>">
      <input type="password" name="password_confirm" class="form-control1" placeholder="<?= get_lang('REGISTER__FORM_PASSWORD_CONFIRM') ?>">
      <div class="g-recaptcha" data-sitekey="6LfGBT4UAAAAAInDy48EJyHoysucPuG8dRoaHsXf"></div>
      <button class="btn btn-lg btn-success1 btn-block margin-t-10" type="submit"><?= get_lang('REGISTER__FORM_SUBMIT') ?></button>
      <div class="registration">
          <?= get_lang('REGISTER__FORM_LINK_LOGIN') ?>
      </div>
  </form>
   <div class="copy_layout login register">
       <p><?= str_replace('YEAR', date('Y'), get_lang('LOGIN__FOOTER')) ?></p>
       <?= get_lang('AUTH__SWITCH_LANG') ?>
   </div>
</body>
</html>
