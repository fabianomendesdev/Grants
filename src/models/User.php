<?php

class User extends Model {
    protected static $tableName = 'users';
    protected static $columns = ['id','name','birth', 'series', 'sex','password','email','active','is_admin'];    
    
    public function insert(){
        $this->active = $this->active ? 0 : 1;
        $this->is_admin = $this->is_admin ? 1 : 0;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        parent:: insert();
    }
}