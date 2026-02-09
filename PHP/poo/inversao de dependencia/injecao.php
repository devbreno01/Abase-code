<?php 

class UserService {
    
    public function create(){
        echo "Criando um user"; 
    }
}

class UserController {
    private $userService;  

    public function __construct(UserService $service)
    {
        $this->userService = $service;
    }

    public function store()
    {
        $this->userService->create(); 
    }
}