<?php




defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
    }

    public function index() {
        $this->load->view('upload_form');
    }

    public function store() {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|docx|txt';
        $config['max_size'] = 0;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('upload_result', $data);
        }
    }

}
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Upload extends CI_Controller {


//   public function __construct()
//         {
//                 parent::__construct();
//                 $this->load->helper(array('fileupload'));
//         }

	
// 	public function index(){

// 		   $this->load->view('vm_upload');

// 	}

// 	 public function upload_file()
// 	 {

// 	  echo $user_file=fileuploadCI('user_file','upload');
	 				
// 	// 	       
// 	}
// }
?>
