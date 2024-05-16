<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
</head>
<body>
    <h1>Image Gallery</h1>

    <div class="gallery">
        <?php
        $dir = 'images/'; // Directory where images are stored
        $files = scandir($dir);
        foreach ($files as $file) {
            if (in_array(pathinfo($file, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
                echo '<img src="' . $dir . $file . '" alt="' . $file . '" style="max-width: 200px; margin: 10px;">';
            }
        }
        ?>
    </div>
</body>
</html>
