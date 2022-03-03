<?php

    class User extends DB
    {
        public int $user_id;
        public string $username;
        public string $password;
        public string $email;

        public function __construct($user_id, $username, $password, $email)
        {
            $this->user_id = $user_id;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }

        public function addUser(){
            
        }
    }