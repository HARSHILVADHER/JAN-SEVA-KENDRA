<?php

// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "user_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Insert data into database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user, $email, $pass);

    if ($stmt->execute()) {
        $message = "Signup successful! <a href='login.php'>Login here</a>";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('Images/Background2.jpg');
    background-size: cover;
    
}
.container {
    background-image: url(images/background.jpg);
    background-size: cover;
    padding: 20px;
    box-shadow: 10px 10px 10px rgba(34, 30, 30, 0.1);
    border-radius: 10px;
    text-align: center;
    color: white;
    height: 450px;
    width: 300px;
    font-family: sans-serif;
    margin-right: 500px;
}
.logo {
    width: 300px;
    height: auto;
    margin-bottom: 10px;
}
input {
    display: block;
    width: 100%;
    margin: 10px 0;
    padding: 10px;
}
button {
    width: 100%;
    padding: 10px;
    background: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
}
button:hover {
    background: #0056b3;
}
    </style>
</head>
<body>
    <div class="container">
        <img src="Images\LOGO 1.png" alt="Logo" class="logo">
        <h2>Signup</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Signup</button>
        </form>
        <p>Already have an account? <a href="login.php" style="text-decoration: none; color: inherit;">Login</a></p>
        <p id="signup-message"><?php echo $message; ?></p>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
