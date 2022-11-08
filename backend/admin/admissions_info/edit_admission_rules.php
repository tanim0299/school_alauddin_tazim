<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Admission Rules</h4>
                </div>
                <div class="links">
                    <a href="view_admission_rules.php" class="btn btn-info">View Admission Rules</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                        $date = isset($_POST['date'])?$_POST['date']:'';
                        $title = isset($_POST['title'])?$_POST['title']:'';
                        $description = isset($_POST['description'])?$_POST['description']:'';

                        if(isset($_POST['save']))
                        {

                            $date = isset($_POST['date'])?$_POST['date']:'';
                            $title = isset($_POST['title'])?$_POST['title']:'';
                            $description = isset($_POST['description'])?$_POST['description']:'';

                            $sql = $db->link->query("UPDATE `admission_rules` SET `date`='$date',`title`='$title',`description`='$description' WHERE `id`='$id' ");
                        }
                            
                    }

                        $sql = $db->link->query("SELECT * FROM `admission_rules` WHERE `id`='$id'");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-body-main">
                            <div class="input-single-box">
                                <label>Date</label>
                                <input type="text" name="date" value="<?php echo $showdata['date']; ?>" class="form-control datepicker">
                            </div>
                            <div class="input-single-box">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $showdata['title']; ?>">
                            </div>
                            <div class="input-single-box">
                                <label>Description</label>
                                <textarea type="text" name="description" class="form-control summernote"><?php echo $showdata['description']; ?></textarea>
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