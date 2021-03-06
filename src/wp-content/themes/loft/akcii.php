<?php get_header(); ?>
    <div class="content">
        <div class="article-pagination">
            <?php next_post_link('<small>(следующая статья)</small> %link &rarr;', '%title', FALSE, 152) ?>
            <div class="article-pagination__block pagination-prev-left"><a href="#" class="article-pagination__link"><i
                            class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                <div class="wrap-pagination-preview pagination-prev-left">
                    <div class="preview-article__img">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                    </div>
                    <div class="preview-article__content">
                        <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                        <div class="preview-article__text">Сезонные скидки на авиа билеты в AirFace</div>
                    </div>
                </div>
            </div>
            <div class="article-pagination__block pagination-prev-right"><a href="#" class="article-pagination__link">Сдедующая
                    статья<i class="icon icon-angle-double-right"></i></a>
                <div class="wrap-pagination-preview pagination-prev-right">
                    <div class="preview-article__img"><img src="img/2.jpg" class="preview-article__image"></div>
                    <div class="preview-article__content">
                        <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                        <div class="preview-article__text">Вылеты из Риги за 0,99 euro</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar-->
    <div class="sidebar">
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <?php wp_tag_cloud(); ?>
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
<?php get_footer(); ?>