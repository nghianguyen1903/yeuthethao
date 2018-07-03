<?php
// ========== Process $_SERVER['REQUEST_URI'] ==========
$strRequest = $_SERVER['REQUEST_URI'];
$strPos = strrpos($_SERVER['REQUEST_URI'], '/');
$strRequest = substr($strRequest,0,$strPos + 1);

// ========== Init CONSTANT ==========
define('BASE_URL','http://' . $_SERVER['SERVER_NAME'] . $strRequest);
define('IMG_URL',BASE_URL . 'img/');
define('PHP_LIBR',BASE_URL . 'php/') ;
define('THUMB', PHP_LIBR . 'timthumb.php');

// Check var page
if(isset($_GET['p'])){
	$page = $_GET['p'];
}else{
	$page = 'home';
}

// Require PHP file
$pageFile = $page . '.php';
if (!file_exists($pageFile) || !is_file($pageFile)) {
	header('Location: ?p=home');	
}

// ========== List type page ==========
$arrPage = array(
	
);

// ========== Thumb ==========

function thumb($src= "",$w = 500,$h = 300,$zc =1){
	echo THUMB . '?src=' . BASE_URL . $src . '&w=' . $w . '&h=' . $h . '&zc=' . $zc;
}