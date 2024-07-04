<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

 <div class="row card-body"> 
  <?php
  $eid2=$_POST['edit_id2'];
  $ret2=mysqli_query($con,"select * from  students where id='$eid2' ");
  while ($row=mysqli_fetch_array($ret2))
  {
    ?> 
    <div class="col-md-4">
      <img src="studentimages/<?php echo htmlentities($row['studentImage']);?>" width="100" height="100">
    </div>
    <div class="col-md-8">
      <table>
         <th style="color: darkred;">STUDENT DETAILS</th>
         <tr>
          <th>Name:</th>
          <td>&nbsp;<?php  echo $row['studentName'];?></td>
        </tr>
         <tr>
          <th>Register No:</th>
          <td>&nbsp;<?php  echo $row['studentno'];?></td>
        </tr>
        <tr>
          <th>Class:</th>
          <td>&nbsp;<?php  echo $row['class'];?></td>
        </tr>
        <tr>
          <th>Date of Birth:</th>
          <td>&nbsp;<?php  echo $row['dob'];?></td>
        </tr>
        <tr>
          <th>Community:</th>
          <td>&nbsp;<?php  echo $row['community'];?></td>
        </tr>
        <tr>
          <th>Contact No:</th>
          <td>&nbsp;<?php  echo $row['contactno'];?></td>
        </tr>
        <tr>
          <th>Emis no:</th>
          <td>&nbsp;<?php  echo $row['emisno'];?></td>
        </tr>
        <tr>
          <th>Blood group:</th>
          <td>&nbsp;<?php  echo $row['bloodgroup'];?></td>
        </tr>
        <tr>
          <th>Religion:</th>
          <td>&nbsp;<?php  echo $row['religion'];?></td>
        </tr>
        <tr>
          <th>Caste:</th>
          <td>&nbsp;<?php  echo $row['caste'];?></td>
        </tr>
        <tr>
          <th>Firstgraduate:</th>
          <td>&nbsp;<?php  echo $row['firstgraduate'];?></td>
        </tr>
        <tr>
          <th>Disabled:</th>
          <td>&nbsp;<?php  echo $row['dabled'];?></td>
        </tr>
      </table>
     
      <hr>
      <table>
      <th style="color: darkred;">PARENT DETAILS</th>
      <tr>
          <th>Father Name:</th>
          <td>&nbsp;<?php  echo $row['parentName'];?></td>
        </tr>
        <tr>
          <th>Mother Name:</th>
          <td>&nbsp;<?php  echo $row['mothername'];?></td>
        </tr>
        <tr>
          <th>Guardian Name:</th>
          <td>&nbsp;<?php  echo $row['guardianname'];?></td>
        </tr>
        <tr>
          <th>Father's Occupation:</th>
          <td>&nbsp;<?php  echo $row['occupation'];?></td>
        </tr>
        <tr>
          <th>Mother's Occupation:</th>
          <td>&nbsp;<?php  echo $row['moccupation'];?></td>
        </tr>
        <tr>
          <th>Parent/Guardian Mobile No:</th>
          <td>&nbsp;<?php  echo $row['contactno'];?></td>
        </tr>
        <tr>
          <th>Annual Income:</th>
          <td>&nbsp;<?php  echo $row['annualincome'];?></td>
        </tr>
      </table>

      <hr>
      <table>
      <th style="color: darkred;">CONTACT&nbsp;DETAILS</th>
        <tr>
          <th>Student Mobile No:</th>
          <td>&nbsp;<?php  echo $row['studentpno'];?></td>
        </tr>
        <tr>
          <th>Aadhaar No:</th>
          <td>&nbsp;<?php  echo $row['aadhaarno'];?></td>
        </tr>
        <tr>
          <th>Email:</th>
          <td>&nbsp;<?php  echo $row['email'];?></td>
        </tr>
        <tr>
          <th>Communication Address:</th>
          <td>&nbsp;<?php  echo $row['caddress'];?></td>
        </tr>
        <tr>
          <th>Permanent Address:</th>
          <td>&nbsp;<?php  echo $row['paddress'];?></td>
        </tr>
      </table>

      <hr>
      <table>
      <th style="color: darkred;">BANK DETAILS</th>
      <tr>
          <th>Bank Name:</th>
          <td>&nbsp;<?php  echo $row['bankname'];?></td>
        </tr>
        <tr>
          <th>Branch Name:</th>
          <td>&nbsp;<?php  echo $row['branchname'];?></td>
        </tr>
        <tr>
          <th>IFSC Code:</th>
          <td>&nbsp;<?php  echo $row['ifsc'];?></td>
        </tr>
        <tr>
          <th>Account No:</th>
          <td>&nbsp;<?php  echo $row['accno'];?></td>
        </tr>
        <tr>
          <th>MICR Code:</th>
          <td>&nbsp;<?php  echo $row['micr'];?></td>
        </tr>
      </table>

      <hr>
      <table>
      <th style="color: darkred;">ACADEMIC DETAILS</th>
      <tr>
          <th>Academic year of join:</th>
          <td>&nbsp;<?php  echo $row['yearjoin'];?></td>
        </tr>
        <tr>
          <th>Programme:</th>
          <td>&nbsp;<?php  echo $row['ctype'];?></td>
        </tr>
        <tr>
          <th>Course:</th>
          <td>&nbsp;<?php  echo $row['course'];?></td>
        </tr>
        <tr>
          <th>Department:</th>
          <td>&nbsp;<?php  echo $row['dept'];?></td>
        </tr>
        <tr>
          <th>Medium:</th>
          <td>&nbsp;<?php  echo $row['medium'];?></td>
        </tr>
        <tr>
          <th>Mode of Study:</th>
          <td>&nbsp;<?php  echo $row['mode'];?></td>
        </tr>
        <tr>
          <th>Date of admission:</th>
          <td>&nbsp;<?php  echo $row['doa'];?></td>
        </tr>
        <tr>
          <th>10th Register No:</th>
          <td>&nbsp;<?php  echo $row['tenregno'];?></td>
        </tr>
        <tr>
          <th>10th Mark:</th>
          <td>&nbsp;<?php  echo $row['tenmark'];?></td>
        </tr>
        <tr>
          <th>12th Register No:</th>
          <td>&nbsp;<?php  echo $row['tregno'];?></td>
        </tr>
        <tr>
          <th>12th Mark:</th>
          <td>&nbsp;<?php  echo $row['tmark'];?></td>
        </tr>
        <tr>
          <th>DayScholar/Hosteller:</th>
          <td>&nbsp;<?php  echo $row['dsh'];?></td>
        </tr>
      </table>

      <hr>
      <table>
      <th style="color: darkred;">SCHOLARSHIP&nbsp;DETAILS</th>
      <tr>
          <th>Scholarship:</th>
          <td>&nbsp;<?php  echo $row['scholarship'];?></td>
        </tr>
      </table>
      

  </div>
    <?php 
  } ?>
 </div>
