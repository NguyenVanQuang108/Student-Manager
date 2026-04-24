<?php
add_action('init', function(){
    register_post_type('student', [
        'label' => 'Sinh viên',
        'public' => true,
        'supports' => ['title','editor'],
        'menu_icon' => 'dashicons-welcome-learn-more'
    ]);
});
