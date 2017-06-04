<?php

trait _EnumerativeArray
{
    public static function Fixed()
    {
        $args = func_get_arg(0);

        if (is_array($args))
        {
            $array = new \SplFixedArray($args[0]);

            if (isset($args[1]))
            {
                $newArgs = array_splice($args, 1);

                for ($i = 0; $i < $args[0]; $i++)
                {
                    $array[$i] = self::Fixed($newArgs);
                }
            }

            return $array;
        }

        if (is_int($args))
        {
            return new SplFixedArray($args);
        }

        throw new Exception('Data type must be either integer or array');
    }
}
