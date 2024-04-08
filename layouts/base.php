<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">
    <title><?= $page_title; ?></title>
    <link href="./public/CSS/output.css" rel="stylesheet">
</head>

<body>
    <?php require 'layouts/menu.php'; ?>
    <?= $page_content; ?>
    <script src="./public/Javascript/ScriptMenu.js"></script>
</body>

</html>