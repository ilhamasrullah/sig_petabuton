<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIG</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- <link href="<?= base_url() ?>assets/css/BootSideMenu.css" rel="stylesheet"> -->
    <link href="assets/css/solar-bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/general.css" rel="stylesheet" />
    <!-- <link href="assets/css/signin.css" rel="stylesheet" /> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/tinymce/tinymce.min.js"></script>

    <link href="<?= base_url() ?>assets/leaflet/leaflet.css" rel="stylesheet">


    <style type="text/css">
        .user {
            padding: 5px;
            margin-bottom: 5px;
        }

        #mapid {
            height: 480px;
        }

        #popup {
            height: 80px;
            width: 160px;
        }

        p {
            text-align: justify;
        }

        #foto {
            height: 200px;
            width: 160px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar">ttt</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="profil2">Home</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="admin"><span class="glyphicon glyphicon-map-marker"></span> Peta</a></li>
                    <li><a href="jalan2"><span class="glyphicon glyphicon-road"></span> Daftar Kerusakan Jalan</a></li>
                    <li><a href="password"><span class="glyphicon glyphicon-lock"></span> Password</a></li>
                    <li><a href="<?php echo base_url('login/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata("nama"); ?></a></li>
                </ul>
            </div>
        </div>
    </nav>
</head>