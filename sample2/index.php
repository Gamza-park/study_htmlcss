<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style>
        header{
            border-bottom: solid violet 1px;
            padding: 30px;}
        nav {
            border-right: solid violet 1px;
            width: 300px;
            height: 600px;
            float: left;
        }
    </style>

</head>
<body>
    <header>
        <h1><a href="http://localhost:8080/index.html"> OH MY GIRL's PROFILE</a></h1>
    </header>
    <nav>
        <ol>
            <?php
            echo file_get_contents("list.txt")
            ?>
        </ol>
    </nav>

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ_9Ks4v91spJ8eie1hKskxjrg2AIPchQxaYTTrsj7j5tzK5Mpo&usqp=CAU" width="700" height="700"/>
</body>
</html>