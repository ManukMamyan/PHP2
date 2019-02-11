<?php

namespace app\models;


class User extends Model
{
    private $id;
    private $login;
    private $password;
    private $email;

    public function __constructor($id, $login, $password, $email) {
    	$this->id = $id;
    	$this->login = $login;
    	$this->password = $password;
    	$this->email = $email;
    }

    public function getTableName():string
    {
        return 'users';
    }
}