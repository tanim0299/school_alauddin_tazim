<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Holiday List</h4>
                </div>
                <div class="links">
                    <a href="view_holiday_list.php" class="btn btn-info">View Holiday List</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                        $date = isset($_POST['date'])?$_POST['date']:'';
                        $title = isset($_POST['title'])?$_POST['title']:'';
                        $image = isset($_POST['image'])?$_POST['image']:'';

                        if(isset($_POST['save']))
                        {

                                $date = isset($_POST['date'])?$_POST['date']:'';
                                $title = isset($_POST['title'])?$_POST['title']:'';

                                $sql = $db->link->query("UPDATE `holiday_list` SET `date`='$date',`title`='$title' WHERE `id`='$id' ");

                                if($sql)
                                {
                                    $file = $_FILES['image']['name'];

                                    if($file)
                                    { 
                                        $pathImage = $db->link->query("SELECT `image` FROM `holiday_list` WHERE `id`='$id' ");
                                        $fetch_image = $pathImage->fetch_assoc();

                                        $path = '../../asset/img/holiday_list/'.$fetch_image['image'];

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

                                        $path = '../../asset/img/holiday_list/'.$image_name;

                                        move_uploaded_file($_FILES['image']['tmp_name'],$path);
                                        $db->link->query("UPDATE `holiday_list` SET `image`='$image_name' WHERE `id`='$id'");


                                    }

                                    echo '<div class="alert alert-success">Data Updated Successfully</div>';
                                }
                            }
                            
                        }





                        $sql = $db->link->query("SELECT * FROM `holiday_list` WHERE `id`='$id'");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-body-main">
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Date</b></label>
                                <input type="text" name="date" value="<?php echo $showdata['date']; ?>" class="form-control col-lg-5 col-md-5 col-12">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Title</b></label>
                                <input type="type" name="title" class="form-control col-lg-5 col-md-5 col-12" value="<?php echo $showdata['title']; ?>">
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-md-4 col-12"><b>Image</b></label>
                                <input type="file" class="filestyle" name="image">
                                <img src="../../asset/img/holiday_list/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
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