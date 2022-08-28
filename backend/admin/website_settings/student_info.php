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
                    <?php 
                    if(isset($_POST['save']))
                    {
                        $date = $_POST['date'];
                        $title = $_POST['title'];

                        $db->insert('student_info',['date'=>$date,'title'=>$title]);

                        // if($db == true)
                        // {
                        //     echo "<div class='alert alert-success'>Data Insert Succesfully</div>";
                        // }
                        // else
                        // {
                        //     echo "<div class='alert alert-danger'>Data Insert Unsuccessfully</div>";
                        // }
                    }
                    ?>
                    <form method="post">
                        <div class="input-single-box">
                            <label>Date</label>
                            <input type="text" name="date" class="form-control datepicker"  required autocomplete="off">
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