<?php
/*
Plugin Name: Download Button in Media
Description: add a download button to media image edit panel
Author: Eyal Ron | Native-Code Web Division
Developer: Eyal Ron
version: 0.1
*/

/*Classic Editor*/
add_filter('attachment_fields_to_edit', 'edit_media_custom_field', 11, 2 );

function edit_media_custom_field( $form_fields, $post ) {
    $form_fields['happy_download'] = array('input' => 'html', 'html' => '<a class="button" target="_blank" href="'.wp_get_attachment_url( $post->ID ).'" download>Download Media</a>', true  );
    return $form_fields;
}
