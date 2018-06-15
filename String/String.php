<?php

namespace
{
    use function \strspn     as strspn;
    use function \strcspn    as strcspn;
    use function \strcmp     as strcmp;
    use function \strcasecmp as strcasecmp;
    use function \strncmp    as strncmp;
    use function \ucwords    as ucwords;

    final class String extends String_Extended
    {
        /**
         * Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask.
         *
         * @link http://php.net/manual/en/function.strspn.php
         * @link http://www.w3resource.com/php/function-reference/strspn.php
         * @link https://www.w3schools.com/php/func_string_strspn.asp
         *
         * @param string $subject
         * @param string $mask
         * @param int    $start   Default: null
         * @param int    $length  Default: null
         *
         * @return int
         */
        final public static function FindInitMaskLength($subject, $mask, $start = NULL, $length = NULL)
        {
            return strspn($subject, $mask, $start, $length);
        }

        /**
         * Find length of initial segment not matching mask
         *
         * @link http://php.net/manual/en/function.strcspn.php
         * @link http://www.w3resource.com/php/function-reference/strcspn.php
         * @link https://www.w3schools.com/php/func_string_strcspn.asp
         *
         * @param string $str1
         * @param string $str2
         * @param int    $start  Default: null
         * @param int    $length Default: null
         *
         * @return int
         */
        final public static function FindInitNotMaskLength($str1, $str2, $start = NULL, $length = NULL)
        {
            return strcspn($str1, $str2, $start, $length);
        }

        /**
         * Binary safe string comparison
         *
         * @link http://php.net/manual/en/function.strcmp.php
         *
         * @param string $str1
         * @param string $str2
         *
         * @return int
         */
        final public static function Compare($str1, $str2)
        {
            return strcmp($str1, $str2);
        }

        /**
         * Binary safe case-insensitive string comparison
         *
         * @link http://php.net/manual/en/function.strcasecmp.php
         *
         * @param string $str1
         * @param string $str2
         *
         * @return int
         */
        final public static function CompareCaseInsensitive($str1, $str2)
        {
            return strcasecmp($str1, $str2);
        }

        /**
         * Binary safe string comparison of the first n characters
         *
         * @link http://php.net/manual/en/function.strncmp.php
         *
         * @param string $str1
         * @param string $str2
         * @param int    $len
         *
         * @return int
         */
        final public static function CompareFirstCharacters($str1, $str2, $len)
        {
            return strncmp($str1, $str2, $len);
        }

        /**
         * Uppercase the first character of each word in a string
         *
         * @link http://php.net/manual/en/function.ucwords.php
         *
         * @param $string
         * @param string $delimiters
         *
         * @return string
         */
        final public static function UpperCaseWords($string, $delimiters = ' \t\r\n\f\v')
        {
            return ucwords($string, $delimiters);
        }

        /**
         * Checks if all of the characters in the provided string text are hexadecimal 'digits'.
         *
         * @link http://php.net/manual/en/function.ctype-xdigit.php
         *
         * @param $text
         *
         * @return bool
         */
        final public static function isHexadecimalDigit($text)
        {
            return ctype_xdigit($text);
        }

        /**
         * Checks if enter string is a hexadecimal color code by W3C standard.
         *
         * @param $colorCode
         *
         * @return bool
         */
        final public static function isColorHex($colorCode)
        {
            $colorCode = ltrim($colorCode, '#');

            if (ctype_xdigit($colorCode) && (strlen($colorCode) == 6 || strlen($colorCode) == 3))
            {
                return TRUE;
            }

            return FALSE;
        }

        /**
         * Inserts HTML line breaks before all newlines in a string
         *
         * @link http://php.net/manual/en/function.nl2br.php
         *
         * @param $string
         * @param bool $is_xhtml
         *
         * @return string
         */
        final public static function ConvertNewlineToBreak($string, $is_xhtml = TRUE)
        {
            return nl2br($string, $is_xhtml);
        }
    }
}

// TODO:
// ctype_​alnum
// ctype_​alpha
// ctype_​cntrl
// ctype_​digit
// ctype_​graph
// ctype_​lower
// ctype_​print
// ctype_​punct
// ctype_​space
// ctype_​upper
