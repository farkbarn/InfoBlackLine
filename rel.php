<section class="rel">
<h3 class="secrel">Entradas relacionadas</h3>
<?php
        $orig_post = $post;
        global $post;
        $tags = wp_get_post_tags($post->ID);
        
        if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
        $args=array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>$_SESSION['nrel'],
        'caller_get_posts'=>1
        );
        
        $my_query = new wp_query( $args );

        while( $my_query->have_posts() ) {
        $my_query->the_post();
        ?>
        
        <section class="relacionada">
                <a class='linkrel' rel="external" href="<? the_permalink()?>">
                  <figure class='imgrel img' ><?php the_post_thumbnail('mlei'); ?>
                    <figcaption class='titrel'><?php the_title(); ?></figcaption>
                  </figure>
                </a>
        </section>
        
        <? }
        }
        $post = $orig_post;
        wp_reset_query();
        ?>
</section>