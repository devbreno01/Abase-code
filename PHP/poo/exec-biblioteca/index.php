<?php 

require_once  __DIR__ . "/Livro.php"; 
require_once  __DIR__ . "/Revista.php";

$livro = new Livro("A saga do POO", 2026, "Bg Guimarães"); 
$revista = new Revista("Revista do POO",2026, 12);

$livro->getInfo(); 
echo "\n\n";
$revista->getInfo(); 