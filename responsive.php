<?php
if (isset($_POST['input-link-line-edit']) && isset($_POST['input-link-type'])) {
    $inputLinkUrl = $_POST['input-link-line-edit'];
    $inputLinkType = $_POST['input-link-type'];

    echo "La valeur du champ 1 est : " . $inputLinkUrl . "<br>";
    echo "La valeur du champ 2 est : " . $inputLinkType;
}else{
    $inputLinkUrl = "https://doriandevillele.fr";
    $inputLinkType = "url";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/responsive.html.css">
    <script defer src="js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="docs/Logo/Logo.svg">
    <title>CheckUIX</title>
</head>
<body>
<button>Test</button>
</body>
</html>