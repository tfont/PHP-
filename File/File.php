<?php

namespace
{
    require_once 'File_Extended.php';

    use function \clearstatcache as clearstatcache;
    use function \dirname        as dirname;
    use function \Exception      as Exception;
    use function \fileperms      as fileperms;
    use function \getcwd         as getcwd;
    use function \mkdir          as mkdir;
    use function \pclose         as pclose;
    use function \popen          as popen;
    use function \proc_open      as proc_open;

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
         *
         * @throws \Exception
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

        /**
         * Opens process file pointer
         * Opens a pipe to a process executed by forking the command given by command
         *
         * @link http://php.net/manual/en/function.popen.php
         *
         * @param $command
         * @param $mode
         *
         * @return bool|resource
         *
         * @throws \Exception
         */
        final public static function OpenPipeProcess($command, $mode)
        {
            if (!$handle = popen($command, $mode))
            {
                return $handle;
            }

            throw new Exception('Opening of pipe process failed.');
        }

        /**
         * Closes process file pointer
         * Closes a file pointer to a pipe opened by File::openPipeProcess()
         *
         * @link http://php.net/manual/en/function.pclose.php
         *
         * @param $handle
         *
         * @return int
         *
         * @throws \Exception
         */
        final public static function ClosePipeProcess($handle)
        {
            $int = pclose($handle);

            if ($int > -1)
            {
                return $int;
            }

            throw new Exception('Closing of pipe process failed.');
        }

        /**
         * Execute a command and open file pointers for input/output
         *
         * File::closePipeProcess() is similar to File::openPipeProcess() but provides a much greater degree of control over the program execution.
         *
         * @link http://php.net/manual/en/function.proc-open.php
         *
         * @param $command
         * @param $descriptorspec
         * @param $pipes
         * @param $cwd
         * @param $env
         * @param $other_options
         *
         * @return bool|resource
         *
         * @throws \Exception
         */
        final public static function ExecutePipeProcess($command, $descriptorspec, &$pipes, $cwd, $env, $other_options)
        {
            if ($process = proc_open($command, $descriptorspec, $pipes, $cwd, $env, $other_options))
            {
                return $process;
            }

            throw new Exception('Execution and opening of pipe process failed.');
        }

        /**
         * Gets the current working directory
         *
         * @link http://php.net/manual/en/function.getcwd.php
         *
         * @return string
         */
        final public static function CurrentWorkingDirectory()
        {
            return getcwd();
        }

        /**
         * Returns a parent directory's path
         *
         * Given a string containing the path of a file or directory, this function will return the parent directory's path that is levels up from the current directory.
         *
         * @link http://php.net/manual/en/function.dirname.php
         *
         * @param $path
         * @param int $level
         *
         * @return string
         */
        final public static function DirectoryPath($path, $level = 1)
        {
            return dirname();
        }
    }
}
