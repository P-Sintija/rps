<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if (file_exists('views/images/' . strtolower($chosenPattern) . '.png')) { ?>

    <img src="views/images/<?php echo strtolower($chosenPattern); ?>.png" alt="?">
<?php } else { ?>
    <img src="views/images/none.png" alt="?">
<?php } ?>

<span> VS </span>

<?php
if (file_exists('views/images/' . strtolower($opponent->getName()) . '.png')) { ?>

    <img src="views/images/<?php echo strtolower($opponent->getName()); ?>.png" alt="?">
<?php } else { ?>
    <img src="views/images/none.png" alt="?">
<?php }


echo $gameStatus;
?>

<form method="GET">
    <input type="submit" value="play again">
</form>


</body>
</html>
