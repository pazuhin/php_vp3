<?php get_header(); ?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <div class="posts-list">
                <!-- post-mini-->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="post-wrap">
                        <div class="post-thumbnail">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                        </div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date"><?php the_date(); ?></div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
                                    <?php the_title(); ?>
                                </div>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="post-content__post-control">
                                <a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                <!-- post-mini_end-->
            </div>
            <div class="pagenavi-post-wrap"><a href="#" class="pagenavi-post__prev-postlink">
                <?php echo paginate_links(); ?>
            </div>
        </div>
        <!-- sidebar-->
        <div class="sidebar">
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Теги</div>
                <div class="sidebar-item__content">
                    <?php wp_tag_cloud(); ?>
                    <ul class="tags-list">
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">путешествия по россии</a>
                        </li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">турция</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">гоа</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">авиабилеты</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">отели</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">европа</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">азия</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">тайланд</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">хостелы</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">шоппинг</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <?php $categories = get_categories(); ?>
                <div class="sidebar-item__content">
                    <ul class="category-list">
                        <li class="category-list__item">
                            <a href="#" class="category-list__item__link">Акции</a>
                            <ul class="category-list__inner">
                                <?php foreach ($categories as $category) : ?>
                                    <li class="category-list__item">
                                        <a href="<?php echo get_term_link($category); ?>" class="category-list__item__link"><?php echo $category->name?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar__sidebar-item">
                <?php echo get_calendar();?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
