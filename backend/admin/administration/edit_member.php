<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Edit Member</h4>
              </div>
              <div class="form-section table-responsive">
               <?php
               if (isset($_GET['id']))
                {
                 
                  $id=$_GET['id'];
                      if (isset($_POST['save'])) 
                      {
                        $committee = $_POST['committee'];
                        $name = $_POST['name'];
                        $father_name = $_POST['father_name'];
                        $mother_name = $_POST['mother_name'];
                        $designation = $_POST['designation'];
                        $profession = $_POST['profession'];
                        $duration = $_POST['duration'];
                        $mobile = $_POST['mobile'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $status = $_POST['status'];
                    
                    
                    $db->update('add_member',['committee'=>$committee,'name'=>$name,'father_name'=>$father_name,'mother_name'=>$mother_name,'designation'=>$designation,'profession'=>$profession,'duration'=>$duration,'mobile'=>$mobile,'email'=>$email,'address'=>$address,'status'=>$status],"id='$id'");

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
                        $pathImage = $db->link->query("SELECT `image` FROM `add_member` WHERE `id`='$id' ");
                        
                        $fetch_image = $pathImage->fetch_assoc();
                        
                        $path = '../../asset/img/committee/'.$fetch_image['image'];
                        
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

                        $path = '../../asset/img/committee/'.$image_name;

                        move_uploaded_file($_FILES['image']['tmp_name'],$path);
                        $db->link->query("UPDATE `add_member` SET `image`='$image_name' WHERE `id`='$id'");
                    }
                        

                      }
                       $sql_get = $db->link->query("SELECT * FROM `add_member` WHERE `id`='$id'");
                        if($sql_get)
                        {
                            $showdata = $sql_get->fetch_array();
                        }
               }

               ?>
               
                <form method="POST" enctype="multipart/form-data">
                    <h6>Edit Member</h6>
                    
                    <div class="input-single-box ">
                        <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <label>Type :</label>  
                            <select name="committee" class="form-control col-lg-12 col-md-12 col-12">
                            <?php
                            $committee=$db->link->query("SELECT * FROM `committee`");
                            if($committee)
                            {
                              while ($show_menu = $committee->fetch_array() )
                              {
                                if ( $showdata['1'] == $show_menu['0']) 
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
                        </div>
                    </div>

                     <div class="input-single-box">
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <label>Name :</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $showdata['2'];?>" required  placeholder="Name">
                        </div>
                     </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Father Name :</label>
                                <input type="text" name="father_name" class="form-control" value="<?php echo $showdata['3'];?>" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mother Name :</label>
                                <input type="text" name="mother_name" class="form-control" value="<?php echo $showdata['4'];?>" required >
                            </div>
                            
                        </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                        <div class="col-lg-4 col-md-3 col-12">
                            <label>designation :</label>
                            <input type="text" name="designation" class="form-control" value="<?php echo $showdata['5'];?>" placeholder="designation :" required >
                        </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>profession :</label>
                                <input type="text" name="profession" class="form-control" value="<?php echo $showdata['6'];?>" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>duration :</label>
                                <input type="text" name="duration" class="form-control" value="<?php echo $showdata['7'];?>" required >
                            </div>
                        </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mobile :</label>
                                <input type="number" name="mobile" class="form-control" value="<?php echo $showdata['8'];?>" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Email :</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $showdata['9'];?>" required >
                            </div>
                            
                        </div>
                    </div>  
                    
                     <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <label>address :</label>
                                <textarea name="address" class="form-control" ><?php echo $showdata['10'];?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="input-single-box">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="../../asset/img/committee/<?php echo $showdata['11'];?>" class="img-fluid" alt="" height="80px" width="80px">
                    </div>

                    <div class="input-single-box ">
                    <label>Status</label>
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
    </section>
</div>

<?php include('../layouts/footer.php')?>