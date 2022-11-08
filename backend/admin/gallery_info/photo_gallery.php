<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Photo Gallery</h4>
                </div>
                <div class="links">
                    <a href="view_photo_gallery.php" class="btn btn-info">View Photo Gallery</a>
                </div>
                <?php 
                if(isset($_POST['save']))
                {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    
                    if(isset($_POST['slider']))
                    {
                        $slider = $_POST['slider'];
                        $db->insert('photo_gallery',['title'=>$title,'description'=>$description,'slider'=>$slider]);
                    }
                    else
                    {
                        $db->insert('photo_gallery',['title'=>$title,'description'=>$description]);
                    }

                    $file = $_FILES['image']['name'];
                    
                    if($file)
                    {
                        $id = $db->link->insert_id;
                        $extension = pathinfo($file, PATHINFO_EXTENSION);

                        $image_name = rand().'.'.$extension;

                        $image_path = '../../asset/img/photo_gallery/'.$image_name;

                        move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

                        $db->update('photo_gallery',['image'=>$image_name],"id='$id'");

                    }

                }
                ?>
                <div class="form-section">
                    <form method="post" enctype="multipart/form-data">
                        <div class="input-single-box">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" required>
                        </div>

                        <div class="input-single-box">
                        <label>Description</label>
                        <textarea name="description" id="" class="form-control summernote"></textarea>
                        </div> 

                        <div class="input-single-box">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>
                        <div class="input-single-box">
                            <div class="form-check">
                                <input value="1" class="form-check-input" type="checkbox" name="slider">
                                    slider
                            </div>
                        </div>  
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" id="save">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>