<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Add Class</h4>
              </div>
               
              <?php
              if(isset($_POST['save']))
              {
                $class = $_POST['class'];
                $db->insert('add_class',['class'=>$class]);
              
              }
              ?>
              <div class="form-section">
                <form method="POST" enctype="multipart/form-data">
                <h6>Add Class</h6>
                     <div class="input-single-box">
                        <label>Class Name :</label>
                        <input type="text" name="class" class="form-control" value="" required >
                    </div>
                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save">
                    </div>
                </form>  
              </div>
            </section>
            
            <?php
                $sql=$db->link->query("SELECT * FROM `add_class`");
                if (mysqli_num_rows($sql) > 0) 
                {
            ?>
             <div class="form-section">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>  
                                <th>Class Name</th>
                                <th>Action</th>    
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `add_class`");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td>
                                       <a href="edit_class.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_class.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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