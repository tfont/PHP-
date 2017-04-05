<?php

namespace
{
    final class String
    {
        /**
         * Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask.
         *
         * @link http://php.net/manual/en/function.strspn.php
         * @link http://www.w3resource.com/php/function-reference/strspn.php
         * @link https://www.w3schools.com/php/func_string_strspn.asp
         *
         * @param $subject
         * @param $mask
         * @param null $start
         * @param null $length
         *
         * @return int
         */
        final public static function FindInitMaskLength($subject, $mask, $start = NULL, $length = NULL)
        {
            return \strspn($subject, $mask, $start, $length);
        }

        /**
         * Find length of initial segment not matching mask
         *
         * @link http://php.net/manual/en/function.strcspn.php
         * @link http://www.w3resource.com/php/function-reference/strcspn.php
         * @link https://www.w3schools.com/php/func_string_strcspn.asp
         *
         * @param $str1
         * @param $str2
         * @param null $start
         * @param null $length
         *
         * @return int
         */
        final public static function FindInitNotMaskLength($str1, $str2, $start = NULL, $length = NULL)
        {
            return \strcspn($str1, $str2, $start, $length);
        }

        /**
         * Binary safe string comparison
         *
         * @link http://php.net/manual/en/function.strcmp.php
         *
         * @param $str1
         * @param $str2
         *
         * @return int
         */
        final public static function Compare($str1, $str2)
        {
            return \strcmp($str1, $str2);
        }

        /**
         * Binary safe case-insensitive string comparison
         *
         * @link http://php.net/manual/en/function.strcasecmp.php
         *
         * @param $str1
         * @param $str2
         *
         * @return int
         */
        final public static function CompareCaseInsensitive($str1, $str2)
        {
            return \strcasecmp($str1, $str2);
        }

        /**
         * Binary safe string comparison of the first n characters
         *
         * @link http://php.net/manual/en/function.strncmp.php
         *
         * @param $str1
         * @param $str2
         * @param $len
         *
         * @return int
         */
        final public static function CompareFirstCharacters($str1, $str2, $len)
        {
            return \strncmp($str1, $str2, $len);
        }
    }
}
