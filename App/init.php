<?php


require "../App/Core/config.php";
require "../App/Core/functions.php";
require "../App/Core/database.php";
require "../App/Core/model.php";
require "../app/core/controller.php";
require '../App/Core/mail.php';
require "../App/Core/app.php";


//Auto load Class if Code does not Find Class in Models
spl_autoload_register(function ($class_name) {
    require "../app/models/" . ucfirst($class_name) . ".php";
});