<?php include('config.php');?>
<?php 

$name = $_POST['name'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$phone_num = $_POST['phone_num'];
$room_type = $_POST['room_type'];
$room_num = $_POST['room_num'];
$email = $_POST['email'];


$sql = mysqli_query($conn, "INSERT INTO `guest`(`name`, `check_in`, `check_out`, `phone_num`, 
                            `room_type`, `room_num`, `email`) VALUES 
                            ('$name','$check_in','$check_out','$phone_num',
                            '$room_type','$room_num','$email')");

if($sql == TRUE){
    //echo "data subitted";
    header('location:'. HOMEPAGE);
}else{
    echo "failled to submt data";
}














?>