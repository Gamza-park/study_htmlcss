<?php
    require_once('conn.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="styesheet" href="style.css" media="screen" title="no title" charset="utf-8">
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

                <?php
                if(empty($_GET['id'])){
                    echo "welcom";
                }
                else{
                    $id = mysqli_real_escape_string($conn, $_GET['id']);
                    $sql = "SELECT topic.id,topic.title,topic.description,user.name,topic.created FROM toopic LEFT JOIN user ON topic.author = user.id- WHERE topic.id=".$id;
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <h2><?= htmlspecialchars($row['title'])?></h2>
                    <div><?= htmlspecialchars($row['created'])?>|<?= htmlspecialchars($row['name'])?></div>
                    <div><?= htmlspecialchars($row['description'])?></div>
                }
                <?php
                }
                ?>            
                
            </article>
            
            <input type="button" name="name" value="White" onclick="document.getElementById('body').className='white'">
            <input type="button" name="name" value="Black" onclick="document.getElementById('body').className='black'">
            <a href="http://localhost:8080/practice1/write.php">Write</a>
        </div>
    </body>
</html>


