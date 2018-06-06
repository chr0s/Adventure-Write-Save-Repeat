<?php

if ( post_password_required() ) {
	return;
}
?>
    <div class="row">
        <div class="col-md-5 col-xs-12">

            <?php 

$fields =  array(
    'author' => '' . '<label for="author">' . __( '<h4>Your name' ) . '</label> ' . ( $req ? '<span class="required">*</span></h4>' : '' ) .
        '<input style="width:100%;" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  => '<label for="email">' . __( '<h4>Your email (this will not be published)' ) . '</label> ' . ( $req ? '<span class="required">*</span></h4>' : '' ) .
        '<input style="width:100%;" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
);

$comments_args = array(
        
        // Reference fields above
        'fields' =>  $fields,
        // change the title of send button 
        'label_submit'=>'Submit',
        // change the title of the reply section
        'title_reply'=>'',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // Change note
        'comment_notes_before' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<label for="comment">' . _x( '<h4>Leave a comment:</h4>', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true" style="width:100%;"></textarea></p>',
     
);

comment_form($comments_args); ?>

        </div>
        <!-- col -->
        <div class="col-md-7 col-xs-12">

            <?php if ( have_comments() ) : ?>

            <?php
			printf( _n( 'One thought on %2$s', '%1$s thoughts on %2$s', get_comments_number(), 'twentyfourteen' ),
				number_format_i18n( get_comments_number() ), 'this post' );
		?>

                <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
                <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                    <h1 class="screen-reader-text">
                        <?php _e( 'Comment navigation', 'twentyfourteen' ); ?>
                    </h1>
                    <div class="nav-previous">
                        <?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?>
                    </div>
                    <div class="nav-next">
                        <?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?>
                    </div>
                </nav>
                <!-- #comment-nav-above -->
                <?php endif; // Check for comment navigation. ?>


                <?php

$commentargs = array(
	'style'             => 'div',
	'type'              => 'comment',
	'reply_text'        => 'Reply to this',
	'avatar_size'       => 0,
); 

			wp_list_comments( $commentargs );
		?>


                    <br>
                    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
                    <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                        <h1 class="screen-reader-text">
                            <?php _e( 'Comment navigation', 'twentyfourteen' ); ?>
                        </h1>
                        <div class="nav-previous">
                            <?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?>
                        </div>
                        <div class="nav-next">
                            <?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?>
                        </div>
                    </nav>
                    <!-- #comment-nav-below -->
                    <?php endif; // Check for comment navigation. ?>

                    <?php if ( ! comments_open() ) : ?>
                    <p class="no-comments">
                        <?php _e( 'Comments are closed.', 'twentyfourteen' ); ?>
                    </p>
                    <?php endif; ?>

                    <?php endif; // have_comments() ?>

        </div>
        <!-- row -->
    </div>
    <!-- col -->

    </div>
    <!-- #comments -->