<?php

function connect(){
    $connection = mysqli_connect('localhost','root','','bonapetit');
    return $connection;
}