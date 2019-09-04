<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <?php 
            if(have_posts() ):
            while( have_posts()) :
                the_post();
                get_template_part( 'template-parts/content', 'single', get_post_format());
                ?>
                    <div class="row">
                        <div class="pages col-6 text-left">
                            <?php  previous_post_link('&laquo; %link'); ?>
                        </div>
                        <div class="pages col-6 text-right">
                            <?php  next_post_link('%link &raquo'); ?>
                        </div>
                    </div>
                <?php
                if( comments_open() || get_comments_number()):
                    comments_template();
                endif;
            endwhile;
        else:
            ?>
            <h2>Well, golly. There are no posts available to be displayed.</h2>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>