<?php
    // form action="contact.php in contact us"
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

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

        $sql_insert = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";

        if ($connection_to_sql->query($sql_insert) === TRUE) {
            echo "Your data has been taken sucessfully! Thanks for contacting us.<br>";
        }
        else {
            echo "Error in inserting data<br>" . $connection_to_sql . "<br>"; 
        }
        mysqli_close($connection_to_sql);
    }
?>