<?php
    // form action="membership.php in membership"
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $birth_date = $_POST['birth_date'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $address_1 = $_POST['ad1'];
        $address_2 = $_POST['ad2'];
        $membership = $_POST['choices'];

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

        $sql_insert = "INSERT INTO `membership` (`name`, `birth_date`, `phone_number`, `email`, `address_1`, `address_2`, `membership`) VALUES ('$name', '$birth_date', '$phone_number', '$email', '$address_1', '$address_2', '$membership');";

        if ($connection_to_sql->query($sql_insert) === TRUE) {
            echo "Your data has been taken successfully! Thanks for filling our membership form.<br>";
        }
        else {
            echo "Error in inserting data<br>" . $connection_to_sql . "<br>"; 
        }
        mysqli_close($connection_to_sql);
    }
?>