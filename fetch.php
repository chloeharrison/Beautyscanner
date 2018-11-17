<?php
//fetch.php
require('db.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM salons
  WHERE salon_name LIKE '%".$search."%'
  OR salon_address LIKE '%".$search."%' 
  OR salon_city LIKE '%".$search."%' 
  OR salon_postcode LIKE '%".$search."%' 
  OR salon_contact LIKE '%".$search."%'
  OR salon_services LIKE '%".$search."%'
  
 ";
}
else
{
 $query = "
  SELECT * FROM salons ORDER BY salon_id
 ";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
    //
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Salon Name</th>
     <th>Address</th>
     <th>City</th>
     <th>PostCode</th>
     <th>Salon Services</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["salon_name"].'</td>
    <td>'.$row["salon_address"].'</td>
    <td>'.$row["salon_city"].'</td>
    <td>'.$row["salon_postcode"].'</td>
    <td>'.$row["salon_services"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Salon Not Found';
}
//
?>