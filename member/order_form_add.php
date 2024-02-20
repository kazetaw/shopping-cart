<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        font-family: Verdana, Geneva, sans-serif;
        font-size: 16px;
            }
            .row {
            border-radius: 10px;
            background-color: #f2f2f2;
            padding: 5px;
            justify-content: center;
            
            }
            .title_container {
		text-align: center;
		padding-bottom: 15px;
	        }
           
            
            
            
    </style>

</head>
<body>
    
 <div class="col-md-10">
    <form name="register" action="order_form_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-12" align="left">
                <br>
                <div class="title_container">
                <h4 style=" padding-top: 1.5rem;"> ชำระเงิน </h4>
                <hr>
            </div>
        </div>
        <div class="container">
        <div  class="form-group">
            <div class="col-sm-2" align=""> ชื่อ:</div>
            <div class="col-sm-6" align="left">
                <input style="width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #fff;" name="o_name" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ที่อยู่ให้ส่ง :</div>
            <div class="col-sm-6" align="left">
                <input style="width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #fff;"name="o_address" type="text" required class="form-control" id="o_address" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> เวลาสลิป:</div>
            <div class="col-sm-6" align="left">
                <input style="width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #fff;" name="o_date" type="text" required class="form-control" id="o_date"
                    placeholder="ภาษาอังกฤษหรือภาษาไทย" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6">
                สลิป :
                <input type="file" name="o_img" id="card_img" class="form-control" />
            </div>
        </div></div></div>
        <div class="form-group">
            
            <div class="col-sm-6" align="center">
                <button style="margin-right: 200rem; "type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-saved"></span>
                        ชำระ
                </button> <a href="order_form_add.php" type="button" class="btn btn-danger" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>   
</body>
</html>
