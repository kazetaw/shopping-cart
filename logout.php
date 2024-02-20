<?php
session_start();
session_destroy(); //การล้างข้อมูลการยกเลิกข้อมูลทั้งหมดก่อนที่จะไแเฮดindex
header("Location: index.php");	
?>