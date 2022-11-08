<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Class Routine</h4>
                </div>
                <div class="links">
                    <a href="view_class_routine.php" class="btn btn-info">View Class Routine</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                    if (isset($_POST['save'])) 
                      {
                        $date= isset($_POST['date'])?$_POST['date']:"";
                        $class= isset($_POST['class_id'])?$_POST['class_id']:"";
                        $title= isset($_POST['title'])?$_POST['title']:"";
                     
                         

                        $db->update('class_routine',['date'=>$date,'class_id'=>$class,'title'=>$title],"id='$id'");

                        if($db)
                        {
                            $file = $_FILES['image']['name'];

                            if($file)
                            { 
                                $pathImage = $db->link->query("SELECT `image` FROM `class_routine` WHERE `id`='$id' ");
                                $fetch_image = $pathImage->fetch_assoc();

                                $path = '../../asset/img/class_routine/'.$fetch_image['image'];

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

                                $path = '../../asset/img/class_routine/'.$image_name;

                                move_uploaded_file($_FILES['image']['tmp_name'],$path);
                                $db->link->query("UPDATE `class_routine` SET `image`='$image_name' WHERE `id`='$id'");


                            }

                            echo '<div class="alert alert-success">Data Updated Successfully</div>';
                        }
                       

                      }


                        $sql = $db->link->query("SELECT * FROM `class_routine` WHERE `id`='$id'");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                    <div class="form-body-main">
                        <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-12"><b>Date</b></label>
                            <input type="text" name="date" value="<?php echo $showdata['date']; ?>" class="form-control col-lg-5 col-md-5 col-12">
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-12">Class Name:</label>
                            <select name="class_id" class="form-control col-lg-5 col-md-5 col-12">
                                <?php
                                $class=$db->link->query("SELECT * FROM `add_class`");
                                if($class)
                                {
                                  while ($show_menu = $class->fetch_array() )
                                  {
                                    if ( $showdata['class_id'] == $show_menu['0']) 
                                    {
                                      $selected ='selected';
                                    }
                                    else{
                                      $selected ='';
                                    }
                                    ?>
                                    <option <?php echo $selected; ?> value="<?php echo $show_menu['0']; ?>"><?php echo $show_menu['1']; ?></option>
                                    <?php
                                  }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-12">Title</label>
                            <input type="text" name="title" Class="form-control col-lg-5 col-md-5 col-12" value="<?php echo $showdata['title'];?>" required >
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-md-4 col-12"><b>Image</b></label>
                            <input type="file" class="filestyle" name="image">
                            <img src="../../asset/img/class_routine/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
                        </div>
                        <div class="form-group" style="text-align: center !important;">
                            <input type="submit" name="save" class="btn btn-success col-4" value="Update">
                        </div>
                      </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>