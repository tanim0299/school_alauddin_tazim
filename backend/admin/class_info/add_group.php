<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Add Group</h4>
              </div>
               
              <?php
              if(isset($_POST['save']))
              {
                $class = $_POST['class'];
                $group = $_POST['group'];

                $db->insert('add_group',['class_id'=>$class,'group'=>$group]);
              
              }
              ?>
              <div class="form-section">
                <form method="POST" enctype="multipart/form-data">
                <h6>Add Group</h6>
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
                            <input type="text" name="group" class="form-control">
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
  $sql=$db->link->query("SELECT add_group.*,add_class.class FROM `add_group` INNER JOIN `add_class` ON add_group.class_id=add_class.id");
  if (mysqli_num_rows($sql) > 0) 
  {
 ?>
    <div class="form-section">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>  
                                <th>Class Name</th>
                                <th>Group Name</th>
                                <th>Action</th>    
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql=$db->link->query("SELECT add_group.*,add_class.class FROM `add_group` INNER JOIN `add_class` ON add_group.class_id=add_class.id");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['class']; ?></td>
                                    <td><?php echo $showdata['group']; ?></td>
                                    <td>
                                       <a href="edit_group.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_group.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
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