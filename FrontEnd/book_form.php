<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guest = $_POST['guest'];
    $arrival = $_POST['arrival'];
    $leaving = $_POST['leaving'];
  
    $request = "INSERT INTO book_form(name, email, phone, address, location, guest, arrival, leaving) VALUES('$name', '$email', '$phone', '$address', '$location', '$guest', '$arrival', '$leaving')";

    mysqli_query($connection, $request);

    header('location:book.php');
}else{
    echo 'something went wrong try again';
}

?>