<div id="oquefazemos">
    <div class="section-title-area">
	    <h2 class="section-title">o que fazemos</h2>
    </div>
    <div id="content-oq-fazemos" class="container">                       
        <?php
        $my_query = new WP_Query( array( 'pagename' => 'o-que-fazemos' ) );
        ?>
        <?php if ( $my_query->have_posts() ) : ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile;?>
        </div>
        <?php
            wp_reset_postdata(); 
            endif;
        ?>
    </div>       
</div>