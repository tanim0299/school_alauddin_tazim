<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Group</h4>
                </div>
                <div class="links">
                    <a href="add_group.php" class="btn btn-info">View Group</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                    if (isset($_POST['save'])) 
                      {
                        $class= isset($_POST['class_id'])?$_POST['class_id']:"";
                        $group= isset($_POST['group'])?$_POST['group']:"";
                     
                         

                        $db->update('add_group',['class_id'=>$class,'group'=>$group],"id='$id'");

                        if($db)
                        
                        {
                            echo"<div class='alert alert-success'>Data Update Succesfully</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Update Unsuccesfully</div>";
                        }
                     }


                        $sql_get = $db->link->query("SELECT * FROM `add_group` WHERE `id`='$id'");

                        if($sql_get)
                        {
                            $showdata = $sql_get->fetch_array();
                        }
                    }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                
                     <div class="input-single-box">
                        <label>class</label>
                        <select name="class_id" class="form-control col-lg-12 col-md-12 col-12">
                               <?php
                                $class=$db->link->query("SELECT * FROM `add_class`");
                                if($class)
                                {
                                  while ($show_menu = $class->fetch_array() )
                                  {
                                    if ( $showdata['1'] == $show_menu['0']) 
                                    {
                                      $selected ='selected';
                                    }
                                    else{
                                      $selected ='';
                                    }
                                    ?>
                                    <option <?php echo $selected; ?> value="<?php echo $show_menu['0']; ?>"><?php echo $show_menu['1']; ?>
                                    </option>
                                    <?php
                                  }
                                }
                               ?>
                                

                        </select>
                    </div>
                    <div class="input-single-box">
                        <label>Group</label>
                        <input type="text" name="group" Class="form-control" value="<?php echo $showdata['2'];?>" required >
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