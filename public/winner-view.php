<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="styles.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>

<div class="flex-container-winner">

    <?php if (file_exists('images/' . strtolower($chosenPattern) . '.png')) { ?>
        <img src="images/<?php echo strtolower($chosenPattern); ?>.png" alt="?">
    <?php } else { ?>
        <img src="images/none.png" alt="?">
    <?php } ?>

    <div class="vs"> VS</div>

    <?php if (file_exists('images/' . strtolower($opponent->getName()) . '.png')) { ?>
        <img src="images/<?php echo strtolower($opponent->getName()); ?>.png" alt="?">
    <?php } else { ?>
        <img src="images/none.png" alt="?">
    <?php } ?>

</div>


<div class="status-container">

    <div class="status-text">
        <?php echo $gameStatus; ?>
    </div>


    <form method="get">
        <input type="submit" class="play-again-button" value="play again">
    </form>

</div>

</body>
</html>

