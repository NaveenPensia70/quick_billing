<?php
$server = "localhost";
$username = "root";
$pass = "";
$connec = mysqli_connect($server, $username, $pass);

// Check if the connection was successful
if (!$connec) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['Submit'])) {
    $action = $_POST['action']; // Assuming you have an 'action' field in your HTML form

    if ($action == 'register') {
        // Registration code
        $name = $_POST['nameuser'];
        $business = $_POST['businessname'];
        $ph_no = $_POST['phno'];
        $gmail = $_POST['gmail'];
        $password = $_POST['pass'];
        $gst = $_POST['gst'];

        // Sanitize user inputs to prevent SQL injection
        $name = mysqli_real_escape_string($connec, $name);
        $password = mysqli_real_escape_string($connec, $password);

        $sql = "INSERT INTO `loginpage`.`data_two` (`business_name`, `ph_no`, `gmail`, `username`, `password`, `gst`) VALUES ('$business', '$ph_no', '$gmail', '$name', '$password', '$gst')";

        if ($connec->query($sql) === true) {
            // Set the username in a session variable
            session_start();
            $_SESSION['username'] = $name;

            // Redirect to the profile page
            header("Location: profile.php");
            exit();
        } else {
            echo '<script type="text/JavaScript">';
            echo 'alert("Registration failed")';
            echo '</script>';
        }
    } elseif ($action == 'login') {
        // Login code
        $name = $_POST['nameuser'];
        $password = $_POST['pass'];

        // Sanitize user inputs to prevent SQL injection
        $name = mysqli_real_escape_string($connec, $name);

        // Query to check if the username and password match
        $sql = "SELECT * FROM `loginpage`.`data_two` WHERE `username` = '$name' AND `password` = '$password'";

        $result = mysqli_query($connec, $sql);

        if ($result) {
            // Check if a row with the provided username and password was found
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $isAdmin = $row['Admin'];

                // Start a PHP session
                session_start();

                // Set the username in a session variable
                $_SESSION['username'] = $name;

                if ($isAdmin == 1) {
                    // User is an admin, redirect to admin.php
                    header("Location: admin.php");
                } else {
                    // User is a regular user, redirect to profile.php
                    header("Location: profile.php");
                }
                exit();
            }
        }

        echo '<script type="text/JavaScript">';
        echo 'alert("Invalid username or password")';
        echo '</script>';
    }
}

$connec->close();
?>
