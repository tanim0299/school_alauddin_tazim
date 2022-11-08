<?php 
include('../layouts/header.php');
include('../layouts/sidebar.php'); 
?>
<!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="form-header">
                    <h4>Exam Routine</h4>
                </div>
                <div class="links">
                    <a href="view_exam_routine.php" class="btn btn-info">View Exam Routine</a>
                </div>
                <?php 
                if(isset($_POST['save']))
                {
                    $date = $_POST['date'];
                    $class = $_POST['class'];
                    $title = $_POST['title'];

                    $db->insert('exam_routine',['date'=>$date,'class_id'=>$class,'title'=>$title]);

                    $file = $_FILES['image']['name'];
                    
                    if($file)
                    {
                        $id = $db->link->insert_id;
                        $extension = pathinfo($file, PATHINFO_EXTENSION);

                        $image_name = rand().'.'.$extension;

                        $image_path = '../../asset/img/exam_routine/'.$image_name;

                        move_uploaded_file($_FILES['image']['tmp_name'],$image_path);

                        $db->update('exam_routine',['image'=>$image_name],"id='$id'");

                    }

                }
                ?>
                <div class="form-section">
                    <form method="post" enctype="multipart/form-data">
                        <div class="input-single-box">
                            <label>Date</label>
                            <input type="text" name="date" class="form-control datepicker"  required autocomplete="off">
                        </div>
                        
                        <div class="input-single-box">
                                    <label>Class Name:</label>
                                    <select name="class" class="form-control col-lg-12 col-md-12 col-12">
                                        <?php
                                        $class=$db->link->query("SELECT * FROM `add_class`");
                                        if($class)
                                        {
                                            while ($show_main_menu=$class->fetch_array()) 
                                            {
                                        ?>
                                    <option value="<?php echo $show_main_menu['0'];?>"><?php echo $show_main_menu['1']?></option>
                                    <?php
                                    }
                                }
                                ?>
                                </select>
                            </div>

                        <div class="input-single-box">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" required>
                        </div>
                        <div class="input-single-box">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>  
                        <div class="input-single-box" style="text-align: center;">
                            <input type="submit" name="save" class="btn btn-success" id="save">
                        </div>
                    </form>
                </div>
            </section>
        </div>
<?php include('../layouts/footer.php'); ?>