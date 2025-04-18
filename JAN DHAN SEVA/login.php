<?php
session_start(); // Start session at the beginning
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                $_SESSION['user'] = $row['username'];
                header("Location: home.php"); // Redirect to home page
                exit();
            } else {
                $message = "Invalid password";
            }
        } else {
            $message = "User not found";
        }
        $stmt->close();
    } else {
        $message = "Please fill in all fields.";
    }
}
$conn->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h2>Login</h2>
        <form id="login-form" method="POST" action="">
            <input type="email" name="email" id="login-email" placeholder="Email" required>
            <input type="password" name="password" id="login-password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php" style="text-decoration: none; color: inherit;">Signup</a></p>
        <p id="login-message"><?php echo $message; ?></p>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
