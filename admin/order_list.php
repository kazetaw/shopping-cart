<?php 
  if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=order.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=order.php" />';

  }else if(@$_GET['do']=='wrong'){
    echo '<script type="text/javascript">
          swal("", "รหัสผ่านใหม่ไม่ตรงกัน !!", "warning");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=order.php" />';

  }else if(@$_GET['do']=='error'){
    echo '<script type="text/javascript">
          swal("", "ผิดพลาด !!", "error");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=order.php" />';
  }

$query = "SELECT * FROM tbl_order,tbl_product as p
INNER JOIN tbl_type as t ON p.type_id = t.type_id
ORDER BY p.p_id ASC" or die("Error:" . $mysqli_error());
$result = mysqli_query($con, $query);

// echo $query;
// exit();
echo '<table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
      <th width='5%'>ลำดับที่</th>
      <th width='20%' class='hidden-xs'>รูป</th>
      <th width='10%' class='hidden-xs'>ชื่อ</th>
      <th width='15%'>รายละเอียด</th>
      <th width='12%'>วันเวลาที่ชำระ</th>
      <th width='15%'>รายการ</th>
      <th width='2%'>สถานะ</th>
      
      
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
    $st = $row["o_type"];
    echo "<tr>";
    echo "<td>" .$row["o_id"] .  "</td> ";
    echo "<td align=center>" . "<img src='../o_img/" . $row["o_img"] . "' width='100'>" . "</td>";
    echo "<td class='hidden-xs'>".$row["o_name"]."</td> ";
    
    echo "<td>".$row["o_address"]."</td> ";
    echo "<td>".$row["o_date"]."</td> ";
    
    echo "<td> ชื่อ: " .$row["p_name"] .
    "<br>ประเภท: <font color='blue'>".$row["type_name"] ."</font>".
      "</td class='hidden-xs'> ";
   
    echo "<td class='hidden-xs' align='left'>";
    if ($st == 'ชำระเงินเเล้ว') {
      echo ""." <span class='label label-success'>(ชำระเงินเเล้ว)</span>";
    }elseif($st == 'รอการตรวจสอบ') {
      echo ""." <span class='label label-info'>(รอการตรวจสอบ)</span>";
    }
    echo "</td> ";
    echo "<td><a href='order.php?act=edit&ID=$row[o_id]' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></a>   
          <a href='order_del_db.php?ID=$row[o_id]' onclick=\"return confirm('ยันยันการลบ')\" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></a>
    </td> ";
  } 
echo "</table>";
mysqli_close($con);
?>