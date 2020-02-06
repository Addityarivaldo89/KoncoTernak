<?php
class user_beta extends CI_Model 
{
	function saverecords($name,$email,$pass)
	{
	$query="insert into user_beta values('1','$name','$email','$pass')";
	$this->db->query($query);
	}
}
