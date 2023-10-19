<?php

// directly access denied
defined('ABSPATH') || exit;

/**
 * Customize comment fields
 *
 * @param [type] $fields
 * @return $fields
 */
function cc_comment_fields( $fields ){
    $author = '
        <div class="row">
            <div class="col-lg-6 mb-4">
                <label for="author">Name: </label>
                <input type="text" name="author" class="form-control" id="author" required>
            </div>
    ';

    $email = '
            <div class="col-lg-6 mb-4">
                <label for="email">Email: </label>
                <input type="text" name="email" class="form-control" id="email" required>
            </div>
        </div>
    ';

    $fields = [
        'author' => $author,
        'email'  => $email,
    ];

    return $fields;
}

add_filter('comment_form_default_fields', 'cc_comment_fields' );


/**
 * customize comment textarea field
 *
 * @param [type] $default
 * @return $defauld
 */
function cc_comment_form( $default ){
    $form = '
        <div class="row textarea-parent">
            <div class="col-12">
                <label for="comment-form">Message:</label>
                <textarea name="comment" class="form-control" required ></textarea>
            </div>
        </div>
    ';

    $submit_field = '
        <div class="row submit-parent">
            <div class="col-12 form-submit-field mt-4">
                %1$s %2$s
            </div>
        </div>
    ';

    $default = [
        'comment_field' => $form,
        'submit_field'  => $submit_field
    ];
    
    return $default;
}
add_filter( 'comment_form_defaults', 'cc_comment_form' );