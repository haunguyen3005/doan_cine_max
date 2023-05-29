<?php 
    //Kết nối databse
    $con = mysqli_connect('localhost', 'root', '', 'cine_max_db');
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql="SELECT * FROM `booking` ORDER BY `id`";
    //Chạy câu SQL
    $result=mysqli_query($con,$sql);
    //Gắn dữ liệu lấy được vào mảng $data
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
?>
<style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
         <table id="datatable" style="border: 1px solid">
            <h1>Quản lý Booking</h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Booking Room</th>
                    <th>Type</th>
                    <th>Movie Date</th>
                    <th>Movie Time</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Booking Datetime</th>
                    <th>Booking Seat</th>
                    <th>Amout</th>
                    <th style="width: 7%;">Edit</th>
                    <th style="width: 10%;">>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $html = '';
                foreach ($data as $value) {
                    $html .= '
                    <tr role="row">
                        <td>'.$value['id'].'</td>
                        <td>'.$value['booking_room'].'</td>
                        <td>'.$value['type'].'</td>
                        <td>'.$value['movie_date'].'</td>
                        <td>'.$value['movie_time'].'</td>
                        <td>'.$value['firstName'].' </td>
                        <td>'.$value['lastName'].'</td>
                        <td>'.$value['fullName'].'</td>
                        <td>'.$value['email'].'</td>
                        <td>'.$value['booking_DateTime'].'</td>
                        <td>'.$value['booking_seat'].'</td>
                        <td>'.$value['amout'].'</td>
                        <td><a href="editbooking.php?id='.$value['id'].'">Edit</a></td>
                        <td><a href="deletebooking.php?id='.$value['id'].'"> Delete</a></td>
                    </tr>';
                }
                
                ?>
               
                    <?php  
                        echo $html;
                    ?>
                
                </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="addbooking.php"><button id="button">Thêm Booking</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>