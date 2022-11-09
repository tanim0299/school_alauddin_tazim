<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>View Academic Calender</h4>
                </div>
                <div class="links">
                    <a href="academic_calender.php" class="btn btn-info">Add Academic Calender</a>
                </div>
                <div class="form-section">
                    <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>Title</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `academic_calender` ORDER BY `id` DESC");
                            if($sql)
                            {
                                $sl = 1;
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td><?php echo $showdata['2']; ?></td>
                                    <td><a href="../../asset/img/academic_calender/<?php echo $showdata['image']; ?>
                                    " download="<?php echo $showdata['2']; ?>" class= "btn btn-warning btn-sm">Download</a></td>
                                    <td>
                                       <a href="edit_academic_calender.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_academic_calender.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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


<?php include('../layouts/footer.php'); ?>