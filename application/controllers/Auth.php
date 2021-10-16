 <?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

	 public function __construct()
    {
        parent::__construct();
        $this->CI = get_instance();
    }




	public function forgot_password()
	{


	// $this->form_validation->set_rules('oldpassword','Old Password','trim|required|min_length[5]');
	// $this->form_validation->set_rules('newpassword','New Password','trim|required|min_length[5]');
	// $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[5]|matches[new_password]');

	// if($this->form_validation->run() == false)
	// {

		

		$this->load->view('change_password');	
	
	// }
}


public function resetlink()

{


$email=$this->input->post('email_id');

$result=$this->db->query("SELECT * FROM users where email='".$email."'")->result_array();
if(count($result)>0)
{

    $tokan=rand(1000,9999);
    $message="please click on password reset link <br><a href='".base_url('auth/reset?tokan=').$tokan."'>Reset Password</a>";
    $this->Email($email,'Reset Passowrd link');


}
else
{

$this->session->set_flashdata('message', "Email not registered");
redirect('auth/forgot_password');


}

}

public function reset(){


        $tokan=$this->input->get('$tokan');
        $this->load->view('resetpass');
}
public function logout()
{


	unset ($_SESSION);   
	session_destroy();
	redirect("auth/login","refresh");

}
public function login()
{

		 $this->form_validation->set_rules('username','Username','required');
	 	 $this->form_validation->set_rules('password','Password','required|min_length[5]');
	 	 if($this->form_validation->run() == TRUE)
	 	 {


	 	 	$username=$_POST['username'];
	 	 	$password=md5($_POST['password']);

	 	 	//check user in database
	 	 	$this->db->select('*');
	 	 	$this->db->from('users');
	 	 	$this->db->where(array('username'=>$username,'password'=>$password));
	 	 	$query=$this->db->get();
	 	 	$user=$query->row();

	 	 	//if user exists
	 	 	if($user->email)
	 	 	{
	 	 		//temporary message

	 	 		$this->session->set_flashdata("success","You are logged in");


	 	 		//set session varaiable
 
	 	 		$_SESSION['user_logged']=TRUE;
	 	 		$_SESSION['username']=$user->username;

	 	 		//redirect to profile page

	 	 		redirect("user/profile","refresh");


	 	 	}
	 	 	else
	 	 	{ 
	 	 		$this->session->set_flashdata("error","No such account found in database");
	 	 		redirect("auth/login","refresh");
	 	 	}

	 	 }

         $this->load->view('login');

	
}



 

public function register() 
{


     if(isset($_POST['register']))
     {


        //if form vaidated true
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[5]|matches[password]');
        $this->form_validation->set_rules('phone','Phone','required|min_length[10]');
        if($this->form_validation->run() == TRUE){


            



            // echo "form validated";

            $data=array(

                  'username' =>$_POST['username'],
                  'email' =>$_POST['email'],
                  'password' =>md5($_POST['password']),
                  'gender' =>$_POST['gender'],
                  'phone' =>$_POST['phone']
            );

            $this->db->insert('users',$data);

            
                
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;

$this->email->initialize($config);
$this->load->library('email');

$this->email->from('priscillapremdeepika@gmail.com', 'deepika');
$this->email->to('priscilladeepika123@gmail.com');
$this->email->cc('priscilladeepika84@gmail.com');
$this->email->bcc('depikamulkala444@gmail.com');

$this->email->subject('Email Test');
$this->email->message('Testing the email class.');

$this->email->send();
                    
            $this->session->set_flashdata("success","Your account has been registered.You can login now");
            redirect("auth/register","refresh");

        

            //add user in database


        }
     }

    $this->load->view('register');
}

 public function email(){



 }   



 // public function verify($hash=NULL)
 //    {
 //        if ($this->auth_model->verifyEmailID($hash))
 //        {
 //            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
 //            redirect('auth/register');
 //        }
 //        else
 //        {
 //            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
 //            redirect('auth/register');
 //        }
 //    }

} 




?>