<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM tbl_order WHERE o_id=$ID";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
?>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<form action="order_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <br><br>
<div class="form-group">
    <div class="col-sm-2 control-label"> 
    </div>
    <div class="col-sm-2">
      <select name="o_type" class="form-control" required>
        <option value="">เลือกข้อมูล</option>
        <option value="ชำระเงินเเล้ว">ชำระเงินเเล้ว</option>
        <option value="รอการตรวจสอบ">รอการตรวจสอบ</option>   
      </select>
    </div>
  </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-3">
      <input type="text" name="o_name" required class="form-control" autocomplete="off" minlength="2" value="<?php echo $row['o_name'];?>">
    </div><br><br>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์หรืออีเมลล์ที่รับรหัส :
    </div>
    <div class="col-sm-3">
      <input type="text" name="o_address" required class="form-control" value="<?php echo $row['o_address'];?>">
    </div><br><br>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      สินค้าที่ซื้อ :
    </div>
    <div class="col-sm-3"> 
      <input type="text" name="o_date" required class="form-control" value="<?php echo $row['o_date'];?>">
    </div><br><br>
  </div>
   <div class="form-group">
    <div class="col-sm-2 control-label">
    <br><br>
  <div class="form-group">
    <div class="col-sm-2 control-label">

    </div>
    <div class="col-sm-4">
      สลิป 
      <img src="../o_img/<?php echo $row['o_img'];?>" width="200px">
      <br>
      <br><br><br>
      
      <img id="blah" src="#" alt="" width="250" class="img-rounded"/ style="margin-top: 20px;">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2">
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="col-sm-3">
      <input type="hidden" name="o_img2" value="<?php echo $row['o_img'];?>">
      <input type="hidden" name="o_id" value="<?php echo $ID; ?>" />
      <button type="submit" class="btn btn-success">แก้ไขสถานะ</button>
      <a href="order.php" class="btn btn-danger">ยกเลิก</a>
    </div>
  </div>
</form>