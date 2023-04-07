<?php
if (isset($_POST['input-link-line-edit']) && isset($_POST['input-link-type'])) {
    $inputLinkUrl = $_POST['input-link-line-edit'];
    $inputLinkType = $_POST['input-link-type'];
}else{
    $inputLinkUrl = "https://doriandevillele.fr";
    $inputLinkType = "url";
}

if ($_POST['input-link-line-edit'] == "") { $inputLinkUrl = "https://doriandevillele.fr"; $inputLinkType = "url"; }

echo "La valeur du champ 1 est : " . $inputLinkUrl . "<br>";
echo "La valeur du champ 2 est : " . $inputLinkType;
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

</body>

</html>