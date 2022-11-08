<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Video Gallery</h4>
                </div>
                <div class="links">
                    <a href="view_video_gallery.php" class="btn btn-info">View Video Gallery</a>
                </div>
                <?php 
                if(isset($_POST['save']))
                {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $url = $_POST['url'];

                    $db->insert('video_gallery',['title'=>$title,'description'=>$description, 'url'=>$url]);

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
                            <label>Url</label>
                            <input type="text" name="url" class="form-control" placeholder="Url" required>
                        </div>
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" id="save">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>