<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Department</h4>
              </div>
               
              <?php
              if(isset($_POST['save']))
              {
                $title = $_POST['title'];
                $db->insert('department',['title'=>$title]);

              
              }
              ?>
              <div class="form-section">
                <form method="POST" enctype="multipart/form-data">
                <h6>Add Department</h6>
                     <div class="input-single-box">
                        <label>Department Name :</label>
                        <input type="text" name="title" class="form-control" value="" required >
                    </div>
                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save">
                    </div>
                </form>  
              </div> 
                     
    </section>
    <?php
  $sql=$db->link->query("SELECT * FROM `department`");
  if (mysqli_num_rows($sql) > 0) 
  {
 ?>
    <div class="form-section">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>  
                                <th>Department Name</th>
                                <th>Action</th>    
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `department`");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td>
                                       <a href="edit_department.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_department.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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