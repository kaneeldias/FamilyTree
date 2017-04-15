<!DOCTYPE html>

<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>
        Family Tree
        <?php
            if(isset($title)){
                echo " | $title";
            }
        ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body ng-app="BlankApp" ng-cloak>

<script type="text/javascript">
    var app = angular.module('BlankApp', ['ngMaterial']);
    var base_url = "<?=base_url()?>";
</script>

<script src="<?=base_url()?>assets/js/ng-controllers/common_controller.js"></script>

<div layout="column" style="min-height:100%;">

    <div id="header" layout="row">
        Family Tree

        <style>
            #header{
                background-color:#96281B;
                padding:15px;
                color:white;
                font-size:20px;
                font-weight:bold;
            }
        </style>
    </div>

    <div id="content" style="background-color:#DDDDDD; padding-top:15px;">
