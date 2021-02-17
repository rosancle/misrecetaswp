<?php /* Template name: recetas */ ?>
<?php get_header();?>
<main>

    

    <?php
    $args = array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post_type' => 'post',
        'paged' => $paged
    );

    $the_query = new WP_Query($args);

    ?>  

    <?php if ($the_query->have_posts()) : ?> 
        
        <?php while ($the_query->have_posts()) : $the_query->the_post(); // loop ?>

            <article class="mb-3">
                <h2 class="head-strong mb-05 fnt-xl2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="grid">

                    <div class="col-desk-4 col-tab-5">
                        <?php the_post_thumbnail('medium-large'); ?>
                    </div>

                    <div class="col-desk-8 col-tab-7">
                        <div class="head-strong mb-1"><?php echo get_the_date(); ?> | <?php the_author(); ?></div>
                        <div class="mb-2 line-normal">
                            <?php the_excerpt(); ?>
                        </div>
                        <a class="link-normal" href="<?php the_permalink(); ?>">Ver receta</a>
                    </div>

                </div>

            </article>

        <?php endwhile; ?>

        <nav class="nav-pagination fnt-lg block-center-row mb-2">
            <?php
                echo paginate_links(
                    array(
                        'current' => max(1, $paged),
                        'total'   => $the_query->max_num_pages,
                        'show_all'=> true,
                        'prev_text' => '<',
                        'next_text' => '>',
                        'after_page_number' => '<span class="separator">|</span>'
                    )
                );
            ?>
        </nav>

    <?php else: ?>

        <div>No hay recetas</div>

    <?php endif; ?>

    </main>

<?php get_footer(); ?>

