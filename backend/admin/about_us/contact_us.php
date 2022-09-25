<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>CONTACT US</h4>
                </div>
                <div class="form-section">
                    <?php 

                    if(isset($_POST['save']))
                    {
                        $description = $_POST['description'];
                        $map = $_POST['map'];

                        $sql_update = $db->link->query("UPDATE `contact_us` SET `description`='$description',`map`='$map' WHERE `id`=1");
                        if($sql_update)
                        {
                            echo "<div class='alert alert-success'>Data Insert Successfllly</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Insert Unsuccessfllly</div>";
                        }
                    }

                    $sql_select = $db->link->query("SELECT * FROM `contact_us` WHERE `id`=1");
                    if($sql_select)
                    {
                        $showdata = $sql_select->fetch_assoc();
                    }
                    ?>
                    <form method="POST">
                        <div class="input-single-box">
                            <label>CONTACT US</label>

                        <div class="input-single-box">
                            <label>Description</label>
                            <textarea name="description" id="" class="form-control summernote"><?php echo $showdata['description']; ?></textarea>
                        </div>

                        <div class="input-single-box">
                            <label>Map :</label>
                            <textarea rows="3" name="map" class="form-control" placeholder="Map" ><?php echo $showdata['map']; ?></textarea>
                        </div>

                        </div>
                        <div class="input-single-box"">
                            <input type="submit" name="save" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>