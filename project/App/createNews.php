<?php


$page = "createNew";

include_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log("method post");
    $title = $_REQUEST['title'];
    $body = $_REQUEST['body'];

    if (isset($title)) {

        error_log("isset title");
        $conn = mysqli_connect($host, $user, $password, $db);
        if (!$conn) {
            error_log("no connection");
            echo("ERROR: Could not connect. " . mysqli_connect_error());
        } else {

            $query = "INSERT INTO news (title, body) VALUES ('" . $title . "', '" . $body . "')";
            $result = mysqli_query($conn, $query);
            error_log("connection ok");

            header('Location: index.php');
        }


    } else {
        echo "empty";
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $news_id = $_REQUEST['id'];
    error_log("request delete");
    if (isset($news_id)) {
        error_log("isset id");

        $conn = mysqli_connect($host, $user, $password, $db);
        if (!$conn) {
            error_log("connection bad");
            echo("ERROR: Could not connect. " . mysqli_connect_error());
        } else {
            error_log("connection ok");
            $sql = "DELETE from news where news_id=" . $news_id;
            error_log($sql);
            $query = "DELETE from news where news_id=" . $news_id;
            $result = mysqli_query($conn, $query);
            $errtext = mysqli_error($conn);

            error_log("error text = " . $errtext);


            header('Location: index.php');
        }


    } else {
        echo "empty";
    }
}
?>
