<?php
/*
Plugin Name: Update Scheduled Post Dates
Description: Updates the post publication and modification dates to the actual publication date.
Version: 1.1
Author: big_jacky
Author URI:  https://t.me/@big_jacky
*/

function update_scheduled_post_dates($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
        return $post_id;

    if (wp_is_post_revision($post_id))
        return $post_id;

    $post = get_post($post_id);

    if ($post->post_date == '0000-00-00 00:00:00') {
        // Post is scheduled, update its date
        $current_time = current_time('mysql');
        wp_update_post(array(
            'ID' => $post_id,
            'post_date' => $current_time,
            'post_date_gmt' => get_gmt_from_date($current_time),
            'post_modified' => $current_time,
            'post_modified_gmt' => get_gmt_from_date($current_time),
        ));
    }
}

add_action('publish_future_post', 'update_scheduled_post_dates');
?>
