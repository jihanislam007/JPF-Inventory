<?php
include 'database_connect.php';

if(isset($_POST['submit'])){

    $fname = $_POST['customer_name'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $due = $_POST['due'];
    $time = time();

    $sql = "INSERT INTO `Dashboard` (`id`, `customer_name`, `phone`, `product`, `due`, `time`) VALUES (NULL, '$fname', '$phone', '$product', '$due', '$time');";

    if(mysqli_query($conn,$sql)){
      
      echo 'Data saved';
      echo '<div class="alert alert-success">Thank You!now please login </div>';
      header("Location:http://localhost/JPF/");
    }else
    {
      echo mysqli_connect_error();
    }
    $conn->close();
 // echo $fname , $phone ,$product , $due;
}
?>

