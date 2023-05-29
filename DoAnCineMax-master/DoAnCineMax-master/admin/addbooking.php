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
        <form action="../controller/processbooking.php" method="POST">
            <h1>Thêm Booking</h1>
            <div class="form-group">
                <input type="text" name="booking_room"><span>Room: </span>
            </div>
            <div class="form-group">
                <input type="text" name="type"><span>Type </span>
            </div>
            <div class="form-group">
                <input type="date" name="movie_date"><span>Date </span>
            </div>
            <div class="form-group">
                <input type="time" name="movie_time"><span>Time </span>
            </div>
            <div class="form-group">
                <input type="text" name="firstName"><span>Fistname </span>
            </div>
            <div class="form-group">
                <input type="text" name="lastName"><span>Lastname </span>
            </div>
            <div class="form-group">
                <input type="text" name="fullName"><span>Fullname </span>
            </div>
            <div class="form-group">
                <input type="email" name="email"><span>Email </span>
            </div>
            <div class="form-group">
                <input type="time" name="booking_DateTime"><span>DateTime </span>
            </div>
            <div class="form-group">
                <input type="text" name="booking_seat"><span>Seat </span>
            </div>
            <div class="form-group">
                <input type="text" name="amout"><span>Amout </span>
            </div>
            <div class="form-group">
                <button type="submit">Thêm</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
    </body>
</html>