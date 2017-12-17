<?php
session_start();
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 10/11/2017
 * Time: 09:45
 */
$required_rank = 1;
include "../includes/security.php";
include "../includes/functions.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php
    $title = get_lang('HOME__TITLE');
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
                <?php
                if(!empty($_SESSION['security_errors'])) { ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['security_errors']); ?>
                    </div>
                <?php }
                ?>
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

