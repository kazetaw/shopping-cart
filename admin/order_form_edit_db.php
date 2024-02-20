<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
if($_SESSION['o_type']!='ชำระเงินแล้ว'){
	Header("Location: order.php");
}
	$o_id = mysqli_real_escape_string($con,$_POST["o_id"]);
	$o_type = mysqli_real_escape_string($con,$_POST["o_type"]);
	$o_name = mysqli_real_escape_string($con,$_POST["o_name"]);
	$o_address = mysqli_real_escape_string($con,$_POST["o_address"]);
	$o_date = mysqli_real_escape_string($con,$_POST["o_date"]);	
	$o_img2 = mysqli_real_escape_string($con,$_POST["o_img2"]);


	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img = (isset($_POST['o_img']) ? $_POST['o_img'] : '');
	$upload=$_FILES['o_img']['name'];
	if($upload !='') { 

		$path="../o_img/";
		$type = strrchr($_FILES['o_img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../o_img/".$newname;
		move_uploaded_file($_FILES['o_img']['tmp_name'],$path_copy);  
	}else{
		$newname=$o_img2;
	}

	$sql = "UPDATE tbl_order SET 
	o_type='$o_type',
	o_name='$o_name',
	o_address='$o_address',
	o_date='$o_date',
	o_img='$newname'
	WHERE o_id=$o_id
	 ";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "window.location='order.php?do=finish';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='order.php?act=add&do=f';";
    echo '</script>';
}
?>