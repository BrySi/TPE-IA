<?php
session_start();
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 10/12/2017
 * Time: 17:10
 */
$required_rank = 1;
include "../includes/security.php";
include_once "../includes/functions.php";
require_once '../includes/database.php';
$db = new \db\database();
$get_user = 'SELECT * FROM users WHERE username = \'' . $_SESSION['user_infos']['username'] . '\'';
$infos = $db->query($get_user);
switch($infos[0]->rank) {
    case 1:
        $rank = 'Utilisateur';
        break;
    case 2:
        $rank = 'Admin';
        break;
    case 3:
        $rank = 'Root';
        break;
}

$date_join = new DateTime($infos[0]->created);
$joined = $date_join->format('d/m/Y');
$date_last_connection = new DateTime($infos[0]->last_connection);
$last_connection = $date_last_connection->format('d/m/Y');
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
                <h3><i class="fa fa-user"></i> <?= get_lang('PROFILE__SECTION_HEADING') ?></h3>
                <div class="bs-example">
                    <div class=" profile">

                        <div class="profile-bottom">
                            <?php
                            if(!empty($_SESSION['success'])) {
                                ?>
                                <div class="alert alert-success">
                                    <?= get_lang('PROFILE__FLASH__SUCCESS_UPDATE') ?>
                                </div>
                                <?php
                            } if(!empty($_SESSION['error'])) {
                                ?>
                                <div class="alert alert-danger">
                                    <?= implode('<br>', $_SESSION['error']) ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="alert" id="social" style="display: none;"></div>
                            <div class="profile-bottom-top">
                                <div class="col-md-4 profile-bottom-img">
                                    <img src="<?= $infos[0]->profile_pic ?>" alt="Photo <?= $infos[0]->name ?>" class="img-responsive img-circle">
                                </div>
                                <div class="col-md-8 profile-text">
                                    <h4><?= $infos[0]->name ?></h4>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td><?= get_lang('PROFILE__RANK') ?></td>
                                            <td>:</td>
                                            <td><?= $rank ?></td>
                                        </tr>

                                        <tr>
                                            <td><?= get_lang('PROFILE__EMAIL') ?></td>
                                            <td> : </td>
                                            <td><a href="mailto:<?= $infos[0]->email ?>"><?= $infos[0]->email ?></a></td>
                                        </tr>
                                        <tr>
                                            <td><?= get_lang('PROFILE__JOINED') ?></td>
                                            <td> :</td>
                                            <td> <?= $joined ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= get_lang('PROFILE__LAST_CONNECTION') ?></td>
                                            <td>:</td>
                                            <td> <?= $last_connection ?></td>
                                        </tr>
                                        <tr>
                                            <td>Facebook</td>
                                            <td>:</td>
                                            <td id="getFacebookValue">
                                                <a href="https://facebook.com/<?= $infos[0]->facebook ?>" id="getFacebook" target="_blank"><?= $infos[0]->facebook ?></a>
                                            </td>
                                            <td id="setFacebookValue" style="display: none;">
                                                <input type="text" name="twitter" id="setFacebook" placeholder="Nom d'utilisateur">
                                            </td>
                                            <td id="editFacebook"><a onclick="editFacebook()"><?= get_lang('PROFILE__EDIT') ?></a></td>
                                            <td id="validateFacebook" style="display: none;"><a onclick="validateFacebook()"><?= get_lang('PROFILE__VALIDATE') ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>Twitter</td>
                                            <td>:</td>
                                            <td id="getTwitterValue">
                                                <a href="https://twitter.com/<?= $infos[0]->twitter ?>" id="getTwitter" target="_blank"><?= $infos[0]->twitter ?></a>
                                            </td>
                                            <td id="setTwitterValue" style="display: none;">
                                                <input type="text" name="twitter" id="setTwitter" placeholder="@votrenomd'utilisateur">
                                            </td>
                                            <td id="editTwitter"><a onclick="editTwitter()"><?= get_lang('PROFILE__EDIT') ?></a></td>
                                            <td id="validateTwitter" style="display: none;"><a onclick="validateTwitter()"><?= get_lang('PROFILE__VALIDATE') ?></a></td>
                                        </tr>
                                        <tr>
                                            <td><?= get_lang('PROFILE__LANG') ?></td>
                                            <td>:</td>
                                            <td>
                                                <?php
                                                switch ($_COOKIE['lang']) {
                                                    case 'en':
                                                        echo 'English';
                                                        break;
                                                    case 'fr':
                                                        echo 'French';
                                                        break;
                                                }
                                                ?>
                                                <br>
                                                <?= get_lang('PROFILE__SWITCH_LANG') ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="profile-bottom-bottom">
                                <div class="col-md-6 col-md-offset-3 profile-fo">
                                    <a class="btn btn-info center-block" href="#" data-toggle="modal" data-target="#uploadPhoto"><i class="fa fa-cog"></i> <?= get_lang('PROFILE__CHANGE_PICTURE') ?></a>
                                </div>

                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="uploadPhoto" tabindex="-1" role="dialog" aria-labelledby="uploadPhotoLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <form action="/tpe/system/upload_photo.php" enctype="multipart/form-data" method="POST">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h2 class="modal-title"><?= get_lang('PROFILE__MODAL_TITLE') ?></h2>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="img_file"><?= get_lang('PROFILE__MODAL_IMPORT_PICTURE') ?></label>
                                    <input type="file" accept=".gif,.png,.jpeg,.jpg" name="img_file" id="img_file">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?= get_lang('PROFILE__MODAL_CLOSE') ?></button>
                                <button type="submit" class="btn btn-primary"><?= get_lang('PROFILE__MODAL_SUBMIT') ?></button>
                            </div>
                        </div><!-- /.modal-content -->
                    </form>
                </div><!-- /.modal-dialog -->
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
<?php
unset($_SESSION['success']);