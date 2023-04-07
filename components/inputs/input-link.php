<style>
    @import '/css/reset.css';
    @import '/css/colors.css';
    @import '/css/constants.css';
    @import '/css/debug.css';

    .input-link-label{
        display: inline-block;
        margin-bottom: 0.1em;
        font-size: 1.3vmax;
    }

    .input-link-group{
        display: flex;
        align-items: center;
    }

    .input-link-line-edit, .input-link-button{
        border: none;
        min-height: 25px;
        height: 2.2vmax;
    }

    .input-link-line-edit{
        border-top-left-radius: var(--border--radius-h3);
        border-bottom-left-radius: var(--border--radius-h3);
        padding-left: 0.4em;
        font-size: 1.1vmax;
        width: 88%;
        background-color: var(--color--h1-second);
        color: var(--color--h1-third);
    }
        .input-link-line-edit::placeholder { color: var(--color--h1-first); }
        .input-link-line-edit:focus { outline: none; }
        .input-link-line-edit::selection { background-color: var(--color--h1-first); color: var(--color--h2); }

    .input-link-button{
        border-top-right-radius: var(--border--radius-h3);
        border-bottom-right-radius: var(--border--radius-h3);
        cursor: pointer;
        font-family: Roboto-Black, sans-serif;
        font-size: 1.1vmax;
        width: 12%;
        background-color: var(--color--h2);
        color: var(--color--h3);
    }
    .input-link-button:hover{
        background-color: var(--color--h3);
        color: var(--color--h2);
    }
</style>


<?php
if (!isset($inputLinkLabel)) { $inputLinkLabel = "URL du site Web :"; }
if (!isset($inputLinkPlaceholder)) { $inputLinkPlaceholder = "http(s)://.."; }
if (!isset($inputLinkButton)) { $inputLinkButton = "Go !"; }
if (!isset($inputLinkType)) { $inputLinkType = "url"; }
?>

<label class="input-link-label" for="input-link-line-edit"><?php echo $inputLinkLabel ?></label>
<div class="input-link-group">
    <input type="text" id="input-link-line-edit" class="input-link-line-edit" placeholder=<?php echo $inputLinkPlaceholder ?>>
    <input type="file" id="fileInput" style="display:none">
    <?php if ($inputLinkType == "file") { echo '<button id="browseFileButton">Test</button>'; } ?>
    <button class="input-link-button" onclick="window.location.href='/responsive.html'"><?php echo $inputLinkButton ?></button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('browseFileButton')) {
            document.getElementById('browseFileButton').addEventListener('click', function () {
                document.getElementById('fileInput').click();
            });

            document.getElementById('fileInput').addEventListener('change', function () {
                document.getElementById('input-link-line-edit').value = this.value;
            });
        }
    });
</script>
