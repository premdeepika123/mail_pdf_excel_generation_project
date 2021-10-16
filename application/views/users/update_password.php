<?php
public function change_password(){

	
	$this->form_validation->set_rules('password','Current Password','required|min_length[5]');
	$this->form_validation->set_rules('new_password','New Password','required|min_length[5]');
	$this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[5]|matches[new_password]');

	if($this->form_validation->run() == TRUE)
	 	 {


	 	 	$data=array(

	 	 		'password' =>$_POST['password'],
	 			 'new_password' =>md5($_POST['new_password'])
	 			  
	 			 
	 		);

	 		$this->db->insert('users',$data);
	 		$this->session->set_flashdata("success","Your password has been changed successfully");
	 		redirect("auth/login","refresh");

	 		//add user in database
	 	}

	$this->load->view('change_password');
}



// //updated_data
// 	 	 	$data=array(

// 	 	 		 'password' =>md5($this->input->post('new_password')),
// 	 	 		 'update_date' =>time()
	 			  
	 			 
// 	 		);

// 	 	 	//check old password
// 	 	 	$result=$this->Auth_Model->check_old_password($this->session->userdata('user_id'),$data['password']);
// 	 	 	print_r($result);
	 	 	

// 	 		$this->db->insert('users',$data);
// 	 		$this->session->set_flashdata("success","Your password has been changed successfully");
// 	 		redirect("auth/login","refresh");
?>