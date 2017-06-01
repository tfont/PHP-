<?php

namespace
{
    use function \vsprintf as vsprintf;

    abstract class String_Extended
    {
        public static function SubstringExtract($string, $token)
        {
            return strtok($string, $token);
        }

        /*
        fprintf(), vfprintf(), printf(), sprintf() and vprintf().

        sprintf() = formatted_string - Return a formatted string
        vprintf() = formatted_string - Output a formatted string
        */

        public static function Formatted(array $args)
        {
            $args = (object) array
            (
                'format' => (array) $args['format'],
                'args'   => (array) $args['args'],
                'return' => (bool)  (isset($args['return']) ? $args['return'] : NULL),
                'output' => (bool)  (isset($args['output']) ? $args['output'] : NULL)
            );

            return (string) vsprintf($args->format, $args->args);
        }

        public function _construct()
        {
            echo self::Formatted(array
            (
                'return' => TRUE
            ));
        }
    }
}