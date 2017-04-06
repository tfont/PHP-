<?php

namespace
{
    require_once 'func.is_associative.php';

    final class AssociativeArray
    {
        final public static function isAssociative(array $array)
        {
            return \_AssociativeArray::is_associative($array);
        }
    }
}