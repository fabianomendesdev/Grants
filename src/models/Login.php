<?php

class Login extends Model {

    public function checkLogin() {
        $user = User::getOne(['email' => $this->email]);
        if(isset($user)){
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
    }
}