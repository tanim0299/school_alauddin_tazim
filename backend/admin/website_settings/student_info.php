<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Student Info. Chat</h4>
                </div>
               
                <div class="form-section">
                    <form method="post">
                        <div class="input-single-box">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control"  required>
                        </div>
                        <div class="input-single-box">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" required>
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