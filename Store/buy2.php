<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email'];
        $address_1 = $_POST['ad1'];
        $address_2 = $_POST['ad2'];
        $product = $_POST['choices'];
        $quantity = $_POST['quantity'];
        $size = $_POST['size'];

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "nssc";

        $connection_to_sql = mysqli_connect($hostname, $username, $password, $database);

        if ($connection_to_sql->connect_error) {
            die("Looks like we failed to connect to the server! " . $connection_to_sql->connect_error);
        }
        else {
            echo("Successfully connected to the server <br>");
        }

        $sql_insert = "INSERT INTO `orders` (`name`, `phone`, `email`, `address_1`, `address_2`, `product`, `quantity`, `size`) VALUES ('$name', '$phone', '$email', '$address_1', '$address_2', '$product', '$quantity', 'NULL');";

        if ($connection_to_sql->query($sql_insert) === TRUE) {
            echo "Your order of $product (x$quantity) of size $size has been placed!<br>";
            echo "Continue buying more products<br>";
        }
        else {
            echo "Error in inserting data<br>" . $connection_to_sql . "<br>"; 
        }
        mysqli_close($connection_to_sql);
    }
?>