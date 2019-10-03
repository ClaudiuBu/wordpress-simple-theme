
    <?php get_header(); ?>
    <div class="main">
        <div class="container">
        <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>

                <h3><?php the_title(); ?></h3>
                <div class ="meta">
                Created by <?php the_author(); ?> on <?php the_time('l jS \of F Y h:i:s A');?>
                </div>
                <p><?php the_content(); ?></p>
            <?php endwhile; ?>
        <?php else :?>
            <?php echo wpautop('Nu avem postari'); ?>
             
<?php endif; ?>

        </div>
    </div>
<?php get_footer(); ?>