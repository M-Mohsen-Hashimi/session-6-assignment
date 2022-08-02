<?php include"asset.php";
if (Asset::is_loggedIn()) {
    header('index: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up Page</h2>
        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="user_name" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="number" name="age" placeholder="Age">
            <input type="file" name="pro_img" required>
            <button class="btn">Register</button>
            <p>Already have account <a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>