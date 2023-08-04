<?php
$conex=mysqli_connect("localhost", "root", "", "intranet");
if (!$conex) {
    die("Error connecting to database: " . mysqli_error($conex));
}
?>