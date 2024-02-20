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
        background-color: #fff;
            }
            .row {
            border-radius: 0px;
            background-color: #f2f2f2;
            padding: 5px;
            justify-content: center;
            
            }
            .title_container {
                width: 500px;
                margin: 2rem auto;
                height: 700px;
                box-shadow: 3px 3px 10px;
                border-radius:0px;
                overflow: hidden;
                flex-direction: column;
                align-items: center;
	        }
            .img{
                background-color: #f2f2f2;
                height: 100px;
            }
            input{
                border: none;
                height: 20px;
                width: 100px;
                margin: 7px 0;
                padding: 0 10px;
                text-align: center;
                align-items: center;
                display:inline-block;
                
            }
           
               
           
            
            
            
    </style>

</head>
<body>
    
 <div class="col-md-10">
    <form name="register" action="member_form_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-12" align="center">
                <br> <h4 style=" padding-top: 1.5rem; "> สมัครสมาชิก </h4>
                <div class="title_container">
               
                <img src="" alt="">
                <div class="container">
        <div  class="form-group">
            
            <div class="col-sm-2" align=""> </div>
            <div class="col-sm-12" align="center">
                <input  placeholder="Username" name="m_user" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> </div>
            <div class="col-sm-12" align="center">
                <input name="m_pass" placeholder="Password"type="password" required class="form-control" id="m_pass" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""></div>
            <div class="col-sm-12" align="center">
                <input  name="m_name" type="text" required class="form-control" id="m_name"
                    placeholder="ชื่อ-สกุล" />
            </div>
        </div>


        <div class="form-group">
            
            <div class="col-sm-12" align="center">
                <input name="m_email" type="email" class="form-control" id="m_email" required
                    placeholder="Email" />
            </div>
        </div>
        <div class="form-group">
            
            <div class="col-sm-12" align="right">
                <input placeholder="เบอร์โทรศัพท์" name="m_tel" type="text" class="form-control" id="m_tel" required placeholder="ตัวเลขเท่านั้น"
                    maxlength="10" pattern="^[0-9]+$" title="ตัวเลขเท่านั้น" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" align="">  </div>
            &nbsp;&nbsp;&nbsp;<font color="red">** หมายเหตุเพิ่มเติม ** </font>
            <div class="col-sm-6" align="center">
                <textarea  name="m_address" class="form-control" id="m_address" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6" align="left">
                โปรไฟล์:
                <input type="file" name="m_img" id="card_img" class="form-control" />
            <div class="form-group">
            <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-info">เพิ่มข้อมูล</button> 
                <a href="index.php" type="button" class="btn btn-danger"
                id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
                
            </div>
                </button> 
            </div></div>
        </div></div></div>
                <hr>

            </div>
        </div>
        
        

        </div>
    </form>
</div>   
</body>
</html>
