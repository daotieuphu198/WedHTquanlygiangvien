<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-
              mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="scss/css.css"/>
        <link rel="stylesheet" type="text/css" href="scss/backup.css"/>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
        <title>NIEN LUAN </title>       
    </head>
    <body class="preloading">

        <div class="load">
            <img src="img/loader.gif">
        </div>
        <?php
        if (!isset($_SESSION['USER']) and ! isset($_SESSION['ADMIN'])) {
            header('location:login.php');
        }
        ?>
        <div id="top_div">
            <?php require './elements/top.php'; ?>
        </div>
        <div id="center_div">
            <?php require './elements/center.php'; ?>
        </div>
        <div id="right_div">
            <?php require './elements/right.php'; ?>
        </div>
        <div id="bottom_div">
            <?php require './elements/bottom.php'; ?>
        </div>
        <div id="signoutbutton">

        </div>
    </body>
</html>
