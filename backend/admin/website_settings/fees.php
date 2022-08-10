<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>FEES</h4>
                </div>
               
                <div class="form-section">
                    <?php
                    $sql=$db->link->query("SELECT * FROM `fees` WHERE `id`=1");
                    if($sql)
                    {
                        $showdata=$sql->fetch_assoc();
                    }
                    if(isset($_POST['save']))
                    {
                        $title=$_POST['title'];
                        $update=$db->link->query("UPDATE `fees` SET `title`='$title' WHERE `id`='1'");
                        if($update)
                        {   
                            $file=$_FILES['image']['name'];
                            if($file)
                            {
                                $path='../../asset/img/fees/'.$showdata['image'];
                                if(file_exists($path))
                                {
                                    unlink($path);
                                }
                            }
                            
                            if($file)
                            {
                                $extension = pathinfo($file, PATHINFO_EXTENSION);

                                $image_name= rand().'.'.$extension;

                                $image_path='../../asset/img/fees/'.$image_name;

                                move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

                                $db->link->query("UPDATE `fees` SET `image`='$image_name' WHERE `id`='1'");
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
                            <input type="text" name="title" class="form-control"  value="<?php echo $showdata['title'];?>" required>
                        </div>
                        <div class="input-single-box">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" >
                            <?php
                            $path='../../asset/img/fees/'.$showdata['image'];
                            if(file_exists($path))
                            {
                                ?>
                                <img src="../../asset/img/fees/<?php echo $showdata['image'];?>" class="img-fulid" height="70px;" width="90px;">
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