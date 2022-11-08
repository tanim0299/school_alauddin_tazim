<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Uniform</h4>
                </div>
                <div class="form-section">
                   <?php
                   $data = $db->link->query("SELECT * FROM `uniform` WHERE `id`=1");
                   if($data)
                   {
                    $showdata = $data->fetch_assoc();
                   } 
                   if(isset($_POST['save']))
                   {
                        $title = $_POST['title'];
                        $description = $_POST['description'];

                        $update = $db->link->query("UPDATE `uniform` SET `title`='$title',`description`='$description' WHERE `id`=1");

                        if($update)
                        {
                            $file = $_FILES['image']['name'];

                            if($file)
                            {
                                $path = '../../asset/img/uniform/'.$showdata['image'];

                                if(file_exists($path))
                                {
                                    unlink($path);
                                }

                            }

                            if($file)
                            {
                                $extension = pathinfo($file, PATHINFO_EXTENSION);

                                $image_name = rand().'.'.$extension;

                                $image_path = '../../asset/img/uniform/'.$image_name;

                                move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

                                $db->link->query("UPDATE `uniform` SET `image`='$image_name' WHERE `id`=1");

                            }

                            echo "<div class='alert alert-success'>Data Update Successfully</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Update Unsuccesfull</div>";
                        }

                   }
                   ?>
                    <form method="post" enctype="multipart/form-data">

                        <div class="input-single-box">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php print $showdata['title']; ?>" required>
                        </div>

                        <div class="input-single-box">
                        <label>Description</label>
                        <textarea name="description" id="" class="form-control summernote"><?php echo $showdata['description']; ?></textarea>
                        </div>
                        
                        <div class="input-single-box">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            <?php
                            $path = '../../asset/img/uniform/'.$showdata['image'];
                            if(file_exists($path))
                            {
                            ?>
                            <img src="../../asset/img/uniform/<?php print $showdata['image']; ?>" class="img-fluid" height="70px;" width="90px">
                            <?php
                            }
                            ?>
                        </div>
                     
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" id="save">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>