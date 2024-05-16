<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Function to calculate the total amount for a user
function calculateTotalAmount($username, $conn) {
    $stmt = $conn->prepare("SELECT SUM(amount) as totalAmount FROM stockdetail WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $totalAmount = $row['totalAmount'];

    $stmt->close();

    return $totalAmount;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemNames = $_POST['item_name'];
    $itemIds = $_POST['item_id'];
    $quantities = $_POST['quantity'];
    $amounts = $_POST['amount'];

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "purchaseddata";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO stockdetail (username, item_name, item_id, quantity, amount) VALUES (?, ?, ?, ?, ?)");

    $username = $_SESSION['username'];

    for ($i = 0; $i < count($itemNames); $i++) {
        $stmt->bind_param("ssidd", $username, $itemNames[$i], $itemIds[$i], $quantities[$i], $amounts[$i]);
        $stmt->execute();
    }

    $stmt->close();

    // Calculate the total amount for the user
    $totalAmount = calculateTotalAmount($username, $conn);

    // Store the totalAmount in a session variable
    $_SESSION['totalAmount'] = $totalAmount;

    $conn->close();

    // Redirect to profile.php
    header("Location: profile.php");
    exit();
}
?>
