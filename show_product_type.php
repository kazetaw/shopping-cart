<?php
include 'condb.php';

$type_id = $_GET['type_id'];
// echo $type_id;
// exit();

$query_product_type = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
WHERE p.type_id = $type_id  
ORDER BY p.p_id ASC";
$result_pro =mysqli_query($con, $query_product_type) or die ("Error in query: $query_product" . $mysqli_error());
// echo($query_product_type);
// exit();
?>

    <?php foreach($result_pro as $row_pro) {?>
        <br>

<div class="col-sm-3" align="center">
    <div class="card border-Light mb-1" style="width: 16.5rem;">
        <br>
        <img class="card-img-top" >
        <a href=""> <?php echo"<img src='p_img/".$row_pro['p_img']."'width='200' height='200'>";?></a>
        <div class="card-body">
            <a href="prd.php?id=<?php echo $row_pro[0]; ?>"><b> <?php echo $row_pro["p_name"];?></b> </a>
            <br>
            ราคา <b><font color="red"> <?php echo $row_pro["p_price"];?></font></b> บาท
            <br>

            คงเหลือ <?php echo $row_pro["p_qty"];?> <?php echo $row_pro["p_unit"];?>
            <br><button type="button" class="btn btn-info btn-sm">
                <a href="prd.php?id=<?php echo $row_pro[0]; ?>" style="color: #fff">รายละเอียด</a> <br>
            </button>
        </div>
        
    </div></div>

<?php } ?>
