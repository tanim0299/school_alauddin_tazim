<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Admission Rules</h4>
                </div>
                <div class="links">
                    <a href="view_admission_rules.php" class="btn btn-info">View Admission Rules</a>
                </div>
                <?php 
                if(isset($_POST['save']))
                {
                    $date = $_POST['date'];
                    $title = $_POST['title'];
                    $description = $_POST['description'];

                    $db->insert('admission_rules',['date'=>$date,'title'=>$title, 'description'=>$description]);
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
                        
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" id="save">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>