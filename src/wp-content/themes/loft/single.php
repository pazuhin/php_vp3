<?php get_header(); ?>
<div class="content-wrapper">
    <?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="content">
        <div class="article-title title-page">
            <?php the_title(); ?>
        </div>
        <div class="article-image">
            <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="article-info">
            <div class="post-date"><?php the_date(); ?></div>
        </div>
        <div class="article-text">
            <?php the_content(); ?>
        </div>
        <?php endwhile;
        endif; ?>
        <div class="article-pagination">
            <?php if ($pred_post = get_previous_post()) : ?>
            <div class="article-pagination__block pagination-prev-left"><a href="<?php echo get_permalink($pred_post); ?>" class="article-pagination__link"><i
                            class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                <div class="wrap-pagination-preview pagination-prev-left">
                    <div class="preview-article__img">
                        <?php echo get_the_post_thumbnail($pred_post->ID, 'medium'); ?>
                    </div>
                    <div class="preview-article__content">
                        <div class="preview-article__info"><a href="<?php echo get_permalink($pred_post); ?>" class="post-date"><?php echo $pred_post->post_date?></a></div>
                        <div class="preview-article__text"><?php echo $pred_post->post_title?></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($next_post = get_next_post()) : ?>
            <div class="article-pagination__block pagination-prev-right"><a href="<?php echo get_permalink($next_post); ?>" class="article-pagination__link">Следующая
                    статья<i class="icon icon-angle-double-right"></i></a>
                <div class="wrap-pagination-preview pagination-prev-right">
                    <div class="preview-article__img">
                        <?php echo get_the_post_thumbnail($next_post->ID, 'medium');?>

                    </div>
                    <div class="preview-article__content">
                        <div class="preview-article__info"><a href="<?php echo get_permalink($next_post); ?>" class="post-date"><?php echo $pred_post->post_date?></a></div>
                        <div class="preview-article__text"><?php echo $pred_post->post_title?></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- sidebar-->
    <div class="sidebar">
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">
                    <li class="tags-list__item"><a href="#" class="tags-list__item__link">путешествия по россии</a></li>
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
            <div class="sidebar-item__content">
                <ul class="category-list">
                    <li class="category-list__item"><a href="#" class="category-list__item__link">
                            Вылеты из
                            столиц</a>
                        <ul class="category-list__inner">
                            <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a>
                            </li>
                            <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category-list__item"><a href="#" class="category-list__item__link">
                            Вылеты из
                            регионов</a>
                        <ul class="category-list__inner">
                            <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a>
                            </li>
                            <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
