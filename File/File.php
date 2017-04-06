<?php

namespace
{
    require_once 'File_Extended.php';

    use function \mkdir          as mkdir;
    use function \fileperms      as fileperms;
    use function \clearstatcache as clearstatcache;
    use function \Exception      as Exception;

    final class File extends File_Extended
    {
        /**
         * Attempts to create the directory specified by pathname
         *
         * @link http://php.net/manual/en/function.mkdir.php
         *
         * @param $pathname
         * @param int $mode
         * @param bool $recursive
         * @param null $context
         *
         * @return bool
         */
        final public static function MakeDirectory($pathname, $mode = 0777, $recursive = FALSE, $context = NULL)
        {
            if (!mkdir($pathname, $mode, $recursive, $context))
            {
                throw new Exception('Failed to create folders...');
            }

            return FALSE;
        }

        /**
         * Gets permissions for the given file.
         *
         * @link http://php.net/manual/en/function.fileperms.php
         *
         * @param $filename
         *
         * @return bool|int
         */
        final public static function GetPermissions($filename)
        {
            // clearing file cache
            clearstatcache();

            if ($perms = fileperms($filename))
            {
                return $perms;
            }

            throw new Exception('Failure on retrieving permissions');
        }
    }
}