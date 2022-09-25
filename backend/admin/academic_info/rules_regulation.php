<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>RULES & REGULATION</h4>
                </div>
                <div class="form-section">
                    <?php 

                    if(isset($_POST['save']))
                    {
                        $title = $_POST['title'];
                        $description = $_POST['description'];

                        $sql_update = $db->link->query("UPDATE `rules_regulation` SET `title`='$title', `description`='$description' WHERE `id`=1");
                        if($sql_update)
                        {
                            echo "<div class='alert alert-success'>Data Insert Successfllly</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Data Insert Unsuccessfllly</div>";
                        }
                    }

                    $sql_select = $db->link->query("SELECT * FROM `rules_regulation` WHERE `id`=1");
                    if($sql_select)
                    {
                        $showdata = $sql_select->fetch_assoc();
                    }
                    ?>
                    <form method="POST">
                        <div class="input-single-box">
                            <label>Rules & Regulation</label>

                        <div class="input-single-box">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php print $showdata['title']; ?>" required>
                        </div>

                        <div class="input-single-box">
                            <label>Description</label>
                            <textarea name="description" id="" class="form-control summernote"><?php echo $showdata['description']; ?></textarea>
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