<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HtmltoPDF extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('htmltopdf_model');
  $this->load->library('pdf');
 }

 public function index()
 {
  $data['employee_data'] = $this->htmltopdf_model->fetch();
  $this->load->view('htmltopdf', $data);
 }


 public function employee_details(){

              if(isset($_POST['subscribe']))
     {


        //if form vaidated true
        $this->form_validation->set_rules('employee_name','Employee_Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('postalcode','Postal_Code','required|min_length[6]');
        $this->form_validation->set_rules('country','Country','required');
        if($this->form_validation->run() == TRUE){


            



            // echo "form validated";

            $data=array(

                  'employee_name' =>$_POST['employee_name'],
                  'email' =>$_POST['email'],
                  'address' =>$_POST['address'],
                  'city' =>$_POST['city'],
                  'postal_code' =>$_POST['postalcode'],
                  'country' =>$_POST['country']
                  // 'image' =>$_POST['image']
            );

            $this->db->insert('tbl_employee',$data);
            $this->session->set_flashdata("success","Your are subscribed.You can view the details");
            redirect("htmltopdf");

        

            //add user in database


        }
     }

    $this->load->view('subscribe');
}






 public function details()
 {
  if($this->uri->segment(3))
  {
   $employ_id = $this->uri->segment(3);
   $data['employee_details'] = $this->htmltopdf_model->fetch_single_details($employ_id);
   $this->load->view('htmltopdf', $data);
  }
 }

 public function pdfdetails()
 {
  if($this->uri->segment(3))
  {
   $employ_id = $this->uri->segment(3);
   $html_content = '<h3 align="center">Convert HTML to PDF in CodeIgniter using Dompdf</h3>';
   $html_content .= $this->htmltopdf_model->fetch_single_details($employ_id);
   $this->pdf->loadHtml($html_content);
   $this->pdf->render();
   $this->pdf->stream("".$employ_id.".pdf", array("Attachment"=>0));
  }
 }

}
?>