<?php
add_shortcode('danh_sach_sinh_vien', function(){
    $q = new WP_Query(['post_type'=>'student']);
    $i=1;
    ob_start();
    echo "<table border='1'><tr><th>STT</th><th>MSSV</th><th>Họ tên</th><th>Lớp</th><th>Ngày sinh</th></tr>";
    while($q->have_posts()){ $q->the_post();
        echo "<tr>";
        echo "<td>".$i++."</td>";
        echo "<td>".get_post_meta(get_the_ID(),'mssv',true)."</td>";
        echo "<td>".get_the_title()."</td>";
        echo "<td>".get_post_meta(get_the_ID(),'lop',true)."</td>";
        echo "<td>".get_post_meta(get_the_ID(),'dob',true)."</td>";
        echo "</tr>";
    }
    echo "</table>";
    return ob_get_clean();
});
