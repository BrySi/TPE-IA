<?php
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 17/11/2017
 * Time: 08:31
 */
include_once "functions.php";
?>
<!-- Navigation -->
<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/tpe/home"><?= get_lang('NAV__HEADING') ?></a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?= $_SESSION['user_infos']['profile_pic'] ?>"><span class="badge">9</span></a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu-header text-center">
                    <strong>Account</strong>
                </li>
                <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
                <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
                <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
                <li class="dropdown-menu-header text-center">
                    <strong>Settings</strong>
                </li>
                <li class="m_2"><a href="/tpe/profile"><i class="fa fa-user"></i> <?= get_lang('NAV__DROPDOWN_PROFILE') ?></a></li>
                <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                <li class="divider"></li>
                <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/tpe/home"><i class="fa fa-dashboard fa-fw nav_icon"></i><?= get_lang('NAV__LINKS_DASHBOARD') ?></a>
                </li>
                <li>
                    <a href="/tpe/speech"><i class="fa fa-microphone fa-fw nav_icon"></i><?= get_lang('NAV__LINKS_SPEECH') ?></a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>

    <!-- /.navbar-static-side -->
</nav>