<?php

class Register extends Model {
    public function validate() {
        $errors = [];

        if(!$this->name){
            $errors['name'] = "O campo nome é obrigatório!";
        }

        if(!$this->email){
            $errors['email'] = "O campo E-mail é obrigatório!";
            
        }
        if(!$this->day || !$this->month || !$this->year){
            $errors['birth'] = "Preencha todos os campos";
        }
        
        if(!$this->series || $this->series === ''){
            $errors['series'] = "O campo série é obrigatório";
        }
        
        if(!$this->sex){
            $errors['sex'] = "O campo sexo é obrigatório";
        }
        
        if(!$this->password){
            $errors['password'] = "O campo senha é obrigatório";
        }
        
        if(!$this->passwordConfirmation){
            $errors['passwordConfirmation'] = "A confirmação de senha é obrigatória";
        }        
        
        if(count($errors) > 0){
            throw new RegisterException($errors);
        }
        
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Digite o E-mail corretamente!";
        }
                
        if(!$this->dateValidation()){
            $errors['birth'] = "Digite a data corretamente";
        }
        
        if($this->series){
            $sel = [1,2,3];
            $sum = 0;
            foreach($sel as $value){
                if($this->series == $value){
                    $sum++;
                }
            }
            if($sum !== 1){
                $errors['series'] = "Preencha o campo corretamente";
            }
        }
        
        if($this->sex){
            $sel = ['F','M','O'];
            $sum = 0;
            foreach($sel as $value){
                if($this->sex == $value){
                    $sum++;
                }
            }
            if($sum !== 1){
                $errors['sex'] = "Preencha o campo corretamente";
            }
        }
        
        if($this->password !== $this->passwordConfirmation){
            $errors['password'] = "As senhas não se coincidem";
            $errors['passwordConfirmation'] =  "As senhas não se coincidem";
        }
        
        if(count($errors) > 0){
            throw new RegisterException($errors);
        }
        
        if((Database::getResultFromQuery("SELECT email FROM users WHERE email = '$this->email'"))->num_rows != 0){
            $errors['email'] = "Este email já está cadastrado!";
        }

        if(count($errors) > 0){
            throw new RegisterException($errors);
        }
    }
    
    private function dateValidation(){
        if($this->day < 1 || $this->day > 31){
            return false;
        }
        
        if($this->month < 1 || $this->month > 12){
            return false;
        }
        
        if($this->year < (intval(date('Y')) - 51) || $this->year > intval(date('Y'))){
            return false;
        }
        
        return true;
    }

    private function getFormattedDate(){
        return "{$this->year}-{$this->month}-{$this->day}";
    }

    public function getFormattedData(){
        return ['name'=>$this->name, 'birth' => $this->getFormattedDate(), 'series' => $this->series, 'sex' => $this->sex, 'password' => $this->password, 'email' => $this->email];
    }
}   