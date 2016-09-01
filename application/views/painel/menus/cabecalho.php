<?php
if (!($_SESSION['usuario_logado'])) {
    $this->session->set_flashdata("danger", "Você deve se logar primeiro");
    redirect('login');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>LCD</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/painel/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <!--<link href="<?= base_url('assets/painel/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">-->
        <link href="<?= base_url('assets/painel/vendor/datatables-responsive/dataTables.responsive.css') ?>" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?= base_url('assets/painel/dist/css/sb-admin-2.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/painel/dist/css/my_style.css') ?>" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <!--<link href="<?= base_url('assets/painel/vendor/morrisjs/morris.css') ?>" rel="stylesheet">-->
        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/painel/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <?= anchor('logout', '<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', array('class' => '')); ?>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search text-center">
                                <?= img('assets/site/img/logo.png', FALSE, array('class' => 'logo-login')); ?>
                            </li>
                            <li>
                                <?= anchor('welcome/index', '<i class="fa fa-picture-o" aria-hidden="true"></i> Galeria', array('class' => '')); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">





