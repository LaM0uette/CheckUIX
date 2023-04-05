<style>
    .container {
        display: flex;
        justify-content: left;
        align-items: center;
        width: 35vmax;
        height: 6.5vmax;
        border: var(--border--h1) solid var(--color--h2);
        border-radius: var(--border--radius-h1);
    }

    .container:hover  {
        background-color: var(--color--h3);
        border: var(--border--h1) solid var(--color--h3);
        cursor: pointer;
    }

    img {
        margin-left: 0.6vw;
        margin-right: 0.6vw;
        height: 80%;
    }

    /* Container vertical line */
    .container-vertical-line{
        width: var(--border--h1);
        border-radius: 0.2vmax;
        margin-right: 0.6vw;
        height: 80%;
        background-color: var(--color--h2);
    }
</style>

<div class="container">
    <?php if (!isset($svgName)) { $svgName = ''; } ?>
    <img src="assets/svg/menuItems/<?php echo $svgName; ?>.svg" alt="<?php echo $svgName; ?> Icon">

    <div class="container-vertical-line"></div>
</div>

<script>
    /* Insert script of components */
</script>
