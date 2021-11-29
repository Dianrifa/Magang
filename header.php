<?php
require_once "config/config.php";
require "asset/libs/vendor/autoload.php";
if(!isset($_SESSION['user'])){
	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootsrap core css -->
    <title>WITEL MATH</title>
    <link href="<?=base_url()?>/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?=base_url()?>/asset/libs/data tables/datatables.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript" ></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript" ></script>
</head>
<body>
	<script src="<?=base_url()?>/asset/js/jquery.js"></script>
    <script src="<?=base_url()?>/asset/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/asset/libs/data tables/datatables.min.js"></script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>WITEL MATH</b></span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Add On Treg4
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url('Addon/data_target.php')?>">Data Target</a></li>
                                <li><a href="<?=base_url('Addon/data_real.php')?>">Data Real</a></li>
                                <li><a href="<?=base_url('Addon/data_report.php')?>">Report</a></li>
                            </ul>
                </div>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Log Out</span></a>
                </li>
            </ul>
        </div>
        <script>
            function dropdownToggle(){
                var dropdown = $(this).parent().parent().prev();
                dropdown.html($(this).html() + '&nbsp;</i><span class="caret"></span>');
                dropdown.val($(this).prop('data-value'));
            }
        </script>
        <div id="page-content-wrapper">
            <div class="container-fluid">
