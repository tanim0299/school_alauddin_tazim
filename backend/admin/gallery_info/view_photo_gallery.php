<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>View Photo Gallery</h4>
                </div>
                <div class="links">
                    <a href="photo_gallery.php" class="btn btn-info">Add Photo Gallery</a>
                </div>
                <div class="form-section">
                    <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `photo_gallery` ORDER BY `id` DESC");
                            if($sql)
                            {
                                $sl = 1;
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td><i class="fa-solid fa-ellipsis"></td>
                                    <td><img src="../../asset/img/photo_gallery/<?php echo $showdata['image']; ?>" style="width: 100px;"></td>
                                    <td>
                                        <a href="edit_photo_gallery.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                        <a href="delete_photo_gallery.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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