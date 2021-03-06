<?php 

get_header();

?>
    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader">

        <?php echo get_template_part('template-parts/header'); ?>

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        <div class="row">
			<div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
                </h1>
            </div> <!-- end s-content__header -->
		</div>
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                
                <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        echo get_template_part('template-parts/post-format/post', get_post_format( )); 
                    }
                }else {
                    _e('No post found!', 'philosophy');
                }
                wp_reset_postdata();
                
                ?>

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <?php philosophy_pagination(); ?>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->

<?php get_footer(); ?>