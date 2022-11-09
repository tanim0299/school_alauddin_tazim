<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Add Committee</h4>
              </div>
               
              <?php
              if(isset($_POST['save']))
              {
                $title = $_POST['title'];
                $db->insert('committee',['title'=>$title]);

              
              }
              ?>
              <div class="form-section">
                <form method="POST" enctype="multipart/form-data">
                <h6>Add Committee</h6>
                     <div class="input-single-box">
                        <label>Name :</label>
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
  $sql=$db->link->query("SELECT * FROM `committee`");
  if (mysqli_num_rows($sql) > 0) 
  {
 ?>
    <div class="form-section">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>  
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Action</th>    
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `committee` ORDER BY `id` DESC");
                            if($sql)
                            {
                                $sl = 1;
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td>
                                       <a href="edit_committee.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_committe.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>



<?php include('../layouts/footer.php')?>