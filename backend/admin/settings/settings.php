<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Website Settings</h4>
                </div>
                <div class="form-section">
                    <?php 
                    $data = $db->link->query("SELECT * FROM `settings` WHERE `id`=1");
                    if($data)
                    {
                     $showdata = $data->fetch_assoc();
                    }

                    if(isset($_POST['save']))
                    {
                        $title = $_POST['title'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $facebook = $_POST['facebook'];
                        $established  = $_POST['established'];
                        $map  = $_POST['map'];
                        $address = $_POST['address'];

                        $update = $db->link->query("UPDATE `settings` SET `title`='$title',`email`='$email',`phone`='$phone',`facebook`='$facebook',`established`='$established',`map`='$map',`address`='$address' WHERE `id`=1");

                        if($update)
                        {
                            $file = $_FILES['logo']['name'];

                            if($file)
                            {
                                $path = '../../asset/img/settings/'.$showdata['logo'];

                                if(file_exists($path))
                                {
                                    unlink($path);
                                }

                            }

                            if($file)
                            {
                                $extension = pathinfo($file, PATHINFO_EXTENSION);

                                $image_name = rand().'.'.$extension;

                                $image_path = '../../asset/img/settings/'.$image_name;

                                move_uploaded_file($_FILES['logo']['tmp_name'],$image_path);

                                $db->link->query("UPDATE `settings` SET `logo`='$image_name' WHERE `id`=1");

                            }

                            echo "<div class='alert alert-success'>Data Update Successfully</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Update Unsuccesfull</div>";
                        }
                    }

                    

                    ?>
                    <form class="contact-form mt-5" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="form-group col-md-12 text-center" style="text-align: center";>
                            <?php
                            $path = '../../asset/img/settings/'.$showdata['logo'];
                            if(file_exists($path))
                            {
                            ?>
                            <img src="../../asset/img/settings/<?php echo $showdata['logo']; ?>" height="150px">
                            <?php
                            }
                            ?>
                          </div>
                          <div class="form-group col-md-12 text-center">
                            <input type="file" name="logo">
                        </div>

                          <div class="form-group col-md-6">
                            <label>Title :</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $showdata['title']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Email Address :</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $showdata['email']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Phone :</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $showdata['phone']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Established :</label>
                            <input type="text" name="established" class="form-control" value="<?php echo $showdata['established']; ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Facebook :</label>
                            <textarea name="facebook" class="form-control" placeholder="Facebook" ><?php echo $showdata['facebook']; ?></textarea>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Map :</label>
                            <textarea name="map" class="form-control" placeholder="Map" ><?php echo $showdata['map']; ?></textarea>
                          </div>
                          <div class="form-group col-md-12">
                            <label>Address :</label> 
                            <textarea name="address" id="" class="form-control summernote"><?php echo $showdata['address']; ?></textarea>
                        </div>
                          
                        </div>
                        <button type="submit" class="btn btn-success wow zoomIn" name="save">Submit</button>
                      </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>