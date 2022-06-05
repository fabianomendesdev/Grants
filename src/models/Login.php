<?php

class Login extends Model {

    public function checkLogin() {
        $user = User::getOne(['email' => $this->email]);
        if(isset($user)){
            if(password_verify($this->password, $user->password)){
                if(!$user->active){
                    throw new AppException("Usuário desativado!");
                }
                return $user;
            }
        }
        throw new AppException("Email e/ou senha incorretos!");
    }

    public function validate() { 
        $email = $this->email;
        $password = $this->password;
        $errors = [];

        if(!$email){
            $errors['email'] = "O email é obrigatório!";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Digite um email válido!";
        }

        if(!$password){
            $errors['password'] = "A senha é obrigatória!";
        }

        if(count($errors) > 0){
            throw new AppArrayException($errors);
        }
    }
}