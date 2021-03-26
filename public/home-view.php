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

<div class="title">ROCK PAPER SCISSORS</div>

<div class="flex-container-home">

    <?php foreach ($rps->getPossiblePatterns()->getPatterns() as $pattern){ ?>

    <form method="post">
        <input type="image"
            <?php if (file_exists('images/' . strtolower($pattern->getName()) . '.png')) { ?>
                src="images/<?php echo strtolower($pattern->getName()); ?>.png"
            <?php } else { ?>
                src="images/none.png"
            <?php } ?>
               alt="submit" name= <?php echo $pattern->getName(); ?>
               class="button">
        <?php } ?>

    </form>
</div>

</body>
</html>
