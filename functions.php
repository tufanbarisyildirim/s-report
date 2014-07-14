<?php



function tokenText($str)
{
    preg_match_all("/\\$(\w+)\:(.*?)\;/uis", $str, $matches);
    $object = array_combine($matches[1], $matches[2]);
    return $object;

    // thx @fkadev
}
