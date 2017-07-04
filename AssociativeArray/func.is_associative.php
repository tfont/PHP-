<?php

trait is_associative
{
    final public static function is_associative(array $array)
    {
        return (is_array($array) && (count($array) == 0 || count(array_diff_key($array, array_keys(array_keys($array)))) !== 0));
    }
}
