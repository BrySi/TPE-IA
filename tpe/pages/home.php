<?php
session_start();
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 10/11/2017
 * Time: 09:45
 */
include "../includes/security.php";
include "../includes/functions.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php
    $title = 'Home';
    include "../includes/head.php";
    ?>
</head>
<body>
<div id="wrapper">
    <?php
    include "../includes/nav.php";
    ?>
    <div id="page-wrapper">
        <div class="graphs">
            <div class="grid_3 grid_4">
                <h3><?= get_lang('HOME__SECTION_HEADING') ?></h3>
                <div class="bs-example">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td><h1 id="h1">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
                            <td class="type-info">Semibold 36px</td>
                        </tr>
                        <tr>
                            <td><h2 id="h2">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
                            <td class="type-info">Semibold 30px</td>
                        </tr>
                        <tr>
                            <td><h3 id="h3">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
                            <td class="type-info">Semibold 24px</td>
                        </tr>
                        <tr>
                            <td><h4 id="h4">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
                            <td class="type-info">Semibold 18px</td>
                        </tr>
                        <tr>
                            <td><h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
                            <td class="type-info">Semibold 14px</td>
                        </tr>
                        <tr>
                            <td><h6>h6. Bootstrap heading</h6></td>
                            <td class="type-info">Semibold 12px</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
            include "../includes/footer.php";
            ?>
        </div>
    </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php
include "../includes/scripts.php";
?>
</body>
</html>

