<?php
add_action('add_meta_boxes', function(){
    add_meta_box('info','Thông tin SV', function($post){
        wp_nonce_field('save_sv','nonce_sv');
        ?>
        MSSV: <input type="text" name="mssv"><br>
        Lớp: 
        <select name="lop">
            <option>CNTT</option>
            <option>Kinh tế</option>
            <option>Marketing</option>
        </select><br>
        Ngày sinh: <input type="date" name="dob">
        <?php
    }, 'student');
});

add_action('save_post', function($id){
    if(!isset($_POST['nonce_sv'])) return;
    if(!wp_verify_nonce($_POST['nonce_sv'],'save_sv')) return;

    update_post_meta($id,'mssv', sanitize_text_field($_POST['mssv']));
    update_post_meta($id,'lop', sanitize_text_field($_POST['lop']));
    update_post_meta($id,'dob', sanitize_text_field($_POST['dob']));
});
