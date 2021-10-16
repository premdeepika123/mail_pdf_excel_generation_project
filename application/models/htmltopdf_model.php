<?php
class Htmltopdf_model extends CI_Model
{
public  function fetch()
 {
  $this->db->order_by('employee_id', 'DESC');
  return $this->db->get('tbl_employee');
 }
 public function fetch_single_details($employ_id)
 {
  $this->db->where('employee_id', $employ_id);
  $data = $this->db->get('tbl_employee');
  $output = '<table width="100%" cellspacing="5" cellpadding="5">';
  foreach($data->result() as $row)
  {
   $output .= '
   <tr>
   <td width="75%">
     <p><b>Name : </b>'.$row->employee_name.'</p>
     <p><b>Address : </b>'.$row->address.'</p>
     <p><b>City : </b>'.$row->city.'</p>
     <p><b>Postal Code : </b>'.$row->postal_code.'</p>
     <p><b>Country : </b> '.$row->country.' </p>
    </td>
   </tr>
   ';
  }
  $output .= '
  <tr>
   <td colspan="2" align="center"><a href="'.base_url().'index.php/htmltopdf" class="btn btn-primary">Back</a></td>
  </tr>
  ';
  $output .= '</table>';
  return $output;
 }
}

?>
