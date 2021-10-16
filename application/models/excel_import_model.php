<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_import_model extends CI_Model {
 
function batchInsertdata($data){

         $this->db->truncate('tbl_employee'); // empty the table
         $this->db->insert_batch('tbl_employee', $data);
         return true;


    }
}
?>