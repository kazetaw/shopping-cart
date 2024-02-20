<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
       *{
        margin: 0;
        padding: 0;
        box-sizing: 0;
       }
            
            
	        
            .container{
                width: 360px;
                margin: 2rem auto;
                height: 500px;
                box-shadow: 3px 3px 10px;
                border-radius: 70px;
                overflow: hidden;
                flex-direction: column;
                align-items: center;
            }
            .im{
                height: 100px;
                background-color: #000;
            }
            .title_container {
            block-size: 30px;
            text-align: center;
            padding-bottom: 15px;
            flex-direction: column;
            }
            input{
                border: none;
                height: 30px;
                width: 250px;
                margin: 7px 0;
                padding: 0 10px;
                text-align: center;
                align-items: center;
                display:inline-block;
                
            }
            .btn{
                background-color: red; /* Green */
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            .btn1{
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            h1{
                text-align: center;
  text-transform: uppercase;
  color: #4CAF50;

            }
             
    </style>

</head>
<body>
    
 <div class="col-md-10">
    <form name="register" action="order_form_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-12" align="center">
                <br>
                <div class="title_container">
                <h1 style=" padding-top: 1rem;"> ชำระเงิน </้>
                <hr>
            </div>
        </div>
        <div class="container">
        <div  class="form-group">
            <div class="hed">
                <div class="im">
                    <img src="" alt="">
                </div>
            </div><br>
            <div class="fom">
            
            <div class="col-sm-6" align="center">
              <br>  <input placeholder="ชื่อ-นามสกุล" style="background-color: #DCDCDC" name="o_name" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            
            <div class="col-sm-6" align="center">
                <input placeholder="เบอร์ที่ต้องการให้ส่งรหัส" style="background-color: #DCDCDC" name="o_address" type="text" required class="form-control" id="o_address" />
            </div>
        </div>
        <div class="form-group">
        
        
            <div class="col-sm-6" align="center">
                <input name="o_date" type="datetime-local" required class="form-control" id="o_date"
                    placeholder="ภาษาอังกฤษหรือภาษาไทย" />
            </div>
        </div>   <label>
  <input style="width: 20px;margin-left: 45px;" type="radio" name="test" value="small" checked>
  <img style="width: 40px ;hight 40px;"src="b_logo/169732263220230316_152747.png" alt="Option 1">
</label> <a  > 0448447561 ธัญจิรา เมืองแสน</a>
<label>
  <input style="width: 20px;margin-left: 45px;" type="radio" name="test" value="small" checked>
  <img style="width: 40px ;hight 40px;" src="b_logo/126485507120230316_152814.png" alt="Option 1">
</label> <a  > 0957858436 ธัญจิรา เมืองแสน</a>
        <div class="form-group">
            <br>
            <div class="col-sm-6" align="center">
         <input style="margin-left: 45px;" type="file" name="o_img" id="card_img" class="form-control" />
            </div></div><div class="form-group">
            <br>
            <div class="col-sm-6" align="center">
                <button style="margin-right: 1rem;" type="submit"  class="btn1" id="btn"><span class="glyphicon glyphicon-saved"></span>
                        ชำระเงิน
                </button> 
                <a href="index.php" type="button" class="btn btn-danger"
                id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>
</div>
        </div></div>
        
        </div>
    </form>
</div>   
</body>
</html>
