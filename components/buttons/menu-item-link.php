<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 35vmax;
        height: 6.5vmax;
        border: 3px solid var(--color--h2);
        border-radius: var(--border--radius-big);
    }

    .container:hover {
        background-color: var(--color--h2);
        cursor: pointer;
    }

    img {
        width: 80%;
        height: 80%;
    }

</style>

<div class="container">
    <?php
    if (!isset($svgName)) {
        $svgName = '';
    }
    ?>

    <img src="assets/svg/menuItems/<?php echo $svgName; ?>.svg" alt="<?php echo $svgName; ?> Icon">
</div>

<script>
    /* Insert script of components */
</script>
