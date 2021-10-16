<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth_Model extends CI_Model{


	public function __construct()
{

	parent::__construct();
}


	// public function fetch_pass($session_id)
	// {
	// $fetch_pass=$this->db->query("select * from users where user_id='$session_id'");
	// $res=$fetch_pass->result();
	// }
	// public function update_password($session_id,$new_password)
	// {
	// $update_pass=$this->db->query("UPDATE users set password='$new_password'  where user_id='$session_id'");
	// }


// public function do_register($data_login){



// 	$res=$this->db->insert('users',$data_login);
// 	$response['message']='Data is inserted successfully';
// 	$response['status']='1';
// 	return $response;

// }

public function insertUser($data)
    {
        return $this->db->insert('users', $data);
    }
    
    //send verification email to user's email id
  // public  function sendEmail($to_email)
  //   {
  //       $from_email = 'priscilladeepika123@gmail.com'; //change this to yours
  //       $subject = 'Verify Your Email Address';
  //       $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.gmail.com/user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Gmail Team';
        
  //       //configure email settings
  //       $config['protocol'] = 'smtp';
  //       $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
  //       $config['smtp_port'] = '465'; //smtp port number
  //       $config['smtp_user'] = $from_email;
  //       $config['smtp_pass'] = '**********'; //$from_email password
  //       $config['mailtype'] = 'html';
  //       $config['charset'] = 'iso-8859-1';
  //       $config['wordwrap'] = TRUE;
  //       $config['newline'] = "\r\n"; //use double quotes
  //       $this->email->initialize($config);
        
  //       //send mail
  //       $this->email->from($from_email, 'gmail');
  //       $this->email->to($to_email);
  //       $this->email->subject($subject);
  //       $this->email->message($message);
  //       return $this->email->send();
  //   }
    
    //activate user account
    function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('users', $data);
    }

}


?>