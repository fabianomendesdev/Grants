<?php

class AppArrayException extends AppException {
    private $errors = [];
    function __construct($errors = [],$message = "Erro de validação"){
        parent:: __construct($message);
        $this->errors = $errors;
    }

    function getErrors(){
        return $this->errors;
    }
}