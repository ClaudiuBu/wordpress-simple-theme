
    <?php get_header(); ?>
    <div class="main">
        <div class="container">
        <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
                <article class="post"> 
                <h3>
                    <a><?php the_title(); ?></a></h3>
                <div class ="meta">
                Created by <?php the_author(); ?> on <?php the_time('l jS \of F Y h:i:s A');?>
                </div>
                <?php if(has_post_thumbnail()):?>
                    <div class ="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif;?>
                <?php the_content(); ?>
                <br>
                
                
                </article>
            <?php endwhile; ?>
        <?php else :?>
            <?php echo wpautop('Nu avem postari'); ?>
             
<?php endif; ?>

        </div>
    </div>
<?php get_footer(); ?>