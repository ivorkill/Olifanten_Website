<?php
include 'views/head.php';
include 'views/navigation.php';
include 'views/header.php';

$action = (empty($_GET['action'])) ? '' : $_GET['action'];

switch ($action) {
	case 'home':
		include 'views/home.php';
		break;
	case 'contact';
		include 'views/contact.php';
		break;
	default:
		include 'views/home.php';
		break;
}

include 'views/footer.php';