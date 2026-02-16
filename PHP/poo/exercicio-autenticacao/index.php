<?php 

require "AuthService.php"; 

$auth = new AuthService(); 

$auth->register("teste@gmail.com", "123");
$auth->login("teste@gmail.com", "321");
