<?php
$events=file_get_contents('events.json');
$events=json_decode($source);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="header">Fetch</h1>
    <!-- <button onclick="getEvent()">載入活動</button> -->
    <div class="title"></div>
    <h4></h4>
    <ul>
        <?php foreach($events->entry as $event): ?>
        <li>
            <div><?$event->title;?></div>
            <div><?$event->author->name;?></div>
        </li>
        <?php endforeach;?>
    </ul>

</body>

</html>