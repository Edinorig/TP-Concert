<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'concertovysotskyyy');
if(!$connect) {
  die('Error connect database');
}