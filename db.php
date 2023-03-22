<?php


// pdo

$dns = "mysql:host=localhost;dbname=lms";

$con = new PDO($dns,"root","");

$stm = $con->prepare("INSERT INTO `categoary` (`name`) VALUES (?)");

$stm->execute(['memo']);


