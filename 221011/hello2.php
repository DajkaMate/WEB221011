<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Link</title>
</head>
<body>
    
<?php
    echo "<h2>Minecraft</h2>";
    echo "<p>Ez egy szép Minecraftos oldal</p>";

?>
<?php
    $link1 = "http://Minecraft.net";
    $link2 = "http://ea.com/games/the-sims";
    echo '<a href="'.$link2.'" target="_blank">'.$link1."<a/>";
?>













</body>
</html>