<?php
    require_once('condb.php');
    if(isset($_REQUEST['btn_insert'])){
        try{
            $name = $_REQUEST['txt_name'];
            $image_file = $_FILES['txt_file']['name'];
            $type = $_FILES['txt_file']['type'];
            $size = $_FILES['txt_file']['size'];
            $temp = $_FILES['txt_file']['tmp_name'];

            $path = 'upload/' . $image_file; // set upload folder path

            if(empty($name)){
                $errorMsg = "Please Enter name";
            }else if(empty($image_file)){
                $errorMsg = "Please Select Iamge";
            }else if($type == "image/jpg" || $type == "image/png" || $type ="image/gif"){
                if(!file_exists($path)){ //check file not exist in your upload folder path
                    if($size < 5000000){ // check file size 5MB
                        move_uploaded_file($temp,'upload/'.$image_file); // move upload file temperory directory to your upload folder
                    }else{
                        $errorMsg ="Your file too large please upload 5 MB size"; // error message file size larger than 5mb
                    }
                }else{
                    $errorMsg = "File already exists... Check upload folder"; //error message file not exists your upload folder path
                }
            }else{
                $errorMsg = "Upload JPG,JPEG, PNG & GIF file formate... ";
            }

            if(!isset($errorMsg)){
                $insert_stmt = $db->prepare('INSERT INTO tbl_payment(name, image) VALUES(:fname,:fimage)');
                $insert_stmt->bindParam(':fname', $name);
                $insert_stmt = bindParam(':fimage', $image_file);

                if($insert_stmt->exeute()){
                    $insertMsg = "File Upload succcessfully...";
                    header('refresh:2; index.php');
                }
            }
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class ="container text-center">
        <h1>Insert file page</h1>

        <?php
            if(isset($insertMsg)){
        ?>
            <div class = 'alert alert-success'>
                <strong><?php echo $insertMsg; ?></strong>
            </div>
        <?php }
        ?>

        <form action ="" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <div class ="row">
            <label for="name" class="col-sm3- control-label">Name</label>
            <div class="col-sm-9">
                <input type=text name="txt_name" class="form-control" placeholder="Enter name"> 
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class ="row">
            <label for="name" class="col-sm3- control-label">File</label>
            <div class="col-sm-9">
                <input type=file name="txt_file" class="form-control" > 
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class ="col-sm-12">
                <input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>