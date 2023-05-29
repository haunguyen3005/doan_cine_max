<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            button{
                margin-right: 20px;
                padding: 5px;
            }
            form{
                width: 600px;
                margin: auto;
                text-align: center;
            }
            div.form-group{
                width: 90%;
                height: 24px;
                margin: 5px;
            }
            div.form-group input{
                float: right;
                height: 20px;
                width: 400px;
            }
            span{
                font: 18px bold;
                font-weight: bold;
                float: right;
                margin-right: 10px; 
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php 
            $id = $_GET['id'];
            //Kết nối databse
            $con = mysqli_connect('localhost', 'root', '', 'cine_max_db');
            //Viết câu SQL lấy tất cả dữ liệu trong bảng players
            $sql="SELECT * FROM `booking` WHERE `id`= ".$id;
            //Chạy câu SQL
            $result=mysqli_query($con,$sql);
            //Gắn dữ liệu lấy được vào mảng $data
            while ($row=mysqli_fetch_assoc($result)) {
                $info = $row;
            }
        ?>
        <form action="../controller/processbooking.php" method="POST">
            <h1>Chỉnh sửa thông tin booking</h1>

            <div class="form-group">
                <input type="text" name="booking_room" value="<?php echo $info['booking_room'] ?>"><span>Room: </span>
            </div>
            <div class="form-group">
                <input type="text" name="type" value="<?php echo $info['type'] ?>"><span>Type </span>
            </div>
            <div class="form-group">
                <input type="date" name="movie_date" value="<?php echo $info['movie_date'] ?>" ><span>Date </span>
            </div>
            <div class="form-group">
                <input type="time" name="movie_time" value="<?php echo $info['movie_time'] ?>"><span>Time </span>
            </div>
            <div class="form-group">
                <input type="text" name="firstName" value="<?php echo $info['firstName'] ?>"><span>Fistname </span>
            </div>
            <div class="form-group">
                <input type="text" name="lastName" value="<?php echo $info['lastName'] ?>"><span>Lastname </span>
            </div>
            <div class="form-group">
                <input type="text" name="fullName" value="<?php echo $info['fullName'] ?>"><span>Fullname </span>
            </div>
            <div class="form-group">
                <input type="email" name="email" value="<?php echo $info['email'] ?>"><span>Email </span>
            </div>
            <div class="form-group">
                <input type="time" name="booking_DateTime" value="<?php echo $info['booking_DateTime'] ?>"><span>DateTime </span>
            </div>
            <div class="form-group">
                <input type="text" name="booking_seat" value="<?php echo $info['booking_seat'] ?>"><span>Seat </span>
            </div>
            <div class="form-group">
                <input type="text" name="amout" value="<?php echo $info['amout'] ?>"><span>Amout </span>
            </div>
            <div class="form-group">
                <button type="submit">Cập nhật</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
    </body>
</html>