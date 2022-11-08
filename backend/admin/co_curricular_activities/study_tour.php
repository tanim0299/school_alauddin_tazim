<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Study Tour</h4>
                </div>
                <div class="links">
                    <a href="view_study_tour.php" class="btn btn-info">View Study Tour</a>
                </div>
                <?php 
                if(isset($_POST['save']))
                {
                    $date = $_POST['date'];
                    $title = $_POST['title'];
                    $description = $_POST['description'];

                    $db->insert('study_tour',['date'=>$date,'title'=>$title, 'description'=>$description]);

                    $file = $_FILES['image']['name'];
                    
                    if($file)
                    {
                        $id = $db->link->insert_id;
                        $extension = pathinfo($file, PATHINFO_EXTENSION);

                        $image_name = rand().'.'.$extension;

                        $image_path = '../../asset/img/study_tour/'.$image_name;

                        move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

                        $db->update('study_tour',['image'=>$image_name],"id='$id'");

                    }

                }
                ?>
                <div class="form-section">
                    <form method="post" enctype="multipart/form-data">
                        <div class="input-single-box">
                            <label>Date</label>
                            <input type="text" name="date" class="form-control datepicker"  required autocomplete="off">
                        </div>
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
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" id="save">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>