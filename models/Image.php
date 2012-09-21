<?php
public class Image{

public  $id;
private $org_name;
private $con_name;
private $u_id;
private $image_data;
private $timestamp;

function __construct($id,$org_name,$con_name,$u_id,$image_data,$timestamp) {
	$this->id		= $id;
	$this->org_name		= $org_name;
	$this->con_name		= $con_name;
	$this->u_id		= $u_id;
	$this->image_data	= $image_data;
	$this->timestamp	= $timestamp;

        }

public function get_image(){

	}

public function add_image(){

	}

public function update_image(){

	}

public function delete_image(){

	}
public function set_image_ll(){

	}

} 
