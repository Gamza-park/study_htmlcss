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
        <h1><a href="http://localhost:8080/index.php"> OH MY GIRL's PROFILE</a></h1>
    </header>
    <nav>
        <ol>
            <?php
            echo file_get_contents("txt/list.txt")
            ?>
        </ol>
    </nav>

    <article>
    <?php
            echo file_get_contents("txt/".$_GET['id'].".txt")
            ?>
    </article>
</body>
</html>