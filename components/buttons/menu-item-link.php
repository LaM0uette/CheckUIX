<style>
    /* Container */
    .menu-item-link-container {
        display: flex;
        justify-content: left;
        align-items: center;
        width: 35vmax;
        height: 6.5vmax;
        border: var(--border--h1) solid var(--color--h2);
        border-radius: var(--border--radius-h1);
    }

    .menu-item-link-container:hover  {
        background-color: var(--color--h3);
        border: var(--border--h1) solid var(--color--h3);
        cursor: pointer;
    }

    .menu-item-link-img {
        margin-left: 0.6vw;
        margin-right: 0.6vw;
        height: 80%;
    }

    /* Container vertical line */
    .menu-item-link-vertical-line{
        width: var(--border--h1);
        border-radius: 0.2vmax;
        margin-right: 0.6vw;
        height: 80%;
        background-color: var(--color--h2);
    }

    /* Title + description */
    .menu-item-link-title {
        font-size: var(--font-size--h2);
        color: var(--color--h3);
    }

    .menu-item-link-description {
        font-size: var(--font-size--p);
        color: var(--color--h2);
    }
</style>

<div class="menu-item-link-container">
    <?php if (!isset($svgName)) { $svgName = ''; } ?>
    <img class="menu-item-link-img" src="assets/svg/menuItems/<?php echo $svgName; ?>.svg" alt="<?php echo $svgName; ?> Icon">

    <div class="menu-item-link-vertical-line"></div>

    <div>
        <h2 class="menu-item-link-title"><?php echo ucfirst($svgName); ?></h2>
        <p class="menu-item-link-description">Outil permettant de tester le responsive de son site à l'aide de pré-réglages prêts à l'emploi.</p>
    </div>
</div>

<script>
    /* Insert script of components */
</script>
