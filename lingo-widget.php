<?php
/*
* Plugin Name: Lingo widget
* Plugin URI: http://lingoeducation.com
* Description: Plugin for displaying LingoEducation.com's widget
* Version: 1.1
* Author: MegaEnglish
* License: Proprietary
*/

add_action('wp_footer', 'lingo_add_widget');

function lingo_add_widget() {
    $url = '//lingoeducation.com/built/prod/bookmarklet.js';
    $content = <<<WIDGET
<script type="text/javascript" id="lingo-bookmarklet" src="$url">
</script>
WIDGET;
    echo $content;
}
