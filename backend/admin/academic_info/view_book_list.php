<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>View Book List</h4>
                </div>
                <div class="links">
                    <a href="book_list.php" class="btn btn-info">Add Book List</a>
                </div>
                    
                    <?php
                    $sql=$db->link->query("SELECT book_list.*,add_class.class FROM `book_list` INNER JOIN `add_class` ON book_list.class_id=add_class.id");
                    if (mysqli_num_rows($sql) > 0)
                    {
                    ?>
                    <div class="form-section">
                        <table class="table table-striped v_center" id="table-2">
                        <thead>
                            <tr>  
                                <th>Date</th>
                                <th>Class Name</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>    
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                            $sql=$db->link->query("SELECT book_list.*,add_class.class FROM `book_list` INNER JOIN `add_class` ON book_list.class_id=add_class.id");
                            if($sql)
                            {
                                while ($showdata = $sql->fetch_assoc()) 
                                {
                                ?>
                                <tr>
                                    <td><?php echo $showdata['date']; ?></td>
                                    <td><?php echo $showdata['class']; ?></td>
                                    <td><?php echo $showdata['title']; ?></td>
                                    <td><a href="../../asset/img/book_list/<?php echo $showdata['image']; ?>
                                    " download="<?php echo $showdata['image']; ?>" class= "btn btn-warning btn-sm">Download</a>
                                    </td>
                                    <td>
                                       <a href="edit_book_list.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-info">Edit</a>
                                       <a href="delete_book_list.php?id=<?php echo $showdata['id']; ?>" class="btn btn-outline-danger">Delete</a>
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
                </section>
        </div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>


<?php include('../layouts/footer.php'); ?>