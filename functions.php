<?php

// TRANSLATION
load_theme_textdomain('s-report', get_template_directory() . '/languages');


function tokenText($str) {
    // thx fatih (github.com/f)
    $matches = preg_split("/\;\s*\\$/uism", $str);
    $object = array();
    foreach ($matches as $match) {
        preg_match("/\\$?(\w+)\:(.*)/uism", trim($match), $_matches);
        $object[$_matches[1]] = rtrim($_matches[2], ";");
    }
    return $object;
}