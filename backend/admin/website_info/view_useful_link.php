<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>View Useful Link</h4>
                </div>
                <div class="links">
                    <a href="useful_link.php" class="btn btn-info">Add Useful Link</a>
                </div>
                <div class="form-section">
                    <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql = $db->link->query("SELECT * FROM `useful_link` ORDER BY `id` DESC");
                            if($sql)
                            {
                                $sl = 1;
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $showdata['title']; ?></td>
                                    <td><a href="<?php echo $showdata['url']; ?>" target="blank"><?php echo $showdata['url']; ?></a></td>
                                    <td>
                                    <a  class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalLong<?php echo $showdata['id']; ?>">Edit</a>
                                        
                                    <a href="delete_useful_link.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                
                                <div class="modal fade" id="exampleModalLong<?php echo $showdata['id']; ?>" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Useful Link</h5>
                                        </div>
                                        <div class="modal-body">
                        <?php

                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                    

                        $sql = $db->link->query("SELECT * FROM `useful_link`");

                        if($sql)
                        {
                            $showdata = $sql->fetch_assoc();
                        }
                    }
                    ?>
                    <form method="POST" enctype="multipart/form-data" id="form_data">
                        <input id="id" type="hidden" name="id" class="form-control" value="<?php echo $showdata['id'];?>">
                        <div class="input-single-box">
                            <label>Title</label>
                            <input id="title" name="title" class="form-control" value="<?php echo $showdata['title'];?>">
                        </div>
                        <div class="input-single-box">
                            <label>Url</label>
                            <input id="url" name="url" class="form-control" value="<?php echo $showdata['url'];?>">
                        </div>
                        <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save" class="btn btn-success" id="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
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



<style>
    .modal-backdrop.show {
    opacity: 0;
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop {
    position: inherit !important;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
}
</style>

<?php include('../layouts/footer.php'); ?>