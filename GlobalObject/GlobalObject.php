<?php

final class GlobalObject
{
    private $_get = FALSE;

    final public function get($object_name)
    {
        if (isset($GLOBALS))
        {
            $object_name = trim($object_name);

            if (isset($GLOBALS[$object_name]))
            {
                $this->_get = $GLOBALS[$object_name];
            }
        }

        return $this->_get;
    }
}