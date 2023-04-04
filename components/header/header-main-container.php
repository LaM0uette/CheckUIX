<style>
    .header.main-container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        margin-top: 1em;
        width: 100%;
    }

    .header.title-main-container {
        text-align: center;
        width: 20vmax;
    }

    .header.button-main-container {
        position: absolute;
        top: 50%;
        right: 3vmax;
        transform: translateY(-50%);
    }

    .header.logo {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
        max-height: 100%;
    }
</style>

<header>
    <div class="header main-container">
        <div class="header title-main-container">
            <img class="header logo" src="/assets/svg/logo/LogoLight.svg" alt="Logo CheckUIX Light">
        </div>

        <div class="header button-main-container">
            <?php include 'components/buttons/toggle-dark-mode.php'; ?>
        </div>
    </div>
</header>
