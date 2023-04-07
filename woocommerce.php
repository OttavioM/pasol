<?php

    get_header('top');
    get_header('logo');
?>

<main class="container__woocommerce">
    <?php woocommerce_content(); ?>
</main>

<?php get_footer('logo'); ?>