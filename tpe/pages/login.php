<?php
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 17/11/2017
 * Time: 20:25
 */
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <?php
    include '../includes/head.php';
    ?>
</head>
<body id="login">
<div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
</div>
<h2 class="form-heading">login</h2>
<div class="app-cam">
    <form>
        <input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
        <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
        <div class="login-social-link">
            <a href="index.html" class="facebook">
                Facebook
            </a>
            <a href="index.html" class="twitter">
                Twitter
            </a>
        </div>
        <ul class="new">
            <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
            <li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
            <div class="clearfix"></div>
        </ul>
    </form>
</div>
<div class="copy_layout login">
    <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
</body>
</html>

