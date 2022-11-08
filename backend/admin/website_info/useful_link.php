<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Usefull Link</h4>
                </div>
                <div class="links">
                    <a href="view_useful_link.php" class="btn btn-info">View Usefull Link</a>
                </div>
                <?php 
                if(isset($_POST['save']))
                {
                    $title = $_POST['title'];
                    $url = $_POST['url'];

                    $db->insert('useful_link',['title'=>$title, 'url'=>$url]);

                }
                ?>
                <div class="form-section">
                    <form method="post" enctype="multipart/form-data">
                        <div class="input-single-box">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" required>
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