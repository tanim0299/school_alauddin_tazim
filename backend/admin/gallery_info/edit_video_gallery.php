<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Video Gallery</h4>
                </div>
                <div class="links">
                    <a href="view_video_gallery.php" class="btn btn-info">View Video Gallery</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                        $title = isset($_POST['title'])?$_POST['title']:'';
                        $description = isset($_POST['description'])?$_POST['description']:'';
                        $url = isset($_POST['url'])?$_POST['url']:'';

                        if(isset($_POST['save']))
                        {

                                $title = isset($_POST['title'])?$_POST['title']:'';
                                $description = isset($_POST['description'])?$_POST['description']:'';
                                $url = isset($_POST['url'])?$_POST['url']:'';

                                $sql = $db->link->query("UPDATE `video_gallery` SET `title`='$title',`description`='$description',`url`='$url' WHERE `id`='$id' ");
                            }
                            
                        }

                        $sql = $db->link->query("SELECT * FROM `video_gallery` WHERE `id`='$id'");

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
                            <label>Url</label>
                            <input type="text" name="url" class="form-control" placeholder="Url" value="<?php echo $showdata['url']; ?>">
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