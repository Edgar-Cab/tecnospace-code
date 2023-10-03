<?php

$con = new mysqli('localhost', 'root', '', 'tecnospace');
$con -> set_charset("utf8");
if ($con->connect_errno) {
    die('fail');
}

?>