<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Add Section</h4>
              </div>
               
              <?php
              if(isset($_POST['save']))
              {
                $class = $_POST['class'];
                $group = $_POST['group'];
                $section = $_POST['section'];

                $db->insert('add_section',['class_id'=>$class,'group_id'=>$group,'section'=>$section]);
              
              }
              ?>
              <div class="form-section">
                <form method="POST" enctype="multipart/form-data">
                <h6>Add Section</h6>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <label>Class Name:</label>  
                            <select name="class" class="form-control col-lg-12 col-md-12 col-12">
                               <?php
                               $class=$db->link->query("SELECT * FROM `add_class`");
                               if($class)
                               {
                                 while ($show_main_menu=$class->fetch_array()) {
                                   ?>
                                   <option value="<?php echo $show_main_menu['0'];?>"><?php echo $show_main_menu['1']?></option>
                                   <?php
                                 }
                               }
                               ?>
                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <label>Group Name:</label>  
                            <select name="group" class="form-control col-lg-12 col-md-12 col-12">
                               <?php
                               $group=$db->link->query("SELECT * FROM `add_group`");
                               if($group)
                               {
                                 while ($show_main_menu=$group->fetch_array()) {
                                   ?>
                                   <option value="<?php echo $show_main_menu['0'];?>"><?php echo $show_main_menu['2']?></option>
                                   <?php
                                 }
                               }
                               ?>
                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <label>Section Name:</label>
                            <input type="text" name="section" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save">
                    </div>
                </form>  
              </div> 
              
    </section>
    <?php
  $sql=$db->link->query("SELECT * FROM `add_section`");
  if (mysqli_num_rows($sql) > 0) 
  {

 ?>
    <div class="form-section">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>  
                                <th>Class Name</th>
                                <th>Group Name</th>
                                <th>Section Name</th>
                                <th>Action</th>    
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql=$db->link->query("SELECT add_section.*,add_class.class,add_group.group FROM `add_section` JOIN `add_class` JOIN `add_group` ON add_section.class_id=add_class.id AND add_section.group_id=add_group.id");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['class']; ?></td>
                                    <td><?php echo $showdata['group']; ?></td>
                                    <td><?php echo $showdata['section']; ?></td>
                                    <td>
                                       <a href="edit_section.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_section.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>  
              </div> 
<?php
  }
?>
</div>


<?php include('../layouts/footer.php')?>