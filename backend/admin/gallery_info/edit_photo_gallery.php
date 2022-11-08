<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Photo Gallery</h4>
                </div>
                <div class="links">
                    <a href="view_photo_gallery.php" class="btn btn-info">View Photo Gallery</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                        $title = isset($_POST['title'])?$_POST['title']:'';
                        $description = isset($_POST['description'])?$_POST['description']:'';
                        $slider = isset($_POST['slider'])?$_POST['slider']:'';
                        $image = isset($_POST['image'])?$_POST['image']:'';

                        if(isset($_POST['save']))
                        {

                                $date = isset($_POST['date'])?$_POST['date']:'';
                                $title = isset($_POST['title'])?$_POST['title']:'';
                                $slider = isset($_POST['slider'])?$_POST['slider']:'';

                                $sql = $db->link->query("UPDATE `photo_gallery` SET `title`='$title',`description`='$description',`slider`='$slider' WHERE `id`='$id' ");

                                if($sql)
                                {
                                    $file = $_FILES['image']['name'];

                                    if($file)
                                    { 
                                        $pathImage = $db->link->query("SELECT `image` FROM `photo_gallery` WHERE `id`='$id' ");
                                        $fetch_image = $pathImage->fetch_assoc();

                                        $path = '../../asset/img/photo_gallery/'.$fetch_image['image'];

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

                                        $path = '../../asset/img/photo_gallery/'.$image_name;

                                        move_uploaded_file($_FILES['image']['tmp_name'],$path);
                                        $db->link->query("UPDATE `photo_gallery` SET `image`='$image_name' WHERE `id`='$id'");


                                    }

                                    echo '<div class="alert alert-success">Data Updated Successfully</div>';
                                }
                            }
                            
                        }





                        $sql = $db->link->query("SELECT * FROM `photo_gallery` WHERE `id`='$id'");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-body-main">
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
                                <img src="../../asset/img/photo_gallery/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
                            </div>
                            <div class="input-single-box">
                                <div class="form-check">
                                    <input <?php if($showdata['slider'] == 1){ echo "checked"; } ?> value="1" class="form-check-input" type="checkbox" name="slider">
                                    slider
                                </div>
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