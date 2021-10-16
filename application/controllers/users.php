 <?php


class Users extends CI_Controller{


// public function show($user_id){


// // $this->load->model('user_model');


// $data['results']=$this->user_model->get_users($user_id,'priya');
// // $data['welcome']="welcome to my page";

// $this->load->view('user_view',$data);

 


// }


// public function insert()
// {
// 		$username="reena";
// 		$password="111111";

// 		$this->user_model->create_users([

// 		'username'=>$username,
// 		'password'=>$password   		


// ]);
// }
// public function update()
// {
// 		$id=3;
// 		$username="swathi";
// 		$password="222222";

// 		$this->user_model->update_users([

// 		'username'=>$username,
// 		'password'=>$password   				
// 		 ],$id);


// }

// public function delete()
// {
		
// 		$id=4;
// 		$this->user_model->delete_users($id);

// }


	// public function form_index(){
	
	// 	$data = [];
	// 	$rules =[

	// 			'username' =>'required',
	// 			'password' => 'required',
	// 			'confirm_password'=> 'required',




	// 	];
	// 	if($this->validate())






	// }


	public function login()

	{

	
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');




		if ($this->form_validation->run() == TRUE)
           {   
			
           	echo "form is validated";


	   }

	   // $this->load->view('users/login_view');
           	

}




}




?> 