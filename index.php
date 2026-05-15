<?php

$apiUrl = "https://api.jikan.moe/v4/top/anime";


$response = file_get_contents($apiUrl);


$data = json_decode($response, true);
$animeList = $data['data']; 
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Favori Animelerim</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        .anime-kart { width: 200px; border: 1px solid #ccc; padding: 10px; border-radius: 10px; text-align: center; background: white; }
        .anime-kart img { width: 100%; height: 280px; object-fit: cover; border-radius: 5px; }
        h3 { font-size: 16px; margin: 10px 0; height: 40px; overflow: hidden; }
        .puan { color: #27ae60; font-weight: bold; }
    </style>
</head>
<body>

    <h1 style="text-align:center;">Jikan API ile Popüler Animeler</h1>
    
    <div class="container">
        <?php foreach ($animeList as $anime): ?>
            <div class="anime-kart">
                <img src="<?php echo $anime['images']['jpg']['image_url']; ?>" alt="Kapak">
                <h3><?php echo $anime['title']; ?></h3>
                <p>Puan: <span class="puan"><?php echo $anime['score']; ?></span></p>
                <a href="<?php echo $anime['url']; ?>" target="_blank">Detaylar</a>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>