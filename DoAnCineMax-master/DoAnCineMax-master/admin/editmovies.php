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
            $sql="SELECT * FROM `movies` WHERE `id`= ".$id;
            //Chạy câu SQL
            $result=mysqli_query($con,$sql);
            //Gắn dữ liệu lấy được vào mảng $data
            while ($row=mysqli_fetch_assoc($result)) {
                $info = $row;
            }
        ?>
        <form action="../controller/processmovies.php" method="POST">
            <h1>Chỉnh sửa thông tin phim</h1>
            <div class="form-group">
                <input type="text" name="title" value="<?php echo $info['title'] ?>"><span>Tên phim: </span>
            </div>
            <div class="form-group">
                <input type="text" name="genre" value="<?php echo $info['genre'] ?>"><span>Thể loại: </span>
            </div>
            <div class="form-group">
                <input type="text" name="director" value="<?php echo $info['director'] ?>"><span>Tác giả </span>
            </div>
            <div class="form-group">
                <input type="text" name="actor" value="<?php echo $info['actor'] ?>"><span>Diễn viên: </span>
            </div>
            <div class="form-group">
                <input type="date" name="relDate" value="<?php echo $info['relDate'] ?>"><span>Ngày </span>
            </div>
            <div class="form-group">
                <input type="file" name="image" value="<?php echo $info['image'] ?>"><span>Hình ảnh: </span>
            </div>
            <div class="form-group">
                <button type="submit">Cập nhật</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
    </body>
</html>