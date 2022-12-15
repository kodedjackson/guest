<?php

//constants to avoid repeating variables
define('dbHost', 'localhost');
define('dbUsername','root');
define('dbPassword','');
define('dbDatabase','uest_book');
define('HOMEPAGE', 'http://localhost/guest/');


$conn=mysqli_connect(dbHost, dbUsername, dbPassword, dbDatabase);
//
//if($conn == TRUE){
//    echo "lies";
//}else{
//    echo "failed";
//}
?>