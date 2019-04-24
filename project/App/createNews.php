<?php


$page = "createNew";
include_once "connection.php";
if (isset($_POST['title']) && isset($_POST['body'])) {
    $conn = mysqli_connect($host, $user, $password, $db) or die("Ошибка " . mysqli_error($conn));
    $query = "INSERT INTO article (title, body) VALUES ('" . $_POST['title'] . "', '" . $_POST['body'] . "')";
    $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
    echo  "Oka!";

    header('Location: ../index.php');
    exit();

}
?>
<html>
<body>

Welcome,  <?php echo $_POST["title"]; ?> added <br>

</body>
</html>
