
<?php
        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "hussaincatering");
        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Taking input values from the form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Inserting data into the database
        $sql = "INSERT INTO catering (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully.</h3>";
            // echo nl2br("\nName: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n");
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
 
