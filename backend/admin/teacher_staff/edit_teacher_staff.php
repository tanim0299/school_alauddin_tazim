<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Edit Teacher/Staff</h4>
              </div>
              <div class="links">
                  <a href="view_teacher_staff.php" class="btn btn-info">View Teacher/Staff</a>
              </div> 
              <div class="form-section table-responsive">
               <?php
               if (isset($_GET['id']))
                {
                 
                  $id=$_GET['id'];
                      if (isset($_POST['save'])) 
                      {
                        $name = $_POST['name'];
                        $designation = $_POST['designation'];
                        $department = $_POST['department'];
                        $voter_id = $_POST['voter_id'];
                        $date = $_POST['date'];
                        $blood_gp = $_POST['blood_gp'];
                        $religion = $_POST['religion'];
                        $relation = $_POST['relation'];
                        $father_name = $_POST['father_name'];
                        $mother_name = $_POST['mother_name'];
                        $mobile = $_POST['mobile'];
                        $email = $_POST['email'];
                        $join_date = $_POST['join_date'];
                        $mpo_date = $_POST['mpo_date'];
                        $present = $_POST['present'];
                        $permanent = $_POST['permanent'];
                        $education = $_POST['education'];
                        $gender = $_POST['gender'];
                        $type = $_POST['type'];
                        $status = $_POST['status'];
                         

                    //    $sql =$db->link->query("UPDATE `teacher_staff` SET `name`='$name',`designation`='$designation',`department`='$department',`voter_id`='voter_id',`date`='',`blood_gp`=[value-7],`religion`=[value-8],`relation`=[value-9],`father_name`=[value-10],`mother_name`=[value-11],`mobile`=[value-12],`email`=[value-13],`join_date`=[value-14],`mpo_date`=[value-15],`present`=[value-16],`permanent`=[value-17],`education`=[value-18],`gender`=[value-19],`type`=[value-20],`image`=[value-21],`status`=[value-22] WHERE `id`='$id'");
                    $db->update('teacher_staff',['name'=>$name,'designation'=>$designation,'department'=>$department,'voter_id'=>$voter_id,'date'=>$date,'blood_gp'=>$blood_gp,'religion'=>$religion,'relation'=>$relation,'father_name'=>$father_name,'mother_name'=>$mother_name,'mobile'=>$mobile,'email'=>$email,'join_date'=>$join_date,'mpo_date'=>$mpo_date,'present'=>$present,'permanent'=>$permanent,'education'=>$education,'gender'=>$gender,'type'=>$type,'status'=>$status],"id='$id'");

                    if($db->result)
                    {
                    echo"<div class='alert alert-success'>Data Update Succesfully</div>";
                    }
                    else
                    {
                    echo "<div class='alert alert-danger'>Data Update Unsuccesfully</div>";
                    }
                    
                             $file = $_FILES['image']['name'];

                                    if($file)
                                    { 
                                        $pathImage = $db->link->query("SELECT `image` FROM `teacher_staff` WHERE `id`='$id' ");
                                        $fetch_image = $pathImage->fetch_assoc();

                                        $path = '../../asset/img/teacher/'.$fetch_image['image'];

                                        if(file_exists($path))
                                        {
                                            unlink($path);
                                        }
                                    }

                                    if($file)
                                    {
                                        $path_info = $_FILES['image']['name'];

                                        $extension = pathinfo($path_info, PATHINFO_EXTENSION);

                                        $image_name = $id.'.'.$extension;

                                        $path = '../../asset/img/teacher/'.$image_name;

                                        move_uploaded_file($_FILES['image']['tmp_name'],$path);
                                        $db->link->query("UPDATE `teacher_staff` SET `image`='$image_name' WHERE `id`='$id'");

                                        
                                    }
                        

                      }
                       $sql_get = $db->link->query("SELECT * FROM `teacher_staff` WHERE `id`='$id'");
                        if($sql_get)
                        {
                            $showdata = $sql_get->fetch_array();
                        }
               }

               ?>
                <div class="form-section">
                
                <form method="POST" enctype="multipart/form-data">
                    <h6>Edit Teacher/Staff</h6>
                     <div class="input-single-box">
                     <div class="row">
                        <div class="col-lg-8 col-md-9 col-12">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $showdata['1'];?>" required  placeholder="Name">
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <label>Designation:</label>
                            <input type="text" name="designation" class="form-control" value="<?php echo $showdata['2'];?>" placeholder="Designation :" required >
                        </div>
                     </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <label>Department Name:</label>  
                            <select name="department" class="form-control col-lg-12 col-md-12 col-12">
                            <?php
                            $show_department=$db->link->query("SELECT * FROM `department`");
                            if($show_department)
                            {
                              while ($show_menu = $show_department->fetch_array() )
                              {
                                if ( $showdata['3'] == $show_menu['0']) 
                                {
                                  $selected ='selected';
                                }
                                else{
                                  $selected ='';
                                }
                                ?>
                                <option <?php echo $selected; ?> value="<?php echo $show_menu['0']; ?>"><?php echo $show_menu['1']; ?>
                                </option>
                                <?php
                              }
                            }
                            ?>
                            </select>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Voter ID No.:</label>
                                <input type="number" name="voter_id" class="form-control" value="<?php echo $showdata['4'];?>" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Date Of Birth:</label>
                                <input type="text" name="date" class="form-control datepicker" value="<?php echo $showdata['5'];?>" required >
                            </div>
                        </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Blood Group:</label>
                                <input type="text" name="blood_gp" class="form-control" value="<?php echo $showdata['6'];?>" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                            <label>Religion:</label>  
                            <select name="religion" class="form-control col-lg-12 col-md-12 col-12" >
                               
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christian">Christian</option>
                              
                            </select>
                            </div><div class="col-lg-4 col-md-4 col-12">
                            <label>Relationship :</label>  
                            <select name="relation" class="form-control col-lg-12 col-md-12 col-12">
                               
                                <option value="1">Married</option>
                                <option value="0">Unmrried</option>

                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12" >
                                <label>Father Name</label>
                                <input type="text" name="father_name" class="form-control" value="<?php echo $showdata['9'];?>" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" value="<?php echo $showdata['10'];?>" required >
                            </div>
                            
                        </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mobile :</label>
                                <input type="number" name="mobile" class="form-control" value="<?php echo $showdata['11'];?>" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Email :</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $showdata['12'];?>" required >
                            </div>
                            
                        </div>
                    </div>  
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Join Date :</label>
                                <input type="text" name="join_date" class="form-control datepicker" value="<?php echo $showdata['13'];?>" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>MPO Date :</label>
                                <input type="text" name="mpo_date" class="form-control datepicker" value="<?php echo $showdata['14'];?>" required >
                            </div>
                            
                        </div>
                    </div>
                     <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Present Address :</label>
                                <textarea name="present" class="form-control"><?php echo $showdata['15'];?></textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Permanent Address :</label>
                                <textarea name="permanent" class="form-control"> <?php echo $showdata['16'];?></textarea>
                            </div>
                        </div>
                    </div>
                     <div class="input-single-box">
                        <label>Education Qualification :</label>
                        <textarea type="text" name="education" class="form-control summernote"><?php echo $showdata['17'];?></textarea>
                        
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                            <label>Gender :</label>  
                            <select name="gender" class="form-control col-lg-12 col-md-12 col-12">
                               
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                              
                            </select>
                            </div><div class="col-lg-6 col-md-6 col-12">
                            <label>Type :</label>  
                            <select name="type" class="form-control col-lg-12 col-md-12 col-12">
                               
                                <option value="1">Teacher</option>
                                <option value="0">Staff</option>

                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-single-box">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="../../asset/img/teacher/<?php echo $showdata['20'];?>" class="img-fluid" alt="" height="80px" width="80px">
                    </div>
                    <div class="input-single-box ">   
                        <select name="status" class="form-control col-lg-12 col-md-12 col-12">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    
                     
                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save">
                    </div>
                </form>  
              </div>
              </div> 
                     
    </section>
</div>

<?php include('../layouts/footer.php')?>