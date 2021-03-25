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


<?php foreach ($rps->getPossiblePatterns()->getPatterns() as $pattern){ ?>

<form method="post">
    <input type="image"
        <?php
        if (file_exists('views/images/' . strtolower($pattern->getName()) . '.png')) { ?>
            src="views/images/<?php echo strtolower($pattern->getName()); ?>.png"
            <?php
        } else { ?>
            src="views/images/none.png"
            <?php
        }
        ?> alt="submit" name= <?php echo $pattern->getName(); ?>
           class="button">

    <?php
    }
    ?>


</body>
</html>

