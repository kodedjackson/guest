<?php

//constants to avoid repeating variables
define('HOMEPAGE', 'http://localhost/bincom/guest/');
define('dbHost', 'localhost');
define('dbUsername','root');
define('dbPassword','');
define('dbDatabase','guest_book');


$conn=mysqli_connect(dbHost, dbUsername, dbPassword, dbDatabase);

//if($conn == TRUE){
//    echo "lies";
//}else{
//    echo "failed";
//}
?>