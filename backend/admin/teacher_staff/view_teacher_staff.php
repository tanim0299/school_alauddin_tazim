<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>View Teacher/Staff</h4>
              </div>
              <div class="table-responsive">
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT teacher_staff.*,department.title FROM `teacher_staff` INNER JOIN `department` on teacher_staff.department=department.id");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['name']; ?></td>
                                    <td><?php echo $showdata['designation']; ?></td>
                                    <td><?php echo $showdata['mobile']; ?></td>
                                    <td><?php echo $showdata['email']; ?></td>
                                    <td><?php echo $showdata['present']; ?></td>
                                    <td>
                                        <?php 
                                        if($showdata['type'] == 1)
                                        {
                                            echo 'Teacher';
                                        }else
                                        {
                                            echo 'Staff';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <img src="../../asset/img/teacher/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
                                    </td>
                                    <td>
                                       <a href="edit_teacher_staff.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_teacher_staff.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>  
              </div> 
                     
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<?php include('../layouts/footer.php')?>