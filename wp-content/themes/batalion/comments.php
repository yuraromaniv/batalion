<?php

if ( post_password_required() ) {
  return;
}
?>

<div id="comments" class="comments-area">

  <?php
  // You can start editing here -- including this comment!
  if ( have_comments() ) { ?>
    <?php $comments_number = get_comments_number(); ?>
    <h4>Залишити коментар (всього коментарів <?php echo $comments_number; ?> )</h4>

    <ol class="comment-list">
      <?php
        wp_list_comments( array(
          'avatar_size' => 100,
          'style'       => 'ol',
          'short_ping'  => true,
          'reply_text'  => 'Відповісти',
        ) );
      ?>
    </ol>

    <?php the_comments_pagination( array(
      'prev_text' => '<span class="screen-reader-text">Попередній</span>',
      'next_text' => '<span class="screen-reader-text">Далі</span>',
    ) );
  } //end if;

  // If comments are closed and there are comments, let's leave a little note, shall we?
  if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
    <p class="no-comments"><?php _e( 'Comments are closed.', 'twentyseventeen' ); ?></p>
  <?php
  } // end if

  $comment_form_args =  array(
    'fields' => array(
      'author' => '
        <p class="comment-form-author">
          <label for="author">' . __( 'Name' ) . '<span class="required">*</span></label>
          <input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" />
        </p>',
      'email' => '
        <p class="comment-form-email">
          <label for="email">' . __( 'Email' ) . '<span class="required">*</span></label>
          <input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes" />
        </p>',
      'url'  => '',
    ),
  );
  comment_form($comment_form_args);
  ?>

</div><!-- #comments -->
