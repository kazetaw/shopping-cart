<?php 
session_start();
include 'condb.php';
$id=$_GET['id'];
$sql ="SELECT * FROM tbl_product WHERE p_id ='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
        <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script> src = "bootstrap/js/bootstrap.bundle.min.js"</script>
</head>
<body>

<div class="contaioner">
    <form id="forn1" method="POST" action=""></form>
        <div class="col-md-10">
            <table class="table table-hover"> 

            <tr> 
                <tr>ลำดับที่</tr>
                <tr>ชื่อสินค้า</tr>
                <tr>ราคา</tr>
                <tr>จำนวน</tr>
                <tr>ราคารวม</tr>
            </tr>
 <?php 
 $Total =0;
 $sumPrice = 0;
 $m =1;
 for($i=0; $i <= (int)$_SESSION["intLine"]; $i++){
    if(($_SESSION["strProductID"][$i]) != "" ){
        $sql="select * from tbl_product where p_id ='" . $_SESSION["strProductID"][$i] . "' ";
        $result1= mysqli_query($conn, $sql1);
        $row_pro = mysqli_fetch_array($result);

        $_SESSION["p_price"] = $row_pro['p_price'];

    $Total =  $_SESSION["strQty"][$i];
    $sum = $Total * $row_pro['proce'];
    $sumPrice = $sumPrice + $sum;
    $sumPrice = number_format($sumPrice);

    }
    
?>           
    <tr>
                <td><?=$m?></td>
                <td><?=$row_pro['p_name']?></td>
                <td><?=$row_pro['p_price']?></td>
                <td><?=$_SESSION['strQty'][$i]?></td>
                <td><?$sumPrice?></td>
           </tr> 
        <?php 
        $m =$m+1;
 
 }  
        ?>
        </table>
        </div>
</form>
</div> 
</body>
</html>