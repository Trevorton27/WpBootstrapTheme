<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <h2>Search Results For: <?php echo get_search_query(); ?></h2>
            <?php 
            get_search_form();
            if(have_posts() ):
            while( have_posts()) :
                the_post();
                get_template_part( 'template-parts/content', 'search', get_post_format());

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