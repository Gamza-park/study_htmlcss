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
            echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
        }
        ?>
        </ol>
    </nav>
    
    
    <article>
        <?php
        if(empty($_GET['id'])===false){
            $sql = 'SELECT*FROM topic WHERE id='.$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
            echo '<p>'.htmlspecialchars($row['name']).'</p>';
            echo strip_tags($row['description'],'<a><h1><h2><h3><h4><h5><ul><ol><li>');
        }
        ?>
    </article>
    <div id="control">
    <input type="button" value="White" id="white_btn"/>
    <input type="button" value="Black" id="black_btn"/>
    <a href="http://localhost:8080/write.php">write</a>
    </div>
    <script src="http://localhost:8080/script.js"></script>
</body>
</html>