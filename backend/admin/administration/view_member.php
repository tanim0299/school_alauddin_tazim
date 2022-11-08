<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>View Member</h4>
              </div>
              <div class="table-responsive">
                
               <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Name</th>
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
                            $sql = $db->link->query("SELECT add_member.*,committee.title FROM `add_member` INNER JOIN `committee` on add_member.committee=committee.id");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['name']; ?></td>
                                    <td><?php echo $showdata['mobile']; ?></td>
                                    <td><?php echo $showdata['email']; ?></td>
                                    <td><?php echo $showdata['address']; ?></td>
                                    <td><?php echo $showdata['title']; ?></td>
                                    <td> 
                                        <img src="../../asset/img/committee/<?php echo $showdata['image']; ?>" class="img-fluid" alt="" height="80px" width="80px">
                                </td>
                                    <td>
                                       <a href="edit_member.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_member.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
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