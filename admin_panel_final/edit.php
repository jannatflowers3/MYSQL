<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include_once("includes/db_confiq.php");
$edit_id = $_REQUEST['edid'];
$sql = " SELECT * FROM  product WHERE pid  = '$edit_id'";
$result = $db->query($sql);
$data = $result->fetch_object();

?>
<h1> Product Edit Page</h1>
            <!-- form start -->
            <form role="form" method= "post">
                <div class="card-body">
              
                  <div class="form-group">
                    <label for="pname">Product Name</label>
                    <input type="text" class="form-control" id="pname" name = "pname" value = "<?php echo $data['pname'];?>" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="pdetails">Product Details</label><br>
                    <textarea name="pdetails" id="pdetails" class="form-group"rows="10" cols="40"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="pprice">Product Price</label>
                    <input type="text" class="form-control" id="pprice" name = "pprice" placeholder="Enter your product price">
                  </div>
           
                    <label for="pthumb">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pthumb" name ="pthumb">
                        <label class="custom-file-label" for="pthumb">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="" >Upload</span>
                      </div>
                    </div>
                  </div>

               
   
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
                </div>
              </form>
</body>
</html>