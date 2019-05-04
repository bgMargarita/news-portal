<?php
include_once "connection.php";

$conn = mysqli_connect($host, $user, $password, $db);
if (mysqli_connect_errno()) {
    echo "<h5>Failed to connect to MySQL: " . mysqli_connect_error() . "</h5>";
}
$mode = ($_GET["mode"]);

?>
<html>
<header>
    <link rel="stylesheet"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js">
    </script>
</header>
<body>

<span>

        <h1>News</h1>
<?php if ($mode === 'admin') { ?>
    <ul class="nav nav-pills">
  <li class="nav-item">
<a href="admin.php" style='margin-left:30px' class="nav-link active">
          <span class="glyphicon glyphicon-plus"></span> Add more
        </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">Show news</a>
  </li>
</ul>
<?php } else { ?>
    <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="index.php?mode=admin">Administration</a>
  </li>
</ul>

<?php } ?>
</span>
<div>
    <ul class="list-group">
        <?php
        $query = "SELECT * FROM news";

        $result = mysqli_query($conn, $query) or die("Can't connect or table does not exist " . mysqli_error($conn));

        if ($result) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li class='list-group-item' id='item_" . $row['news_id'] . "'>";

                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p>" . $row['body'] . "</p>";
                if ($mode === 'admin') {

                   echo "<p><button   type='button'  name='" . $row['news_id'] . "'  class='btn btn-secondary btn-sm pull-right'>Remove</button> </p>";                                                                                                 ss='btn btn-secondary btn-sm pull-right'>Remove</button> </p>";
                }


                echo "</li>";

            }
            mysqli_free_result($result);
        }

        mysqli_close($conn);
        ?>


    </ul>

    <script>
        $(document).ready(function () {
            $(":button").click(function () {

                var id = $(this).attr('name');


                $.ajax({
                    url: 'createNews.php?id=' + id,
                    type: "DELETE",
                    success: function (result) {
                        $("#item_" + id).remove();
                    },
                    error: function (error) {
                        alert("failed");
                    }
                })
            });
            // Handler for .ready() called.
        });
    </script>
</div>
</body>
</html?
