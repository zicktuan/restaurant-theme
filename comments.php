<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
    <?php if ( have_comments() ) :
        global $comments_by_type;
        $comments_by_type = &separate_comments( $comments );

        if ( ! empty( $comments_by_type['comment'] ) ) : ?>

            <?php if ( get_comment_pages_count() > 1 ) : ?>
                <nav id="comments-nav-above" class="comments-navigation" role="navigation">
                    <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
                </nav>
            <?php endif; ?>
            <ol class="comment-list">
                <?php
                    wp_list_comments([
                        'type'              => 'comment',
                        'callback'          => 'format_comment',
                    ]);
                ?>
            </ol>
            <?php if ( get_comment_pages_count() > 1 ) : ?>
                <nav id="comments-nav-below" class="comments-navigation" role="navigation">
                    <div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
                </nav>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif;
        $comments_args = array(
            // Change the title of send button
            'label_submit' => __('Gửi tin nhắn của bạn', 'bookawesome'),
            'class_submit' => __('submit', 'bookawesome'),
            'logged_in_as' => '',
            'class_form'           => 'comment-form',
            // Change the title of the reply section
            'title_reply' => __('Leave the Comment', 'bookawesome'),
            'title_reply_before' => '<h2 class="align_center">',
            'title_reply_after' => '</h2>',
            'fields' => apply_filters('comment_form_default_fields', array(
                'cookies' => ''
            )),
            'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
            'comment_field' =>
            '<div class="row">
                <div class="col-6">
                    <input type="text" placeholder="Tên khách hàng">
                </div>
                <div class="col-6">
                    <input type="email" placeholder="Email">
                </div>
            </div>
            <textarea name="comment" cols="45" rows="5" placeholder="Ý kiến khách hàng" id="comment-message" class="form-field"></textarea>',
            );
        ?>
        <?php comment_form($comments_args);?>

<?php

    function format_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
        <div class="restbeef_comment_list">
            <div class="restbeef_comment_item" id="comment-<?php comment_ID() ?>">
                <div class="restbeef_comment_body">
                    <div class="restbeef_comment_text"><?php comment_text(); ?></div>
                    <div class="restbeef_comment_footer">
                        <div class="restbeef_comment_meta">
                            <div class="innertitle restbeef_comment_author">
                                <?php echo $comment->comment_author ?>
                            </div>
                            <div class="restbeef_comment_date">
                                <?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?>
                            </div>
                        </div>

                        <div class="restbeef_comment_tools">
                            <div class="restbeef_comment_reply">
                                <?php comment_reply_link(array_merge( array('reply_text'    => __( 'Trả Lời' )), array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php } ?>