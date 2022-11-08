<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Edit Section</h4>
                </div>
                <div class="links">
                    <a href="add_section.php" class="btn btn-info">View Section</a>
                </div>
                <div class="form-section">
                    <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                    if (isset($_POST['save'])) 
                      {
                        $class= isset($_POST['class_id'])?$_POST['class_id']:"";
                        $group= isset($_POST['group_id'])?$_POST['group_id']:"";
                        $section= isset($_POST['section'])?$_POST['section']:"";
                     
                         

                        $db->update('add_section',['class_id'=>$class,'group_id'=>$group,'section'=>$section],"id='$id'");

                        if($db)
                        
                        {
                            echo"<div class='alert alert-success'>Data Update Succesfully</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Update Unsuccesfully</div>";
                        }
                     }


                        $sql_get = $db->link->query("SELECT * FROM `add_section` WHERE `id`='$id'");

                        if($sql_get)
                        {
                            $showdata = $sql_get->fetch_array();
                        }
                    }
                    ?>
                    <form method="POST" enctype="multipart/form-data">
                
                     <div class="input-single-box">
                        <label>Class</label>
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
                        <select name="group_id" class="form-control col-lg-12 col-md-12 col-12">
                               <?php
                                $group=$db->link->query("SELECT * FROM `add_group`");
                                if($group)
                                {
                                  while ($show_menu = $group->fetch_array() )
                                  {
                                    if ( $showdata['group_id'] == $show_menu['0']) 
                                    {
                                      $selected ='selected';
                                    }
                                    else{
                                      $selected ='';
                                    }
                                    ?>
                                    <option <?php echo $selected; ?> value="<?php echo $show_menu['0']; ?>"><?php echo $show_menu['2']; ?>
                                    </option>
                                    <?php
                                  }
                                }
                               ?>
                                

                        </select>
                    </div>
                    <div class="input-single-box">
                        <label>Section</label>
                        <input type="text" name="section" Class="form-control" value="<?php echo $showdata['3'];?>" required >
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