<?php

class Profile

{
    public $username;
    public $email;
    public $password;
    public $age;

    function get_username()
    {
        return $this->username;
    }
    function get_email()
    {
        return $this->email;
    }
    function get_age()
    {
        return $this->age;
    }


    public function register()
    {
        if (isset($_POST["user_name"])) {
            $this->username = $_POST["user_name"];
            $this->email = $_POST["email"];
            $this->password = $_POST["password"];
            $this->age = $_POST["age"];
            if ($_FILES["pro_img"]["name"] != "") {
                $path = "images/" . $_FILES["pro_img"]["name"];
                move_uploaded_file($_FILES["pro_img"]["tmp_name"], $path);
            }
        } else {
            header('location: sign_up.php');
        }
    }
}

$pro_obj = new Profile();
$pro_obj->register();

?>
<link rel="stylesheet" href="profile.css">
<div class="container">
    <?php if (file_exists("images/" . $_FILES['pro_img']['name'])) { ?>
        <img height="300" src="<?= "images/" . $_FILES['pro_img']['name'] ?>" alt="your profile">
    <?php } ?>
    <p>User name: <?= $pro_obj->get_username(); ?></p>
    <p>Email: <?= $pro_obj->get_email(); ?></p>
    <p>Age: <?= $pro_obj->get_age(); ?></p>
    <a href="delete.php?file_name=<?= $_FILES['pro_img']['name'] ?>">Delete File</a>
</div>