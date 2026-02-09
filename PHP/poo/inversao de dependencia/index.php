<?php 

class UserService {
    
    public function create(){
        echo "Criando um user"; 
    }
}

class UserController {

    private  $userService;

    public function store(){
        $this->userService = new UserService(); 
        $this->userService->create(); 
    }
}