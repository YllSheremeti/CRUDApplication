<?php
$mysqli = new mysqli("localhost", "root", "", "crudproject", "3307");
if($mysqli->connect_error){
    exit('Error connecting to database');
}