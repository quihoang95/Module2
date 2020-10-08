<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="content">
        <?php for ($i = 0; $i < 11; $i++) : ?>
            <div>
                <?php for ($j = 0; $j < 11; $j++) : ?>
                    <p><span><?= $i ?></span> * <span><?= $j ?></span> = <?= $i * $j ?></p>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </div>
</body>
</html>