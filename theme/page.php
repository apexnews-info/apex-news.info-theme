<?php get_header(); ?>

<div id="content">


  <div class="wrap clearfix">

    <?php bzb_breadcrumb(); ?>
    <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

      <div class="main-inner">

        <?php
        if (have_posts()) :

          while (have_posts()) : the_post();

        ?>


            <?php $cf = get_post_meta($post->ID); ?>
            <article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">

              <header class="post-header">
                <h1 class="post-title" itemprop="headline"><?php the_title(); ?></h1>
              </header>

              <section class="post-content" itemprop="text">

                <?php
                the_content();
                $args = array(
                  'before' => '<div class="pagination">',
                  'after' => '</div>',
                  'link_before' => '<span>',
                  'link_after' => '</span>'
                );
                wp_link_pages($args);
                ?>

              </section>


            </article>

          <?php

          endwhile;

        else :
          ?>

          <p>投稿が見つかりません。</p>

        <?php
        endif;
        ?>

      </div><!-- /main-inner -->
    </div><!-- /main -->

    <?php get_sidebar(); ?>

  </div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>
