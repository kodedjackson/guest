<?php include('config.php');?>

<?php 

echo $name = $_POST['name'];
echo $check_in = $_POST['check_in'];
echo $check_out = $_POST['check_out'];
echo $phone_num = $_POST['phone_num'];
echo $room_type = $_POST['room_type'];
echo $room_num = $_POST['room_num'];
echo $email = $_POST['email'];


//$sql = mysqli_query($conn, "INSERT INTO `guest`(`name`, `check_in`, `check_out`, `phone_num`, 
//                            `room_type`, `room_num`, `email`) VALUES 
//                            ('$name','$check_in','$check_out','$phone_num',
//                            '$room_type','$room_num','$email')");
//
//if($sql == TRUE){
//    //echo "data subitted";
//    header('location:'. HOMEPAGE);
//}else{
//    echo "failled to submt data";
//}
//
//echo "Yes lod";



?>