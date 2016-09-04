<?php

namespace Valiknet\TogglBundle\Models;

abstract class AbstractModel
{
    /**
     * @return string
     */
    public function __toString()
    {
        return get_object_vars($this);
    }
}
