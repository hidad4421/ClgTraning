<?php
if (isset($_POST['submit'])) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];

    // SQL query to insert data into the table
    $query = "INSERT INTO feedback (username, email, rating, comments) VALUES ('$username', '$email', '$rating', '$comments')";

    // Execute the query
    if ($conn->query($query) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
