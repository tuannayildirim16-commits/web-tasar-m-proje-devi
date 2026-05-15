<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div style='max-width:600px; margin:50px auto; font-family:sans-serif; border:2px solid #0d6efd; padding:20px; border-radius:10px;'>";
    echo "<h2 style='color:#0d6efd;'>Form Başarıyla Gönderildi</h2><hr>";
    foreach ($_POST as $key => $value) {
        $displayValue = is_array($value) ? implode(", ", $value) : htmlspecialchars($value);
        echo "<p><strong>" . ucfirst($key) . ":</strong> " . $displayValue . "</p>";
    }
    echo "<br><a href='iletisim.html' style='background:#0d6efd; color:white; padding:10px 20px; text-decoration:none; border-radius:5px;'>Geri Dön</a>";
    echo "</div>";
}
?>