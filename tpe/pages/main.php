<?php
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 15/12/2017
 * Time: 09:36
 */
session_start();
$required_rank = 1;
include "../includes/security.php";
include "../includes/functions.php";
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <?php
        $title = get_lang('SPEECH__TITLE');
        include "../includes/head.php";
        ?>
        <link href="/tpe/vendor/web-dictaphone/styles/app.css" rel="stylesheet" type="text/css">
        <link href="/tpe/vendor/web-dictaphone/styles/install-button.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div id="wrapper">
        <?php
        include "../includes/nav.php";
        ?>
        <div id="page-wrapper">
            <div class="graphs">
                <div class="grid_3 grid_4">
                    <h3><i class="fa fa-user"></i> <?= get_lang('PROFILE__SECTION_HEADING') ?></h3>
                    <div class="bs-example">
                        <section class="main-controls">
                            <canvas class="visualizer" height="60px"></canvas>
                            <div id="buttons">
                                <button class="record">Record</button>
                                <button class="stop">Stop</button>
                            </div>
                        </section>
                        <section class="sound-clips" style="display: none;">


                        </section>
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
    <script src="/tpe/vendor/web-dictaphone/scripts/install.js"></script>

    <script src="/tpe/vendor/web-dictaphone/scripts/mediaDevices-getUserMedia-polyfill.js"></script>

    <!-- Below is your custom application script -->
    <script src="/tpe/vendor/web-dictaphone/scripts/app.js"></script>
    </body>
    </html>
<?php
unset($_SESSION['success']);