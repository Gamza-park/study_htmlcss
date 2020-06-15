<?php
    require_once('conn.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body id='body'>
        <header>
            <h1><a href="http://localhost:8080/practice1/index.php">Park's HomePage</a></h1>
        </header>
        <nav>
        
            <ol>
                <li>ol nav1</li>
                <li>ol nav2</li>
                <li>ol nav3</li>
                <?php
                    $sql = "SELECT * FROM 'topic'";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<li><a href = "www.localhost:8080/practice1/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
                    }
                ?>
            </ol>
        </nav>
        <div id="content">
            <article>
            <form class="" action="process.php" method="post">
                <p>
                    <label>Title</label>
                    <input id="title" type="text" name="title">
                </p>  
                <p>
                    <labek for="author">author : </label>
                    <input type="text" name="author" value="">
                </p>
                <p>
                    <label for="description"> Description</label>
                    <textarea name="name" rows="8" cols="40"></textarea>          
                </p?>
                <p>
                    <input type="submit" value="send">
                </p>
            </form>

            
            </article>
            
            <input type="button" name="name" value="White" onclick="document.getElementById('body').className='white'">
            <input type="button" name="name" value="Black" onclick="document.getElementById('body').className='black'">
            <a href="http://localhost:8080/practice1/write.php">Write</a>
        </div>
    </body>
</html>


