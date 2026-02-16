<?php 

require_once "User.php"; 
require_once "TokenGenerator.php";

class AuthService{

    private array $users = []; 

    public function register(string $email, string $password): void
    {
        if(empty($email) || empty($password) ){
            throw new Error("Campos não preenchidos. Preencha todos os campos");
            die(); 
        }
        $id = random_int(0,100); 
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->users[] = new User($id,$email,$hashedPassword); 
      
    }

    public function login(string $email, string $password): void
    {
        foreach($this->users as $index => $user)
        {
           
            if($user->email === $email){
                if( password_verify($password, $user->passwordHash))
                {
                    $token = new TokenGenerator(); 
                    echo "Usuário autenticado com sucesso. \nToken: " . $token->generateToken();
                    //return "Usuário autenticado com sucesso. \nToken: " . $token->generateToken(); 
                }
            }
        }
        echo "falha ao realizar login";
    }

    private function verifyPassword($plainPassword): bool
    {
        return false; 
    }
}