<?php
global $eva_v1_locale;
$user_locale = get_user_locale();
$using_locale = $eva_v1_locale[$user_locale];
?>

<div class="category-wrapper">
    <h3><?php echo $using_locale['category']['Categories']; ?></h3>

    <ul>
        <?php
        $args = array(
            'title_li' => __(''),
        );

        wp_list_categories($args);
        ?>
    </ul>
</div>