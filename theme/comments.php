<?php
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">

  <?php if (have_comments()) : ?>

    <h4 class="comments-title">
      <?php
      //printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'twentyfourteen' ),
      //	number_format_i18n( get_comments_number() ), get_the_title() );
      ?>
      <i class="fa fa-comments-o"></i> コメント
    </h4>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
        <h1 class="screen-reader-text"><?php _e('Comment navigation', 'twentyfourteen'); ?></h1>
        <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentyfourteen')); ?></div>
        <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentyfourteen')); ?></div>
      </nav><!-- #comment-nav-above -->
    <?php endif; // Check for comment navigation.
    ?>

    <ol class="comment-list">
      <?php
      wp_list_comments(array(
        'style'      => 'ol',
        'short_ping' => true,
        'avatar_size' => 48,
        'type' => 'comment'
      ));
      ?>
    </ol><!-- .comment-list -->

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
        <h1 class="screen-reader-text"><?php _e('Comment navigation', 'twentyfourteen'); ?></h1>
        <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentyfourteen')); ?></div>
        <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentyfourteen')); ?></div>
      </nav><!-- #comment-nav-below -->
    <?php endif; // Check for comment navigation.
    ?>

    <?php if (!comments_open()) : ?>
      <p class="no-comments"><?php _e('Comments are closed.', 'twentyfourteen'); ?></p>
    <?php endif; ?>

  <?php endif; // have_comments()
  ?>

  <?php
  $com_args = array(
    'comment_notes_before' => '',
    'fields' => array(
      'author' => '',
      'email'  => '',
      'url'    => '',
    ),
  );
  comment_form($com_args); ?>

</div><!-- #comments -->
