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
        <form action="../controller/processmovies.php" method="POST">
            <h1>Thêm Phim</h1>
            <div class="form-group">
                <input type="text" name="title"><span>Title: </span>
            </div>
            <div class="form-group">
                <input type="text" name="genre"><span>Genre </span>
            </div>
            <div class="form-group">
                <input type="text" name="director"><span>Director </span>
            </div>
            <div class="form-group">
                <input type="text" name="actor"><span>Tác giả </span>
            </div>
            <div class="form-group">
                <input type="date" name="relDate"><span>Ngày </span>
            </div>
            <div class="form-group">
                <input type="file" name="image"><span>Hình ảnh </span>
            </div>
            <div class="form-group">
                <button type="submit">Thêm</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
    </body>
</html>