<?php include"asset.php";
if (!Asset::is_loggedIn()) {
    header('location: index.php');
}


?>
<h1>Welcome to home page</h1>

<a href="logout.php">Logout</a>


