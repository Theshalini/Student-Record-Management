<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
  $sid=$_SESSION['edid']; 
  $studentname=$_POST['studentname'];
  $regno=$_POST['regno'];
  $dob=$_POST['dob'];
  $community=$_POST['community'];
  $emisno=$_POST['emisno'];
  $class=$_POST['class'];
  $bloodgroup=$_POST['bloodgroup'];
  $religion=$_POST['religion'];
  $caste=$_POST['caste'];
  $firstgraduate=$_POST['firstgraduate'];
  $dabled=$_POST['dabled'];
  $sql="update students set studentName=:studentname,studentno=:regno,dob=:dob,community=:community,emisno=:emisno,class=:class,bloodgroup=:bloodgroup,religion=:religion,caste=:caste,firstgraduate=:firstgraduate,dabled=:dabled where id='$sid'";
  $query = $dbh->prepare($sql);
  $query->bindParam(':studentname',$studentname,PDO::PARAM_STR);
  $query->bindParam(':regno',$regno,PDO::PARAM_STR);
  $query->bindParam(':dob',$dob,PDO::PARAM_STR);
  $query->bindParam(':community',$community,PDO::PARAM_STR);
  $query->bindParam(':emisno',$emisno,PDO::PARAM_STR);
  $query->bindParam(':class',$class,PDO::PARAM_STR);
  $query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
  $query->bindParam(':religion',$religion,PDO::PARAM_STR);
  $query->bindParam(':caste',$caste,PDO::PARAM_STR);
  $query->bindParam(':firstgraduate',$firstgraduate,PDO::PARAM_STR);
  $query->bindParam(':dabled',$dabled,PDO::PARAM_STR);
  $query->execute();
  if ($query->execute()) {
    echo "<script>alert('updated successfuly.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}

if(isset($_POST['save']))
{
  $sid=$_SESSION['edid']; 
  $parentname=$_POST['parentname'];
  $mothername=$_POST['mothername'];
  $guardianname=$_POST['guardianname'];
  $occupation=$_POST['occupation'];
  $moccupation=$_POST['moccupation'];
  $phone=$_POST['phone'];
  $annualincome=$_POST['annualincome'];
  $sql="update students set parentName=:parentname,mothername=:mothername,guardianname=:guardianname,occupation=:occupation,moccupation=:moccupation,contactno=:phone,annualincome=:annualincome where id='$sid'";
  $query = $dbh->prepare($sql);
  $query->bindParam(':parentname',$parentname,PDO::PARAM_STR);
  $query->bindParam(':mothername',$mothername,PDO::PARAM_STR);
  $query->bindParam(':guardianname',$guardianname,PDO::PARAM_STR);
  $query->bindParam(':occupation',$occupation,PDO::PARAM_STR);
  $query->bindParam(':moccupation',$moccupation,PDO::PARAM_STR);
  $query->bindParam(':phone',$phone,PDO::PARAM_STR);
  $query->bindParam(':annualincome',$annualincome,PDO::PARAM_STR);
  $query->execute();
  if ($query->execute()) {
    echo "<script>alert('updated successfuly`.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}

if(isset($_POST['save3']))
{
  $sid=$_SESSION['edid']; 
  $studentpno=$_POST['studentpno'];
  $aadhaarno=$_POST['aadhaarno'];
  $email=$_POST['email'];
  $caddress=$_POST['caddress'];
  $paddress=$_POST['paddress'];
  $sql="update students set studentpno=:studentpno,aadhaarno=:aadhaarno,email=:email,caddress=:caddress,paddress=:paddress where id='$sid'";
  $query = $dbh->prepare($sql);
  $query->bindParam(':studentpno',$studentpno,PDO::PARAM_STR);
  $query->bindParam(':aadhaarno',$aadhaarno,PDO::PARAM_STR);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
  $query->bindParam(':caddress',$caddress,PDO::PARAM_STR);
  $query->bindParam(':paddress',$paddress,PDO::PARAM_STR);
  $query->execute();
  if ($query->execute()) {
    echo "<script>alert('updated successfuly`.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}

if(isset($_POST['pass']))
{
  $sid=$_SESSION['edid'];
  $bankname=$_POST['bankname'];
  $branchname=$_POST['branchname'];
  $ifsc=$_POST['ifsc'];
  $accno=$_POST['accno'];
  $micr=$_POST['micr'];
  $sql="update students set bankname=:bankname,branchname=:branchname,ifsc=:ifsc,accno=:accno,micr=:micr where id='$sid'";
  $query = $dbh->prepare($sql);
  $query->bindParam(':bankname',$bankname,PDO::PARAM_STR);
  $query->bindParam(':branchname',$branchname,PDO::PARAM_STR);
  $query->bindParam(':ifsc',$ifsc,PDO::PARAM_STR);
  $query->bindParam(':accno',$accno,PDO::PARAM_STR);
  $query->bindParam(':micr',$micr,PDO::PARAM_STR);
  $query->execute();
  if ($query->execute()) {
    echo "<script>alert('updated successfuly.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}

if(isset($_POST['save4']))
{
  $sid=$_SESSION['edid']; 
  $yearjoin=$_POST['yearjoin'];
  $ctype=$_POST['ctype'];
  $course=$_POST['course'];
  $dept=$_POST['dept'];
  $medium=$_POST['medium'];
  $mode=$_POST['mode'];
  $doa=$_POST['doa'];
  $tenregno=$_POST['tenregno'];
  $tenmark=$_POST['tenmark'];
  $tregno=$_POST['tregno'];
  $tmark=$_POST['tmark'];
  $ugregno=$_POST['ugregno'];
  $dsh=$_POST['dsh'];
  $scholarship=$_POST['scholarship'];
  $sql="update students set yearjoin=:yearjoin,ctype=:ctype,course=:course,dept=:dept,medium=:medium,mode=:mode,doa=:doa,tenregno=:tenregno,tenmark=:tenmark,tregno=:tregno,tmark=:tmark,ugregno=:ugregno,dsh=:dsh,scholarship=:scholarship where id='$sid'";
  $query = $dbh->prepare($sql);
  $query->bindParam(':yearjoin',$yearjoin,PDO::PARAM_STR);
  $query->bindParam(':ctype',$ctype,PDO::PARAM_STR);
  $query->bindParam(':course',$course,PDO::PARAM_STR);
  $query->bindParam(':dept',$dept,PDO::PARAM_STR);
  $query->bindParam(':medium',$medium,PDO::PARAM_STR);
  $query->bindParam(':mode',$mode,PDO::PARAM_STR);
  $query->bindParam(':doa',$doa,PDO::PARAM_STR);
  $query->bindParam(':tenregno',$tenregno,PDO::PARAM_STR);
  $query->bindParam(':tenmark',$tenmark,PDO::PARAM_STR);
  $query->bindParam(':tregno',$tregno,PDO::PARAM_STR);
  $query->bindParam(':tmark',$tmark,PDO::PARAM_STR);
  $query->bindParam(':ugregno',$ugregno,PDO::PARAM_STR);
  $query->bindParam(':dsh',$dsh,PDO::PARAM_STR);
  $query->bindParam(':scholarship',$scholarship,PDO::PARAM_STR);
  $query->execute();
  if ($query->execute()) {
    echo "<script>alert('updated successfuly.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}

if(isset($_POST['save2']))
{
  $sid=$_SESSION['edid'];
  $studentimage=$_FILES["studentimage"]["name"];
  move_uploaded_file($_FILES["studentimage"]["tmp_name"],"studentimages/".$_FILES["studentimage"]["name"]);
  $sql="update students set studentImage=:studentimage where id='$sid' ";
  $query = $dbh->prepare($sql);
  $query->bindParam(':studentimage',$studentimage,PDO::PARAM_STR);
  $query->execute();
  if ($query->execute()) {
    echo "<script>alert('updated successfuly.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}
?>


<!-- Content Wrapper. Contains page content -->
<div class="card-body">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
       <?php
       $eid=$_POST['edit_id'];
       $ret=mysqli_query($con,"select * from  students where id='$eid'");
       $cnt=1;
       while ($row=mysqli_fetch_array($ret))
       {
         $_SESSION['edid']=$row['id']; 
         ?>
         <div class="col-md-3">
           <!-- Profile Image -->
           <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="img-circle"
                src="studentimages/<?php echo htmlentities($row['studentImage']);?>" width="150" height="150" class="user-image"
                alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><?php  echo $row['name'];?></h3>



              <p class="text-muted text-center"><strong></strong></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Name:</b> <a class="float-right"><?php  echo $row['studentName'];?></a>
                </li>
                <li class="list-group-item">
                  <b>Register No:</b> <a class="float-right"><?php  echo $row['studentno'];?> </a>
                </li>
                
              </ul>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#studentdetail" data-toggle="tab">Student Details</a></li>
                <li class="nav-item"><a class="nav-link" href="#parentdetail" data-toggle="tab">Parent Details</a></li>
                <li class="nav-item"><a class="nav-link" href="#contactdetail" data-toggle="tab">Contact Details</a></li>
                <li class="nav-item"><a class="nav-link" href="#bankdetail" data-toggle="tab">Bank Details</a></li>
                <li class="nav-item"><a class="nav-link" href="#academicdetail" data-toggle="tab">Academic Details</a></li>
                <li class="nav-item"><a class="nav-link" href="#change" data-toggle="tab">Update Image</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="studentdetail">
                  <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal" >
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                         <label for="studentname">Student Name</label>
                         <input name="studentname" class="form-control" name="studentname" id="studentname" value="<?php  echo $row['studentName'];?>" required>
                       </div>
                       <!-- /.form-group -->
                     </div>
                     <div class="col-md-4">
                      <div class="form-group">
                        <label for="studentno">Reg No</label>
                        <input name="regno" class="form-control" name="regno" id="regno" value="<?php  echo $row['studentno'];?>" required>
                      </div>        
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input class="form-control" id="dob" name="dob" value="<?php  echo $row['dob'];?>" required>
                      </div>        
                    </div>
                    <!-- /.col -->
                  </div><!-- ./row -->

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Class</label>
                        <input class="form-control" id="class" name="class" value="<?php  echo $row['class'];?>" required>
                      </div>        
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                      <label for="community">Community</label>
                          <select type="select" class="form-control" id="community" name="community" value="<?php  echo $row['community'];?>" required>
                            <option>Select community</option>
                            <option value="OC">OC</option>
                            <option value="MBC">MBC</option>
                            <option value="BC">BC</option>
                            <option value="BC-Muslim">BC-Muslim</option>
                            <option value="SC-Arunthathiyar">SC-Arunthathiyar</option>
                            <option value="SC-Others">SC-Others</option>
                            <option value="DNC(Denotified Communities)">DNC(Denotified Communities)</option>
                            <option value="NOT APPLICABLE">NOT APPLICABLE</option>
                          </select>
                      </div>        
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Emis No</label>
                        <input class="form-control" id="emisno" name="emisno" value="<?php  echo $row['emisno'];?>" required>
                      </div>        
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                      <label for="bloodgroup">Blood Group</label>
                          <select type="select" class="form-control" id="bloodgroup" name="bloodgroup" value="<?php  echo $row['bloodgroup'];?>" required>
                            <option>Select bloodgroup</option>
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                          </select>
                      </div>        
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                      <div class="form-group">
                      <label for="religion">Religion</label>
                          <select type="select" class="form-control" id="religion" name="religion" value="<?php  echo $row['religion'];?>" required>
                            <option>Select religion</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Jainism">Jainism</option>
                            <option value="Others">Others</option>
                          </select>
                      </div>        
                    </div>
                    <div class="form-group col-md-4">
                          <label for="caste">Caste</label>
                          <input type="text" class="form-control" id="caste" name="caste" placeholder="Enter Caste" value="<?php  echo $row['caste'];?>"required>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="firstgraduate">Is the student first graduate?</label>
                          <select type="select" class="form-control" id="firstgraduate" name="firstgraduate" value="<?php  echo $row['firstgraduate'];?>"required>
                            <option>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="dabled">Did you belong to differently abled category?</label>
                          <select type="select" class="form-control" id="dabled" name="dabled" value="<?php  echo $row['dabled'];?>"required>
                            <option>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>
                        </div>
                    <!-- /.col --> 
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class=" tab-pane" id="parentdetail">
                <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal" >

                  <div class="row">
                    <div class="form-group col-md-4">
                     <label for="parentname">Father Name</label>
                     <input name="parentname" class="form-control" id="parentname"  value="<?php  echo $row['parentName'];?>" required>
                   </div>
                   <div class="form-group col-md-4">
                      <label for="mothername">Mother Name</label>
                      <input name="mothername" class="form-control" id="mothername" value="<?php  echo $row['mothername'];?>" required>
                   </div>
                   <div class="form-group col-md-4">
                      <label for="guardianname">Guardian Name</label>
                      <input name="guardianname" class="form-control" id="guardianname" value="<?php  echo $row['guardianname'];?>" required>
                   </div>
                   <!-- /.col -->
                  </div><!-- ./row -->
                  <div class="row">
                   <div class="form-group col-md-4">
                      <label for="occupation">Father occupation</label>
                      <input name="occupation" class="form-control" id="occupation" value="<?php  echo $row['occupation'];?>" required>
                   </div>
                   <div class="form-group col-md-4">
                      <label for="moccupation">Mother occupation</label>
                      <input name="moccupation" class="form-control" id="moccupation" value="<?php  echo $row['moccupation'];?>" required>
                   </div>
                   </div>
                 <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Parent/Guardian Mobile No.</label>
                      <input class="form-control" name="phone"  value="<?php  echo $row['contactno'];?>"required>
                    </div>        
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Annual Income</label>
                      <input class="form-control" name="annualincome" value="<?php  echo $row['annualincome'];?>"  required>
                    </div>        
                  </div>
                 </div>
                  <!-- /.card-body -->
                 <div class="modal-footer text-right">
                  <button type="submit" name="save" class="btn btn-primary">Update</button>
                 </div>

                </form>
             </div>
           

            <div class=" tab-pane" id="contactdetail">
                <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal" >

                  <div class="row">
                    <div class="form-group col-md-4">
                     <label for="studentpno">Student Mobile No</label>
                     <input name="studentpno" class="form-control" id="studentpno"  value="<?php  echo $row['studentpno'];?>" required>
                   </div>
                   <div class="form-group col-md-4">
                     <label for="aadhaarno">Aadhaar No</label>
                     <input name="aadhaarno" class="form-control" id="aadhaarpno"  value="<?php  echo $row['aadhaarpno'];?>" required>
                   </div>
                   <div class="col-md-4">
                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control" name="email" value="<?php  echo $row['email'];?>"  required>
                    </div>        
                  </div>
                  </div><!-- ./row -->
                <div class="row">
                   <div class="form-group col-md-5">
                      <label for="caddress">Communication Address</label>
                      <textarea name="caddress"  class="form-control" id="caddress"  rows="6" placeholder="Enter your communication address" value="<?php  echo $row['caddress'];?>" required></textarea>
                      <!--<input type="text" class="form-control" id="caddress" name="caddress" placeholder="Enter your communication address"required>-->
                    </div>
                    <div class="form-group col-md-5">
                    <label for="paddress">Permanent Address</label>
                    <textarea name="paddress"  class="form-control" id="paddress"  rows="6" placeholder="Enter your permanent address" value="<?php  echo $row['paddress'];?>" required></textarea>
                    <!--<input type="text" class="form-control" id="caddress" name="caddress" placeholder="Enter your communication address"required>-->
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="modal-footer text-right">
                  <button type="submit" name="save3" class="btn btn-primary">Update</button>
                </div>

              </form>
            </div>

            <div class="tab-pane" id="academicdetail">
                  <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal" >

                     <div class="row">
                       <div class="col-md-4">
                        <div class="form-group">
                        <label for="yearjoin">Academic Year of Joining<br>Eg: 2021-2022</label>
                         <input name="yearjoin" class="form-control" name="yearjoin" id="yearjoin" value="<?php  echo $row['yearjoin'];?>" required>
                        </div>
                       </div>
                       <div class="form-group col-md-4">
                          <label for="ctype">Programme</label>
                          <select type="select" class="form-control" id="ctype" name="ctype" value="<?php  echo $row['ctype'];?>"required>
                            <option>Select</option>
                            <option value="UG">UG</option>
                            <option value="PG">PG</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="course">Course</label>
                          <select type="select" class="form-control" id="course" name="course" value="<?php  echo $row['course'];?>"required>
                            <option>Select</option>
                            <option value="B.A">B.A</option>
                            <option value="B.Sc">B.Sc</option>
                            <option value="B.Com">B.Com</option>
                          </select>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="form-group col-md-4">
                          <label for="dept">Department/Branch</label>
                          <input type="text" class="form-control" id="dept" name="dept" placeholder="Enter Department/Branch" value="<?php  echo $row['dept'];?>"required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="medium">Medium</label>
                          <select type="select" class="form-control" id="medium" name="medium" value="<?php  echo $row['medium'];?>"required>
                            <option>Select</option>
                            <option value="English">English</option>
                            <option value="Tamil">Tamil</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="mode">Mode of Study</label>
                          <select type="select" class="form-control" id="mode" name="mode" value="<?php  echo $row['mode'];?>"required>
                            <option>Select</option>
                            <option value="Regular">Regular</option>
                            <option value="Part time">Part time</option>
                          </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-3">
                          <label for="doa">Date of Admission</label>
                          <input type="text" class="form-control" id="doa" name="doa" placeholder="Date of Admission"  value="<?php  echo $row['doa'];?>" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="tenregno">10th Register No.</label>
                          <input type="text" class="form-control" id="tenregno" name="tenregno" placeholder="10th Register No." value="<?php  echo $row['tenregno'];?>" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="tenmark">10th Mark</label>
                          <input type="text" class="form-control" id="tenmark" name="tenmark" placeholder="10th Mark/500" value="<?php  echo $row['tenmark'];?>" required>
                        </div>
                      </div>
                        <div class="row">
                        <div class="form-group col-md-3">
                          <label for="tregno">12th Register No.</label>
                          <input type="text" class="form-control" id="tregno" name="tregno" placeholder="12th Register No." value="<?php  echo $row['tregno'];?>" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="tmark">12th Mark</label>
                          <input type="text" class="form-control" id="tmark" name="tmark" placeholder="12th Mark/600"  value="<?php  echo $row['tmark'];?>"required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="ugregno">UG Register No.</label>
                          <input type="text" class="form-control" id="ugregno" name="ugregno" placeholder="UG Register No." value="<?php  echo $row['ugregno'];?>" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label for="dsh">DayScholar/Hosteller</label>
                          <select type="select" class="form-control" id="dsh" name="dsh" value="<?php  echo $row['dsh'];?>"required>
                            <option>Select</option>
                            <option value="DayScholar">DayScholar</option>
                            <option value="Hosteller">Hosteller</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="scholarship">Scholarship if any</label>
                          <select type="select" class="form-control" id="scholarship" name="scholarship"  value="<?php  echo $row['scholarship'];?>"required>
                            <option>Select</option>
                            <option value="Farmer Welfare">Farmer Welfare</option>
                            <option value="Building worker">Building worker</option>
                            <option value="Weaver">Weaver</option>
                            <option value="Private">Private</option>
                            <option value="UGC Single Child">UGC Single Child</option>
                            <option value="Merit Scholarship">Merit Scholarship</option>
                            <option value="Minority">Minority</option>
                            <option value="None">None</option>
                          </select>
                        </div>
                  
                      </div>
        
                       
                  <!-- /.card-body -->
                  <div class="modal-footer text-right">
                    <button type="submit" name="save4" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            <!-- /.tab-pane -->

            <div class=" tab-pane" id="change">
             <div class="row">
              <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal" >
                <div class="form-group">
                  <label>Upload Image</label>
                  <input type="file" class="" name="studentimage" value="" required>
                </div>  

                <div class="modal-footer text-right">
                  <button type="submit" name="save2" class="btn btn-primary">Update</button>
                </div>

              </form>
            </div>
          </div>



          <div class="tab-pane" id="bankdetail">
            <form role="form" id=""  method="post" enctype="multipart/form-data" >
              <div class="row">
              <div class="form-group col-md-4">
                     <label for="bankname">Bank Name</label>
                     <input name="bankname" class="form-control" id="bankname"  value="<?php  echo $row['bankname'];?>" required>
                   </div>
                   <div class="form-group col-md-4">
                     <label for="branchname">Branch Name</label>
                     <input name="branchname" class="form-control" id="branchname"  value="<?php  echo $row['branchname'];?>" required>
                   </div>
                   <div class="form-group col-md-4">
                     <label for="ifsc">IFSC Code</label>
                     <input name="ifsc" class="form-control" id="ifsc"  value="<?php  echo $row['ifsc'];?>" required>
                   </div>
                   <div class="form-group col-md-4">
                     <label for="accno">Account No</label>
                     <input name="accno" class="form-control" id="accno"  value="<?php  echo $row['accno'];?>" required>
                   </div>
                   <div class="form-group col-md-4">
                     <label for="micr">MICR Code</label>
                     <input name="micr" class="form-control" id="micr"  value="<?php  echo $row['micr'];?>" required>
                   </div>
              </div>

              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" name="pass" class="btn btn-primary">Update</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.tab-pane -->
          <?php  
        }?>
      </div>
      <!-- /.tab-content -->
    </div><!-- /.card-body -->
  </section>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->