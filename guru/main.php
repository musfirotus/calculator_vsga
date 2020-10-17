<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VSGA 2020 - Guru - Kalkulator</title>
        <?php require('../head.php'); ?>
    </head>
    <body id="page-top">
        <?php require_once('navbar.php'); ?>
        <!-- Page Content-->
        <div class="container">

            <?php require_once('read_guru.php'); ?>

            <hr class="m-0" />

            <?php require_once('read_murid.php'); ?>

            <hr class="m-0" />

            <?php require_once('../about_dev.php'); ?>

            <?php require_once('add_guru.php'); ?>

            <?php require_once('add_murid.php'); ?>

            <?php require_once('update_murid.php'); ?>
        </div>
        <?php require_once('../body.php'); ?>
    </body>
</html>
