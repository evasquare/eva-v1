<div class="category-wrapper">
    <h3>Categories</h3>

    <ul>
        <?php
        $args = array(
            'title_li' => __(''),
        );

        wp_list_categories($args);
        ?>
    </ul>
</div>