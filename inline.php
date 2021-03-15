<!DOCTYPE html>
<html lang="nl">
<head>
    <title>De Krant</title>
</head>
<body>

    <?php
    $title = "Brandweer redt kat uit boom";
    $date = "1 feb 2021";
    $contents = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, architecto placeat neque commodi omnis perferendis. Expedita, corrupti cum! Error, aperiam accusantium quia obcaecati officia repellat eius? Maxime aperiam commodi doloremque.";
    $author = "Tj Kalau"
    ?>

    <h1><?php echo $title; ?></h1>
    <p><em>Datum: <?php echo $date; ?></em></p>
    <p><em><?php echo $author; ?></em></p>
    <p><?php echo $contents; ?></p>
    
</body>
</html>