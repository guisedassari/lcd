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
        <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= base_url('assets/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?= base_url('assets/dist/css/sb-admin-2.css') ?>" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="<?= base_url('assets/vendor/morrisjs/morris.css') ?>" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/plugins/dropzone.css') ?>" rel="stylesheet" type="text/css">
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
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Galeria<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Corporativo <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li><a href="corporativo"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Iluminação</a></li>
                                            <li><a href="#"><i class="fa fa-volume-up" aria-hidden="true"></i> Sonorização</a></li>
                                            <li><a href="#"><i class="fa fa-file-image-o" aria-hidden="true"></i> Imagem</a></li>
                                            <li><a href="#"><i class="fa fa-bolt" aria-hidden="true"></i> Energia</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Social <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Iluminação</a></li>
                                            <li><a href="#"><i class="fa fa-volume-up" aria-hidden="true"></i> Sonorização</a></li>
                                            <li><a href="#"><i class="fa fa-file-image-o" aria-hidden="true"></i> Imagem</a></li>
                                            <li><a href="#"><i class="fa fa-bolt" aria-hidden="true"></i> Energia</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    




