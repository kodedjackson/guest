<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Guest</title>
</head>
<body>
    <main>
        <div class="welcome">
            
            <h1>Hi, Welcome back Admin</h1>
            <i class="fas fa-arrow-left"></i>
        </div>
        <div class="col">
            <div class="bookings row">
                <i class="fas fa-arrow-left"></i>
                <p>Total Bookings</p>
                <span>125</span>


            </div>
            <div class="customers row">
                <img src="...">
                <p>Rooms Available</p>
                <span>48</span>

            </div>
            <div class="revenue  row">
                <img src="...">
                <p>Revenue</p>
                <span>$20,000</span>

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
                        <tr>
                            <td>1</td>
                            <td>Jackson Jackson</td>
                            <td>12-12-2022</td>
                            <td>13-12-2022</td>
                            <td>08022761322</td>
                            <td>Presidential Suite</td>
                            <td>001</td>
                            <td>kodedjackson@gmail.com</td>
                            <td><button type="button" id="edit">Edit</button>
                                <button type="button" id="delete">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="add_new">
            <h4>Add New Guest</h4>
            <form method="POST" action="add_new.php">
                <input type="text" name="name" placeholder="Full name">
                <input type="date" name="check_in">
                <input type="date" name="check_out">
                <input type="number" name="phone_num" placeholder="Phone number">
                <select id="room_type" name="room_type">
                    <option value="Presidential Suit">Presidential Suit</option>
                    <option value="Single Room">Single Room</option>
                    <option value="Double Room">Double Room</option>
                </select>
                <input type="text" name="room_num" placeholder="Room Number">
                <input type="email" name="email" placeholder="Email">
                <div class="submit">
                    <button type="submit">Submit</button>
                </div>

            </form>

            
        </div>
    </main>
</body>
</html>