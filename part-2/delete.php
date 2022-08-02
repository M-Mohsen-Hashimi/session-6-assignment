<?php
    if (isset($_GET['file_name'])) {
        $file_name = $_GET['file_name'];
    } else {
        header('location: sign_up.php');
    }
class Delete {
    public static function delete_image() {
        if (isset($_POST['f_name'])) {
            $f_name = $_POST['f_name'];
            $path = 'images/' . $f_name;
            $exists = file_exists($path);
            if ($exists) {
                unlink($path);
                header('location: sign_up.php?file ' . $f_name . 'deleted successfully');
            } else {
                echo "<p style='color:red;text-align:center'>File not found</p>";
            }
        }
    }
}
Delete::delete_image();
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <form method="post">
        <input type="text" required name="f_name" value="<?= $file_name ?>">
        <br>
        <button class="delete-btn" type="submit">Delete File</button>
    </form>
</div>