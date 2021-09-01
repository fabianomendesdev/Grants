<?php

class LoginException extends AppException {
    function __construct($errors = [],$message = "Erro de validação"){
        parent:: __construct($message);
        $this->errors = $errors;
    }

    function getErrors(){
        return $this->errors;
    }
}