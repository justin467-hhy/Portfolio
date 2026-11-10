
<?php
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name == "" || $email == "" || $message == "") {
        die("Please fill in all fields.");
    }

    $sql = "INSERT INTO contact_messages (name, email, message)
            VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "sss",
        $name,
        $email,
        $message
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Message sent successfully!</h2>";
        echo "<p>Thank you for contacting me.</p>";
        echo '<a href="index.php#contact">Go back to portfolio</a>';
    } else {
        echo "Error saving your message.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else {
    echo "Please submit the contact form first.";
}
?>
