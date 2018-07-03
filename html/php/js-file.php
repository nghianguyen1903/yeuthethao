<?php 
// Require JS file
$jsFile = $page . '.js.php';
if (file_exists($jsFile) && is_file($jsFile)) {
    require_once($jsFile);
}
