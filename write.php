<?php
$conn = mysqli_connect("localhost", "root", "guddlf28");
mysqli_select_db($conn, 'opentutorials');
$result = mysqli_query($conn, 'SELECT*FROM topic');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
</head>
<body id="target">
    <header>
        <h1><a href="http://localhost:8080/index.php"> OH MY GIRL's PROFILE</a></h1>
    </header>
    <nav>
        <ol>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
        }
        ?>
        </ol>
    </nav>
    
    
    <article>
        <form action="process.php" method="post">
            <p>
               Title : <input type="text" name = "title">
            </p>
            <p>
                Sender : <input type = "text" name = "author">
            </p>
            <p>
                Description : <textarea name = "description"></textarea>
            </p>
            <input type="submit" name = "name">
        </form>
    </article>
    <div id="control">
    <input type="button" value="White" id="white_btn"/>
    <input type="button" value="Black" id="black_btn"/>
    <a href="http://localhost/write.php">write</a>
    </div>
    <script src="http://localhost:8080/script.js"></script>
</body>
</html>