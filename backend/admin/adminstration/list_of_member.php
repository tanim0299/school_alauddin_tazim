<?php include('../layouts/header.php');?>
<?php include('../layouts/sidebar.php');?>

<div class="main-content">
     <section class="section">
              <div class="form-header">
                  <h4>ADD MEMBER</h4>
              </div>
              <div class="form-section">
                
                <form method="POST" enctype="multipart/form-data">
                    <div class="input-single-box ">   
                        <select name="status" class="form-control col-lg-12 col-md-12 col-12">
                            <option value="">Select One</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                     <div class="input-single-box">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="" required >
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Father Name</label>
                                <input type="text" name="father_name" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" value="" required >
                            </div>
                        </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Father Name</label>
                                <input type="text" name="father_name" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" value="" required >
                            </div>
                        </div>
                    </div>
                    <div class="input-single-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Father Name</label>
                                <input type="text" name="father_name" class="form-control" value="" required >
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <label>Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" value="" required >
                            </div>
                            
                        </div>
                    </div>
                     <div class="input-single-box">
                        <label>Details</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                     <div class="input-single-box">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        
                    </div>
                    <div class="input-single-box ">   
                        <select name="status" class="form-control col-lg-12 col-md-12 col-12">
                           
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
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