<?php 
include('config.php');
$id = $_GET['id'];

$select =mysqli_query($conn, "SELECT * FROM guest WHERE id=$id");

$rows = mysqli_fetch_assoc($select);
$name =$rows['name'];
$check_in =$rows['check_in'];
$check_out =$rows['check_out'];
$phone_num =$rows['phone_num'];
$room_type =$rows['room_type'];
$room_num =$rows['room_num'];
$email =$rows['email'];


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
    <title>Edit Guest</title>
</head>
<body>
    <main>
<div class="add_new">
            <h1 style="text-align: center;">Edit <?php echo $name ;?></h1>
            <form method="POST" action="">
                <input type="text" required name="name" value="<?php echo $name;?>">
                <input type="date" required name="check_in" value="<?php echo $check_in;?>" value="<?php echo $check_in;?>">
                <input type="date" required name="check_out" value="<?php echo $check_out;?>" value="<?php echo $check_out;?>">
                <input type="number" required name="phone_num" value="<?php echo $phone_num;?>">
                <select id="room_type" required name="room_type">
                    <option value="Presidential Suit">Presidential Suit</option>
                    <option value="Single Room">Single Room</option>
                    <option value="Double Room">Double Room</option>
                </select>
                <input type="text" required name="room_num" value="<?php echo $room_num;?>">
                <input type="email"  required name="email" value="<?php echo $email;?>">
                <div class="submit">
                    <button name="submit" type="submit">Submit</button>
                </div>

            </form>

            
        </div>


<?php 

if(isset($_POST['submit'])){

    $update= mysqli_query($conn, "UPDATE `guest` SET `id`='$id',`name`='$name',
                                    `check_in`='$check_in',`check_out`='$check_out',`phone_num`='$phone_num',
                                    `room_type`='$room_type',`room_num`='$room_num',`email`='$email' WHERE id=$id");
    //echo "button clicked";
    if($update==TRUE){
        //echo "success";
        header('location:'. HOMEPAGE);
    }else{
        echo "Failed to update guest";
    }
}else{
    echo "button not clicked";
}



?>