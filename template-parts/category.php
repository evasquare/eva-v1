<?php
$user_locale = get_user_locale();
$categories = get_categories();
?>

<div class="category-wrapper">
    <h3>Categories</h3>

    <ul>
        <?php foreach ($categories as $category): ?>
            <li>
                <a href="<?php echo get_category_link($category->term_id) ?>">
                    <?php echo $category->cat_name ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>
</div>