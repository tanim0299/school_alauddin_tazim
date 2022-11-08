<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Class</h4>
                </div>
                <div class="links">
                    <a href="add_class.php" class="btn btn-info">View Class</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                    if (isset($_POST['save'])) 
                      {
                        $class= isset($_POST['class'])?$_POST['class']:"";
                     
                         

                       $sql =$db->link->query("UPDATE `add_class` SET `class`='$class' WHERE `id`='$id'");

                       if($sql)
                        
                        {
                            echo"<div class='alert alert-success'>Data Update Succesfully</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Update Unsuccesfully</div>";
                        }
                       

                      }


                        $sql = $db->link->query("SELECT * FROM `add_class` WHERE `id`='$id'");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                
                     <div class="input-single-box">
                        <label>class</label>
                        <input type="text" name="class" class="form-control" value="<?php echo $showdata['class'];?>" required >
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