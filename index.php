<?php
    require_once 'config.php';

$rq = "SELECT * FROM `news`";
$result = $connect->query($rq);
echo $connect->error;//si query --> faire un echo qui affiche une erreure

$allNews = $result->fetch_all(MYSQLI_ASSOC);
myPrint_r($allNews);
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Les News</title>
            <link rel="stylesheet" href="">
            <style>
                body {
                    font-family: sans-serif;
                }
                details {
                    padding:.5rem;
                }
            </style>
        </head>
        <body>
            <h1>Hello World</h1>
            <?php foreach($allNews as $key => $el):?>
            <details data-id="<?php echo $news['id'];?>" <?php echo ($key == 0) ? 'open' : '';?>>
                <summary><?php echo $el['titre'];?></summary>
                <p><?php echo $el['contenu']; ?></p>
            </details>
            <?php endforeach?>

            <h2>les titres des news</h2>
            <?php foreach($allNews as $key => $news):?>
            <li data-key="<?php echo $key;?>">
                <a href="details-news.php?id_news=<?php echo $news['id'];?>">   
                <?php echo $news['titre'];?></a> 
            </li>
            <?php endforeach?>

        </body>
    </html>