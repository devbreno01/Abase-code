<?php 

class User  {
    public int $id;
    public string $email;
    public string $passwordHash;

   

    public function __construct($id,$email,$passwordHash)
    {
        $this->id = $id; 
        $this->email = $email; 
        $this->passwordHash = $passwordHash; 
    }
}