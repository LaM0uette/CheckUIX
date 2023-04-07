<?php
if (isset($_POST['input-link-line-edit']) && isset($_POST['input-link-type'])) {
    $inputLinkUrl = $_POST['input-link-line-edit'];
    $inputLinkType = $_POST['input-link-type'];
}else{
    $inputLinkUrl = "https://doriandevillele.fr";
    $inputLinkType = "url";
}

if (isset($_POST['input-link-line-edit']) && $_POST['input-link-line-edit'] == "") {
    $inputLinkUrl = "https://doriandevillele.fr"; $inputLinkType = "url"; }

$inputLinkFile = isset($_POST['fileDataUrl']) ? $_POST['fileDataUrl'] : '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/responsive.php.css">
    <script defer src="js/script.js"></script>
    <link rel="icon" type="image/svg+xml" href="docs/Logo/Logo.svg">
    <title>CheckUIX</title>

    <script>
        function loadSite() {
            const linkUrl = "<?php echo $inputLinkUrl ?>";
            const linkType = "<?php echo $inputLinkType ?>";
            const fileDataUrl = sessionStorage.getItem("fileDataUrl") || "";
            const iframe = document.getElementById("siteFrame");

            if (linkType === "url") {
                iframe.src = linkUrl;
            } else if (linkType === "file" && fileDataUrl !== "") {
                iframe.src = fileDataUrl;
            } else {
                alert("Veuillez entrer une URL ou sélectionner un fichier local.");
            }
        }

        window.addEventListener('load', function() { loadSite(); });
    </script>
</head>

<body>
<iframe id="siteFrame" title="Site à tester"></iframe>
</body>
</html>