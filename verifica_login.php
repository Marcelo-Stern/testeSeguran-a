<?php
session_start();
if(!$_SESSION['rm']) {
	header('Location: index.php');
	exit();
}