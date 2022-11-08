<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header table-responsive">
                  <h4>ADD Member</h4>
              </div>
                
              <?php
              if(isset($_POST['save']))
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

                $db->insert('add_member',['committee'=>$committee,'name'=>$name,'father_name'=>$father_name,'mother_name'=>$mother_name,'designation'=>$designation,'profession'=>$profession,'duration'=>$duration,'mobile'=>$mobile,'email'=>$email,'address'=>$address,'status'=>$status]);

                $file= $_FILES['image']['name'];
                
                if($file)
                {
                    $id= $db->link->insert_id;
                    // echo $id;
                   $extension=pathinfo($file,PATHINFO_EXTENSION);

                   $image_name= rand().'.'.$extension;

                   $image_path='../../asset/img/committee/'.$image_name;

                   move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

                   $db->update('add_member',['image'=>$image_name],"id='$id'");


                }
              }
              ?>
              <div class="form-section">
                
                <form method="POST" enctype="multipart/form-data">
                    <h6>ADD Member</h6>
                    
                    <div class="input-single-box ">
                        <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <label>Type :</label>  
                            <select name="committee" class="form-control col-lg-12 col-md-12 col-12">
                               <?php
                               $committee=$db->link->query("SELECT * FROM `committee`");
                               if($committee)
                               {
                                 while ($show_main_menu=$committee->fetch_array()) {
                                   ?>
                                   <option value="<?php echo $show_main_menu['0'];?>"><?php echo $show_main_menu['1']?></option>
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
                            <input type="text" name="name" class="form-control" value="" required  placeholder="Name">
                        </div>
                     </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Father Name :</label>
                                <input type="text" name="father_name" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mother Name :</label>
                                <input type="text" name="mother_name" class="form-control" value="" required >
                            </div>
                            
                        </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                        <div class="col-lg-4 col-md-3 col-12">
                            <label>designation :</label>
                            <input type="text" name="designation" class="form-control" value="" placeholder="designation :" required >
                        </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>profession :</label>
                                <input type="text" name="profession" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>duration :</label>
                                <input type="text" name="duration" class="form-control" value="" required >
                            </div>
                        </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mobile :</label>
                                <input type="number" name="mobile" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Email :</label>
                                <input type="email" name="email" class="form-control" value="" required >
                            </div>
                            
                        </div>
                    </div>  
                    
                     <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <label>address :</label>
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="input-single-box">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
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
              </div> 
                     
    </section>
</div>

<?php include('../layouts/footer.php')?>