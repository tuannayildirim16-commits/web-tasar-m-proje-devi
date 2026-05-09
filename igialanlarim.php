<?php
// Sayfanın en başında durmalı
$apiUrl = "https://api.jikan.moe/v4/top/anime";
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);
$animeList = $data['data'];
?>
<!-- İlgi Alanlarım sayfasının uygun bir yerine -->
<div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
    <?php foreach ($animeList as $anime): ?>
    <div style="width: 180px; border: 1px solid #ddd; padding: 10px; border-radius: 10px; background: #fff; text-align: center;">
        <img src="<?php echo $anime['images']['jpg']['image_url']; ?>" style="width: 100%; border-radius: 5px;">
        <h4 style="font-size: 14px;"><?php echo $anime['title']; ?></h4>
        <p>Puan: <?php echo $anime['score']; ?></p>
    </div>
    <?php endforeach; ?>
</div>