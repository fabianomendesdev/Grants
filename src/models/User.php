<?php

class User extends Model {
    protected static $tableName = 'users';
    protected static $columns = ['id','name','birth','password','email','active','is_admin'];    
     
}