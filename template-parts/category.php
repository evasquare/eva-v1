<?php
$user_locale = get_user_locale();
$categories = get_categories();
?>

<div class="category-wrapper">

    <?php if ($user_locale == "en_US"): ?>
        <h3>Categories</h3>
    <?php endif; ?>
    <?php if ($user_locale == "ko_KR"): ?>
        <h3>카테고리</h3>
    <?php endif; ?>

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