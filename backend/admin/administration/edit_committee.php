<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Committee</h4>
                </div>
                <div class="links">
                    <a href="add_committee.php" class="btn btn-info">Add Committee</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                    if (isset($_POST['save'])) 
                      {
                        $title= isset($_POST['title'])?$_POST['title']:"";

                       $sql =$db->link->query("UPDATE `committee` SET `title`='$title' WHERE `id`='$id'");
                       
                       if($sql)
                       {
                            echo"<div class='alert alert-success'>Data Update Succesfully</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Update Unsuccesfully</div>";
                        }

                      }


                        $sql = $db->link->query("SELECT * FROM `committee` WHERE `id`='$id'");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                
                     <div class="input-single-box">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $showdata['title'];?>" required >
                    </div>
                    
                     
                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save">
                    </div>
                </form>  
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>