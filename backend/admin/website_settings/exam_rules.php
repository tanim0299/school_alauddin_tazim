<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>Exam Rules </h4>
              </div>
             
              <div class="form-section">
               <?php
               $description= isset($_POST['description'])?$_POST['description']:"";
              if (isset($_POST['save'])) 
              {
                
                 $sql=$db->link->query("UPDATE `exam_rules` SET `description`='$description' WHERE `id`=1");
                  if($sql)
                                {
                                    echo "<div class='alert alert-success'>Data Insert Successfully</div>";       
                                }
                                else
                                {
                                    echo "<div class='alert alert-danger'>Data Insert Unsuccessfllly!</div>";
                                }

                
              }

              
              $sql_select=$db->link->query("SELECT * FROM `exam_rules` WHERE `id`=1");
              if($sql_select)
              {
                $showdata= $sql_select->fetch_assoc();
              }

               ?>
                <form method="POST">
                    <div class="input-single-box">
                        <label>Exam Rules</label>
                        <textarea name="description" class="form-control summernote"><?php echo $showdata['description'];?></textarea>
                    </div>
                     
                    <div class="input-single-box" style="text-align: center;">
                        <input type="submit" name="save"
                        class="btn btn-success" id="save">
                    </div>
                </form>  
              </div> 
                     
    </section>
</div>

<?php include('../layouts/footer.php')?>