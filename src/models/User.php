<?php
class User {

    protected $user_id, $name, $email, $password, $telefono, $role;

    
    public function getUser_id()
    {
        return $this->user_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getRole()
    {
        return $this->role;
    }



}
?>