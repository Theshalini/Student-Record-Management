<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
} else{
  if(isset($_POST['submit']))
  {
    $names=$_POST['names'];
    $dob=$_POST['dob'];
    $studentno=$_POST['studentno'];
    $community=$_POST['community'];
    $class=$_POST['class'];
    $emisno=$_POST['emisno'];
    $aadhaarno=$_POST['aadhaarno'];
    $bloodgroup=$_POST['bloodgroup'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $firstgraduate=$_POST['firstgraduate'];
    $dabled=$_POST['dabled'];
    $parentname=$_POST['parentname'];
    $mothername=$_POST['mothername'];
    $guardianname=$_POST['guardianname'];
    $occupation=$_POST['occupation'];
    $moccupation=$_POST['moccupation'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $annualincome=$_POST['annualincome'];
    $studentpno=$_POST['studentpno'];
    $ctype=$_POST['ctype'];
    $yearjoin=$_POST['yearjoin'];
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
    $caddress=$_POST['caddress'];
    $paddress=$_POST['paddress'];
    $bankname=$_POST['bankname'];
    $branchname=$_POST['branchname'];
    $ifsc=$_POST['ifsc'];
    $accno=$_POST['accno'];
    $micr=$_POST['micr'];
    $photo=$_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"],"studentimages/".$_FILES["photo"]["name"]);
    $query=mysqli_query($con, "insert into  students(studentno,StudentName,class,emisno,aadhaarno,bloodgroup,religion,caste,firstgraduate,dabled,dob,community,email,parentName,mothername,guardianname,occupation,moccupation,ctype,yearjoin,course,dept,medium,mode,doa,tenregno,tenmark,tregno,tmark,ugregno,dsh,scholarship,caddress,paddress,bankname,branchname,ifsc,accno,micr,contactno,annualincome,studentpno,studentImage) value('$studentno','$names','$class','$emisno','$aadhaarno','$bloodgroup','$religion','$caste','$firstgraduate','$dabled','$dob','$community','$email','$parentname','$mothername','$guardianname','$occupation','$moccupation','$ctype','$yearjoin','$course','$dept','$medium','$mode','$doa','$tenregno','$tenmark','$tregno','$tmark','$ugregno','$dsh','$scholarship','$caddress','$paddress','$bankname','$branchname','$ifsc','$accno','$micr','$phone','$annualincome','$studentpno','$photo')");
    if ($query) {
      echo "<script>alert('Student has been registered.');</script>"; 
      echo "<script>window.location.href = 'add_student.php'</script>";   
      $msg="";
    }
    else
    {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";    
    }
  }
  ?>
  <!DOCTYPE html>
  <html>
  <?php @include("includes/head.php"); ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <?php @include("includes/header.php"); ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php @include("includes/sidebar.php"); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Add Student</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row ">
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Add Student</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <span style="color: darkred"><h5>Student details</h5></span>
                      <hr>
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="studentno">Student Register No.</label>
                          <input type="text" class="form-control" id="studentno" name="studentno" placeholder="Enter student No" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="names">Student Name</label>
                          <input type="text" class="form-control" id="names" name="names" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="dob">Date of Birth</label>
                          <input type="text" class="form-control" id="dob" name="dob" placeholder="dob"required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="community">Community</label>
                          <select type="select" class="form-control" id="community" name="community"required>
                            <option>Select</option>
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
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="class">Class</label>
                          <input type="text" class="form-control" id="class" name="class" placeholder="class" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="emisno">Emis No.</label>
                          <input type="text" class="form-control" id="emisno" name="emisno" placeholder="Enter Emis No."required>
                        </div>
                        
                        <div class="form-group col-md-3">
                          <label for="bloodgroup">Blood Group</label>
                          <select type="select" class="form-control" id="bloodgroup" name="bloodgroup" required>
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
                        <div class="form-group col-md-3">
                          <label for="religion">Religion</label>
                          <select type="select" class="form-control" id="religion" name="religion" required>
                            <option>Select religion</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Jainism">Jainism</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="caste">Caste</label>
                          <input type="text" class="form-control" id="caste" name="caste" placeholder="Enter Caste"required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="firstgraduate">Is the student first graduate?</label>
                          <select type="select" class="form-control" id="firstgraduate" name="firstgraduate"required>
                            <option>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="dabled">Did you belong to differently abled category?</label>
                          <select type="select" class="form-control" id="dabled" name="dabled"required>
                            <option>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="exampleInputFile">Student Photo</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="" name="photo" id="photo" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <span style="color: darkred"><h5>Parent details</h5></span>
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="parentname">Father Name</label>
                          <input type="text" class="form-control" id="parentname" name="parentname" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="mothername">Mother Name</label>
                          <input type="text" class="form-control" id="mothername" name="mothername" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="guardianname">Guardian Name</label>
                          <input type="text" class="form-control" id="guardianname" name="guardianname" placeholder="Enter Name" required>
                        </div>
                        
                        <div class="form-group col-md-3">
                          <label for="occupation">Father Occupation</label>
                          <input type="select" class="form-control" id="occupation" name="occupation" placeholder="father occupation" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="moccupation">Mother Occupation</label>
                          <input type="select" class="form-control" id="moccupation" name="moccupation" placeholder="mother occupation" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="phone1">Parent/Guardian Mobile No.</label>
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="annualincome">Annual Income</label>
                          <input type="text" class="form-control" id="annualincome" name="annualincome" placeholder="Annual Income" required>
                        </div>
                      </div>
                      <hr>
                      <span style="color: darkred"><h5>Contact details</h5></span>
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="studentpno">Student Mobile No.</label>
                          <input type="text" class="form-control" id="studentpno" name="studentpno" placeholder="Student Mobile No." required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="aadhaarno">Aadhaar No.</label>
                          <input type="text" class="form-control" id="aadhaarno" name="aadhaarno" placeholder="Aadhar No." required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="age">Email</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                          <label for="caddress">Communication Address</label>
                          <textarea name="caddress"  class="form-control" id="caddress"  rows="6" placeholder="Enter your communication address" required></textarea>
                          <!--<input type="text" class="form-control" id="caddress" name="caddress" placeholder="Enter your communication address"required>-->
                         </div>
                         <div class="form-group col-md-5">
                          <label for="paddress">Permanent Address</label>
                          <textarea name="paddress"  class="form-control" id="paddress"  rows="6" placeholder="Enter your permanent address" required></textarea>
                          <!--<input type="text" class="form-control" id="caddress" name="caddress" placeholder="Enter your communication address"required>-->
                         </div>
                      </div> 
                      <hr>
                      <span style="color: darkred"><h5>Bank details</h5></span>
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="bankname">Bank Name</label>
                          <input type="text" class="form-control" id="bankname" name="bankname" placeholder="Enter Bank Name" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="branchname">Branch Name</label>
                          <input type="text" class="form-control" id="branchname" name="branchname" placeholder="Enter Branch Name" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="ifsc">IFSC Code</label>
                          <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="Enter IFSC Code" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="accno">Account No.</label>
                          <input type="text" class="form-control" id="accno" name="accno" placeholder="Enter Account Name" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="micr">MICR Code</label>
                          <input type="text" class="form-control" id="micr" name="micr" placeholder="Enter MICR Code" required>
                        </div>
                      </div>
                      
                      <hr>
                      <span style="color: darkred"><h5>Academic details</h5></span>
                      <div class="row">
                      <div class="form-group col-md-3">
                          <label for="yearjoin">Academic Year of Joining<br>Eg: 2021-2022</label>
                          <input type="text" class="form-control" id="yearjoin" name="yearjoin" placeholder="Enter" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="ctype">Programme</label>
                          <select type="select" class="form-control" id="ctype" name="ctype"required>
                            <option>Select</option>
                            <option value="UG">UG</option>
                            <option value="PG">PG</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="course">Course</label>
                          <select type="select" class="form-control" id="course" name="course"required>
                            <option>Select</option>
                            <option value="B.A">B.A</option>
                            <option value="B.Sc">B.Sc</option>
                            <option value="B.Com">B.Com</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="dept">Department/Branch</label>
                          <input type="text" class="form-control" id="dept" name="dept" placeholder="Enter Department/Branch" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="medium">Medium</label>
                          <select type="select" class="form-control" id="medium" name="medium"required>
                            <option>Select</option>
                            <option value="English">English</option>
                            <option value="Tamil">Tamil</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="mode">Mode of Study</label>
                          <select type="select" class="form-control" id="mode" name="mode"required>
                            <option>Select</option>
                            <option value="Regular">Regular</option>
                            <option value="Part time">Part time</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="doa">Date of Admission</label>
                          <input type="text" class="form-control" id="doa" name="doa" placeholder="Date of Admission" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="tenregno">10th Register No.</label>
                          <input type="text" class="form-control" id="tenregno" name="tenregno" placeholder="10th Register No." required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="tenmark">10th Mark</label>
                          <input type="text" class="form-control" id="tenmark" name="tenmark" placeholder="10th Mark/500" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="tregno">12th Register No.</label>
                          <input type="text" class="form-control" id="tregno" name="tregno" placeholder="12th Register No." required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="tmark">12th Mark</label>
                          <input type="text" class="form-control" id="tmark" name="tmark" placeholder="12th Mark/600" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="ugregno">UG Register No.</label>
                          <input type="text" class="form-control" id="ugregno" name="ugregno" placeholder="UG Register No." required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="dsh">DayScholar/Hosteller</label>
                          <select type="select" class="form-control" id="dsh" name="dsh"required>
                            <option>Select</option>
                            <option value="DayScholar">DayScholar</option>
                            <option value="Hosteller">Hosteller</option>
                          </select>
                        </div>
                      </div>
                      <hr>
                      <span style="color: darkred"><h5>Scholarship Details</h5></span>
                      <div class="form-group col-md-4">
                          <label for="scholarship">Scholarship if any</label>
                          <select type="select" class="form-control" id="scholarship" name="scholarship"required>
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
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php @include("includes/footer.php"); ?>

    </div>

    <!-- ./wrapper -->
    <?php @include("includes/foot.php"); ?>
  </body>
  </html>
  <?php
}?>
