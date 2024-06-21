<?php
session_start();
require_once("header.php");
require_once("../../classes.php");
$user = unserialize($_SESSION["post"]);
$user->Delete_post($_REQUEST["id"]);
header("location:post.php?msg=done");
?>
