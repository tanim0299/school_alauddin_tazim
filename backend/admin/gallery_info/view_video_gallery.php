<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>View Video Gallery</h4>
                </div>
                <div class="links">
                    <a href="video_gallery.php" class="btn btn-info">Add Video Gallery</a>
                </div>
                <div class="form-section">
                    <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `video_gallery`");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_array()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['1']; ?></td>
                                    <td><i class="fa-solid fa-ellipsis"></td>
                                    <td><a href="<?php echo $showdata['url']; ?>" target="blank"><?php echo $showdata['url']; ?></a></td>
                                    <td>
                                        <a href="edit_video_gallery.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-info">Edit</a>
                                        <a href="delete_video_gallery.php?id=<?php echo $showdata['0']; ?>" class="btn btn-outline-danger">Delete</a>
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