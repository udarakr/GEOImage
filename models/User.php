<?php
public class User{

public $id;
private $f_name;
private $l_name;
private $u_name;
private $password;
private $email;
private $reg_date;

function __construct($id,$f_name,$l_name,$u_name,$password,$email,$reg_date) {
	$this->id	= $id;
	$this->f_name	= $f_name;
	$this->l_name	= $l_name;
	$this->u_name	= $u_name;
	$this->password	= $password;
	$this->email	= $email;
	$this->reg_date	= $reg_date;

        }

public function get_user(){

	}

public function add_user(){

	}

public function update_user(){

	}

public function delete_user(){

	}

} 
