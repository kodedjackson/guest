<?php  include('config.php');

//run a query to show a total number of bookings made
$booking_total = mysqli_query($conn, "SELECT SUM(id) AS total FROM guest ;");

$getrow = mysqli_fetch_assoc($booking_total);

$total = $getrow['total'];


//run a query to show how many rooms is left from 100 rooms
$rooms_available = 100 - $total;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Guest</title>
</head>
<body>
    <main>
        <div class="welcome">
            <h1 style="text-align: center; color:blue;">Hi, Welcome back Admin</h1>
        </div>
        <div class="col">
            <div class="bookings row">
                <i class="fa fa-hotel" style="font-size: 25px; color:blue;"></i>
                <p>Total Bookings</p>
                <span><?php echo $total;?></span>


            </div>
            <div class="customers row">
            <i class="fa fa-hotel" style="font-size: 25px; color:red; "></i>
                <p>Rooms Available</p>
                <span><?php echo $rooms_available; ?></span>

            </div>
        </div>
        <div class="booking_details">
            <!--<p>Booking Details</p><br>-->
            <div class="table">
                <table>
                    <thead>
                        <th>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Checked in</td>
                                <td>Checked Out</td>
                                <td>Phone Number</td>
                                <td>Room Type</td>
                                <td>Room Number</td>
                                <td>Email</td>
                                <td>ACTION</td>
                            </tr>
                        </th>
                    </thead>
                    <tbody>
                        <?php 
                       

                        $sql = mysqli_query($conn, "SELECT * FROM `guest`");

                        if($sql==TRUE){
                            $SN = 1;
                            //echo "success";
                            $count = mysqli_num_rows($sql);


if ($count>0){
        //we have data in databse
        while($rows=mysqli_fetch_assoc($sql)){
          //using while loop to get all the data in the database  
          //get individual data
        $id = $rows['id'];
        $nameDb = $rows['name'];
        $checkin = $rows['check_in'];
        $checkout = $rows['check_out'];
        $phone_numDB = $rows['phone_num'];
        $room_typeDb = $rows['room_type'];
        $room_numDb = $rows['room_num'];
        $emailDB = $rows['email'];

          
          ?>
            <tr>
                            <td><?php echo $SN++ ;?></td>
                            <td><?php echo $nameDb ;?></td>
                            <td><?php echo $checkin ;?></td>
                            <td><?php echo $checkout ;?></td>
                            <td><?php echo $phone_numDB ;?></td>
                            <td><?php echo $room_typeDb;?></td>
                            <td><?php echo $room_numDb;?></td>
                            <td><?php echo $emailDB;?></td>
                            <td><a href="<?php echo HOMEPAGE ?>edit.php?id=<?php echo $id ;?>"><button type="button" id="edit">Edit</button></a>
                            <a href="<?php echo HOMEPAGE ?>delete.php?id=<?php echo $id ;?>"><button type="button" id="delete">Delete</button></a></td>
                        </tr>


          <?php

        }
      }else{
        //we do not have database
      }
    }else{

    }


  ?>
  </tbody>
</table>

            </div>

        </div>
        <div class="add_new">
            <h4>Add New Guest</h4>
            <form method="POST" action="add_new.php">
                <input type="text" required name="name" placeholder="Full name">
                <input type="date" required name="check_in" placeholder="2022-12-6">
                <input type="date" required name="check_out">
                <input type="number" required name="phone_num" placeholder="Phone number">
                <select id="room_type" required name="room_type">
                    <option value="Presidential Suit">Presidential Suit</option>
                    <option value="Single Room">Single Room</option>
                    <option value="Double Room">Double Room</option>
                </select>
                <input type="text" required name="room_num" placeholder="Room Number">
                <input type="email"  required name="email" placeholder="Email">
                <div class="submit">
                    <button type="submit">Submit</button>
                </div>

            </form>

            
        </div>
    </main>
</body>
</html>