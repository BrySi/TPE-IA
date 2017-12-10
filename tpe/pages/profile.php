<?php
session_start();
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 10/12/2017
 * Time: 17:10
 */
include "../includes/security.php";
include "../includes/functions.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php
    $title = get_lang('PROFILE__TITLE');
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
                    <?= get_lang('HOME__SECTION_CONTENT') ?>
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
