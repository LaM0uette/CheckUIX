<style>
    /* Container */
    .menu-item-link-container{
        display: flex;
        justify-content: left;
        align-items: center;
        width: 35vmax;
        height: 6.5vmax;
        border: var(--border--h1) solid var(--color--h2);
        border-radius: var(--border--radius-h1);
    }

    .menu-item-link-container:hover{
        background-color: var(--color--h3);
        border: var(--border--h1) solid var(--color--h3);
        cursor: pointer;
    }

    .menu-item-link-img{
        margin-left: 0.8vmax;
        margin-right: 0.8vmax;
        height: 75%;
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
    .menu-item-link-title-container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        width: 100%;
        height: 95%;
    }

    .menu-item-link-title-container>p{
        flex-grow: 1;
    }

    .menu-item-link-title{
        font-size: var(--font-size--h2);
        color: var(--color--h3);
    }

    .menu-item-link-container:hover .menu-item-link-title{
        color: var(--color--h2);
    }

    .menu-item-link-description {
        font-size: var(--font-size--p);
        color: var(--color--h2);
    }

    @media screen and (max-width: 1500px) {
        .menu-item-link-container{
            height: 10vmax;
        }

        .menu-item-link-title {
            font-size: calc(var(--font-size--h2) * 1.3);
        }

        .menu-item-link-description {
            font-size: calc(var(--font-size--p) * 1.3);
        }
    }
    @media screen and (max-width: 1000px) {
        .menu-item-link-container{
            height: 14vmax;
        }

        .menu-item-link-title {
            font-size: calc(var(--font-size--h2) * 1.3);
        }

        .menu-item-link-description {
            font-size: calc(var(--font-size--p) * 1.6);
        }
    }
</style>

<div class="menu-item-link-container">
    <?php if (!isset($svgName)) { $svgName = ''; } ?>
    <img class="menu-item-link-img" src="assets/svg/menuItems/<?php echo $svgName; ?>.svg" alt="<?php echo $svgName; ?> Icon">

    <div class="menu-item-link-vertical-line"></div>

    <div class="menu-item-link-title-container">
        <h2 class="menu-item-link-title"><?php echo ucfirst($svgName); ?></h2>
        <p class="menu-item-link-description">Outil permettant de tester le responsive de son site à l'aide de pré-réglages prêts à l'emploi.</p>
    </div>
</div>

<script>
    /* Insert script of components */
</script>
