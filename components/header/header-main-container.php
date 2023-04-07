<style>
    .header.main-container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        width: 100%;
        height: 15vh;
    }

    .header.title-main-container {
        text-align: center;
        width: 20vmax;

        animation-name: slide-down;
        animation-duration: 0.3s;
        animation-delay: 0.5s;
        animation-fill-mode: forwards;
        opacity: 0;
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

<header class="header main-container">
    <div class="header title-main-container">
        <h1>
            <img class="header logo" src="/assets/svg/logo/LogoLight.svg" alt="CheckUIX">
        </h1>
    </div>

    <div class="header button-main-container">
        <?php include 'components/buttons/toggle-dark-mode.php'; ?>
    </div>
</header>
