<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/responsiveMenu.html.css">
    <script defer src="js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="Docs/Logo/Logo.svg">
    <title>CheckUIX</title>
</head>
<body>

<!--Main header-->
<?php include 'components/header/header-main-container.php'; ?>

<div class="url-container">
    <div class="input-link input-link-url">
        <label for="input-url-link-line-edit" class="input-link-label">URL du site Web :</label><br>
        <div class="input-link-group">
            <input type="text" id="input-url-link-line-edit" class="input-link-line-edit" placeholder="http(s)://...">
            <button type="button" class="input-link-button" onclick="window.location.href='responsive.html'">Go !</button>
        </div>
    </div>

    <h2 class="h2-or">Ou</h2>

    <div class="input-link input-link-file">
        <label for="input-file-link-line-edit" class="input-link-label">Fichier .html / .php :</label><br>
        <div class="input-link-group">
            <input type="text" id="input-file-link-line-edit" class="input-link-line-edit" placeholder="C:\...">
            <button class="input-link-button" onclick="window.location.href='responsive.html'">Go !</button>
        </div>
    </div>
</div>

<footer></footer>

</body>
</html>