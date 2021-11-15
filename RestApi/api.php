<?php
    class Api extends Rest{
        public function __construct(){
            parent::__construct();
        }

        public function generateToken(){
            $email = $this->validateParameters('email',$this->param['email'],STRING);
            $pass = $this->validateParameters('pass',$this->param['pass'],STRING);
        }
    }
?>