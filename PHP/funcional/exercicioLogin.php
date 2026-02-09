<?php 

/*
Você recebe email e senha de um formulário de login.

Requisitos

O email não pode estar vazio

O email deve conter @

A senha deve ter no mínimo 8 caracteres

Retornar mensagens claras de erro
*/


function loginValidation($email, $password): array {
    $errors = []; 

   if (empty($email)) {
        $errors[] = "E-mail não pode estar vazio";
    } elseif (!str_contains($email, "@")) {
        $errors[] = "E-mail deve conter @";
    }

    if(strlen($password) < 8){
        array_push($errors, "A senha deve ter no mínimo 8 caracteres"); 
    }

   return $errors; 


}

$user = [
    "email" => "breno@gmail.com", 
    "password" => "12345678"
];

$errors = loginValidation($user['email'], $user['password']);

if(!empty($errors)){
    echo "Erro ao tentar realizar login\n"; 

    foreach($errors as $message){
        echo $message . "\n"; 
    }
}else {
    echo "Login realizado com sucesso"; 
}
