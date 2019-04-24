
<html>
<header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</header>
<body>
<h1 >News</h1>
<div>
    <ul class="list-group">

        <?php
        require_once 'connection.php'; // подключаем скрипт
        $link = mysqli_connect($host, $user, $pass, $db_name);
        or die("Ошибка " . mysqli_error($link));

        $query ="SELECT * FROM News";

        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if($result)
        {
            $rows = mysqli_num_rows($result); // количество полученных строк


            for ($i = 0 ; $i < $rows ; ++$i)
            {
             echo " <h1> $rows['headline']</h1>";
            echo "<p> $rows['content']</p>";

            // очищаем результат
            mysqli_free_result($result);
        }

        mysqli_close($link);
        ?>
        <li class="list-group-item">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet...</p>
        </li>

        <li class="list-group-item">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet...</p>
        </li>
    </ul>
</div>
</body>
</html?
