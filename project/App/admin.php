<html>
<head>
    <title>Add a new article</title>
    <header>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </header>

</head>
<body>
<div id="container">
    <h3 style="margin-left:25px">Add a new article</h3>
    <form action="createNews.php" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp"
                   placeholder="Enter title">
            <small id="titleHelp" class="form-text text-muted">Short description of a story.</small>
        </div>
        <div class="form-group">
            <label for="body">Article text</label>
            <textarea class="form-control" name="body" id="body" rows="5"></textarea>
        </div>
        <button type="submit" style="margin-left:25px" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>


