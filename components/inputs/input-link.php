<style>
    @import '/css/reset.css';
    @import '/css/colors.css';
    @import '/css/constants.css';
    @import '/css/debug.css';

    .input-link-label{
        display: inline-block;
        margin-bottom: 0.1em;
        font-size: 1.4vmax;
    }

    .input-link-group{
        display: flex;
        align-items: center;
    }

    .input-link-input-container{
        position: relative;
        display: flex;
        align-items: center;
        width: 88%;
    }

    .input-link-line-edit, .input-link-button, .input-link-file-button{
        border: none;
        min-height: 30px;
        height: 2.4vmax;
    }

    .input-link-line-edit{
        border-top-left-radius: var(--border--radius-h3);
        border-bottom-left-radius: var(--border--radius-h3);
        padding-left: 0.4em;
        font-size: 1.3vmax;
        width: 100%;
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
        font-size: 1.3vmax;
        width: 12%;
        background-color: var(--color--h3);
        color: var(--color--h2);
    }
    .input-link-button:hover{
        background-color: var(--color--h3);
        color: var(--color--h1-third);
    }

    .input-link-file-button{
        cursor: pointer;
        background-color: transparent;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 1;
    }
        .input-link-file-button img {
            margin: auto;
            width: 1.2vmax;
            height: 1.2vmax;
        }
        .input-link-file-button:hover img {
            width: 1.4vmax;
            height: 1.4vmax;
        }
</style>


<?php
if (!isset($inputLinkLabel)) { $inputLinkLabel = "URL du site Web :"; }
if (!isset($inputLinkPlaceholder)) { $inputLinkPlaceholder = "http(s)://.."; }
if (!isset($inputLinkButton)) { $inputLinkButton = "Go !"; }
if (!isset($inputLinkType)) { $inputLinkType = "url"; }
?>

<label class="input-link-label" for="input-link-line-edit-<?php echo $inputLinkType ?>"><?php echo $inputLinkLabel ?></label>
<div class="input-link-group">
    <div class="input-link-input-container">
        <input type="text" id="input-link-line-edit-<?php echo $inputLinkType ?>" class="input-link-line-edit" placeholder=<?php echo $inputLinkPlaceholder ?>>
        <?php if ($inputLinkType == "file") {
            echo '<button class="input-link-file-button" id="inputLinkFileButton">
            <img src="/assets/svg/utils/file.svg" alt="Open file">
        </button>';
        } ?>
    </div>
    <input type="file" id="input-link-file" style="display:none">
    <button class="input-link-button" onclick="window.location.href='/responsive.html'"><?php echo $inputLinkButton ?></button>
</div>

<?php
if ($inputLinkType == "file") {
    echo '<script>
            let inputLinkType = "' . addslashes($inputLinkType) . '";

            document.getElementById("inputLinkFileButton").addEventListener("click", function () {
                document.getElementById("input-link-file").click();
            });

            document.getElementById("input-link-file").addEventListener("change", function () {
                document.getElementById("input-link-line-edit-" + inputLinkType).value = this.value;
            });
        </script>';
}
?>
