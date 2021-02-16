<?php get_header(); ?>

    
            <main class="grid">
            <?php
                $args=array (
                    'posts_per_page' => 4,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                //    'paged' => $paged
                );
                $the_query = new WP_Query($args);
            ?>
            <?php if($the_query -> have_posts()): ?>
                
                <section class="col-desk-9 col-tab-8 col-mob-12 separator-block bg-green" >  
                    <h2 class="head-strong txt-center mb-2">NOVEDADES</h2>
                    <div class="grid">
                    <?php while($the_query -> have_posts()): 
                        $the_query -> the_post();?>

                            <div class="col-desk-6 col-tab-6 col-mob-6 mb-2">
                                <h2 class="head-strong txt-center mb-05"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>                           
                                <a href="<?php the_permalink(); ?>"><img class="img-md" src="<?php echo get_the_post_thumbnail_url(false, 'medium_large'); ?>"></a>
                            </div>
                    <?php endwhile; ?>
                           
                    </div>
                </section>

            <?php endif; ?>

                    <aside class="col-desk-3 col-tab-4 col-mob-12">  
                        
                        <h2 class="head-strong txt-center mb-05">Menu del día</h2>

                        <div class="bg-light pad-1 rounded">
                            <div class="grid">

    <!--                            
                                <div class="col-mob-4 mb-1">
                                    <h3 class="fnt-md head-strong mb-05 txt-center">Entrante</h3>
                                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/vichyssoise-de-esparragos-blancos.jpg">
                                </div>
                                <div class="col-mob-4 mb-1">
                                    <h3 class="head-strong mb-05 txt-center">Principal</h3>
                                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/lubina-con-hummus-de-guisantes.jpg">
                                </div>
                                <div class="col-mob-4 mb-1">
                                    <h3 class="head-strong mb-05 txt-center">Postre</h3>
                                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/_resources/tiramisu-express.jpg">

                                    </div>
    -->          
                            <?php $menu_del_dia = get_field ('menu_del_dia', get_page_by_path('menu-del-dia')-> ID); ?>
                             <?php if ($menu_del_dia): ?>
                                <?php foreach ($menu_del_dia as $post): setup_postdata($post); ?>

                                    <div class="col-mob-4 mb-1">
                                         <h3 class="fnt-md head-strong mb-05 txt-center"><?php the_category(); ?></h3>
                                        <img class="img-md rounded" src="<?php echo get_the_post_thumbnail_url(false, 'medium_large'); ?>">
                                     </div>

                                <?php endforeach; ?>
                            <?php endif; ?>
                      

                            </div>                            
                        </div>    
                        
                    </aside>
               
            </main>

            <?php get_footer(); ?>