<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?></title>

    <link rel="stylesheet" href="<?php echo CSS.'header.css'; ?>">

    <script src="https://cdn.tailwindcss.com"></script>

    <?php foreach ($css as $key) :?>
        <?php if ($key != "") :?>
            <link rel="stylesheet" href="<?php echo CSS.$key; ?>">
        <?php endif ?>
    <?php endforeach ?>
</head>
<body>