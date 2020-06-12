<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$result = mysqli_query($conn, 'SELECT*FROM topic');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
    <link href="http://localhost:8080/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
    <div class="container">
        <header class="jumbotron text-center">
            <h1><a href="http://localhost:8080/index.php"> OH MY GIRL's PROFILE</a></h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ_9Ks4v91spJ8eie1hKskxjrg2AIPchQxaYTTrsj7j5tzK5Mpo&usqp=CAU" class="img-circle" id="logo"/>
        </header>
        <div class="row">
            <nav class="col-md-3">
                <ol class="nav nav-pills nav-stacked">
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
                }
                ?>
                </ol>
            </nav>
            
            <div class="col-md-9">
                <div id="control">
                    <div class="btn-group" role="group" aria-laber="...">
                        <input type="button" value="White" id="white_btn" class="btn btn-default"/>
                        <input type="button" value="Black" id="black_btn" class="btn btn-default"/>
                    </div>
                <a href="http://localhost:8080/write.php" class="btn btn-success">write</a>
                </div>
                <hr>
                <article>
                    <form action="process.php" method="post">
                        <div class="form-group">
                            <label for="form-title">Title</label>
                            <input type="text" class="form-control" name="title" id="form-title" placeholder="Enter Title">

                        </div>
                        <div class="form-group">
                            <label for="form-author">author</label>
                            <input type="text" class="form-control" name="author" id="form-author" placeholder="Enter author">

                        </div>
                        <div class="form-group">
                            <label for="form-author">description</label>
                            <textarea class="form-control" rows="10" name = "description" id="form-author" placeholder="Enter description"></textarea>
                        </div>
                        <input type="submit" name = "name" class="btn btn-default">
                    </form>
                </article>
            </div>

        </div>
    </div>
    <script src="http://localhost:8080/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://localhost:8080/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>