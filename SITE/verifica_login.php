<?php
session_start();
if(!$_SESSION['Nome']) {
	header('Location: index.php');
	exit();
}