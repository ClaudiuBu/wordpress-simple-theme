
    <?php get_header(); ?>
    <div class="container">
        <div class="row">
    <div class="main col-9">

        <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
                <article class="post"> 
                <h3>
                    <a href="<?php the_permalink(); ?>" style="text-decoration:none;"><?php the_title(); ?></a></h3>
                <div class ="meta">
                Created by <?php the_author(); ?> on <?php the_time('l jS \of F Y h:i:s A');?>
                </div>
                <?php if(has_post_thumbnail()) :?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <?php the_excerpt(); ?>
                <br>
                <a  href="<?php the_permalink(); ?>" class="button" >Read More</a>
                
                </article>
            <?php endwhile; ?>
        <?php else :?>
            <?php echo wpautop('Nu avem postari'); ?>
             
<?php endif; ?>

</div>

<div class = "sidebar col-3">
    Sidebar widget location placeholder
</div>

</div>
</div>
<?php get_footer(); ?>