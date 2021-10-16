<?php



class Form_model extends CI_Model
{

	public function login_user(){


		$this->db->where('username',$username);
		$this->db->where ('password',$password);

		$result=$this->db->get('users');

		if($result->num_rows() == 1)
		{

			return $result->row(0)->id;


		}
		else

		{

			return false;
		}






	}







}