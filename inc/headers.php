<?php
//echo header('Access-Control-Allow-Origin: http://localhost:3000');
if (strpos($_SERVER["HTTP_ORIGIN"], "javascript") == false) {
    header("Access-Control-Allow-Origin: " . $_SERVER["HTTP_ORIGIN"]);
}
echo header('Access-Control-Allow-Credentials: true');
echo header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS');
echo header('Access-Control-Allow-Headers: Accept, Content-type, Access-Control-Allow-Header');
echo header('Content-type: application/json');
echo header('Access-Control-Max-Age: 3600');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    return 0;
}
?>