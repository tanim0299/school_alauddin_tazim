<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Science Fair</h4>
                </div>
                <div class="links">
                    <a href="view_science_fair.php" class="btn btn-info">View Science Fair</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                        $date = isset($_POST['date'])?$_POST['date']:'';
                        $title = isset($_POST['title'])?$_POST['title']:'';
                        $description = isset($_POST['description'])?$_POST['description']:'';
                        $image = isset($_POST['image'])?$_POST['image']:'';

                        if(isset($_POST['save']))
                        {

                                $date = isset($_POST['date'])?$_POST['date']:'';
                                $title = isset($_POST['title'])?$_POST['title']:'';

                                $sql = $db->link->query("UPDATE `science_fair` SET `date`='$date',`title`='$title',`description`='$description' WHERE `id`='$id' ");

                                if($sql)
                                {
                                    $file = $_FILES['image']['name'];

                                    if($file)
                                    { 
                                        $pathImage = $db->link->query("SELECT `image` FROM `science_fair` WHERE `id`='$id' ");
                                        $fetch_image = $pathImage->fetch_assoc();

                                        $path = '../../asset/img/science_fair/'.$fetch_image['image'];

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

                                        $path = '../../asset/img/science_fair/'.$image_name;

                                        move_uploaded_file($_FILES['image']['tmp_name'],$path);
                                        $db->link->query("UPDATE `science_fair` SET `image`='$image_name' WHERE `id`='$id'");


                                    }

                                    echo '<div class="alert alert-success">Data Updated Successfully</div>';
                                }
                            }
                            
                        }





                        $sql = $db->link->query("SELECT * FROM `science_fair` WHERE `id`='$id'");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-body-main">
                            <div class="input-single-box">
                                <label>Date</label>
                                <input type="text" name="date" value="<?php echo $showdata['date']; ?>" class="form-control datepicker">
                            </div>
                            <div class="input-single-box">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $showdata['title']; ?>">
                            </div>
                            <div class="input-single-box">
                                <label>Description</label>
                                <textarea type="text" name="description" class="form-control summernote"><?php echo $showdata['description']; ?></textarea>
                            </div>
                            <div class="input-single-box">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="../../asset/img/science_fair/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
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