
<html>
<head>
    <title>Convert HTML to PDF in CodeIgniter using Dompdf</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container box">
  <br />
  <h3 align="center">Convert HTML to PDF in CodeIgniter using Dompdf</h3>
  <br />
  <?php
  if(isset($employee_data))
  {
  ?>
  <div class="text-right">
  <h4><a href="<?php echo base_url(); ?>index.php/htmltopdf/employee_details">Subscribe</a></h4><br>
</div>
  <div class="table-responsive">
   <table class="table table-striped table-bordered">
    <tr>
     <th>Employee ID</th>
     <th>Employee Name</th>
     <th>View</th>
     <th>View in PDF</th>
    </tr>
   <?php
   foreach($employee_data->result() as $row)
   {
    echo '
    <tr>
     <td>'.$row->employee_id.'</td>
     <td>'.$row->employee_name.'</td>
     <td><a href="'.base_url().'index.php/htmltopdf/details/'.$row->employee_id.'">View</a></td>
     <td><a href="'.base_url().'index.php/htmltopdf/pdfdetails/'.$row->employee_id.'">View in PDF</a></td>
    </tr>
    ';
   }
   ?>
   </table>
  </div>
  <?php
  }
  if(isset($employee_details))
  {
   echo $employee_details;
  }
  ?>
 </div>
</body>
</html>

