<?php

namespace Yosmy;

/**
 * @di\service()
 */
class ResolveTime
{
    /**
     * @return int
     */
    public function resolve()
    {
        return time();
    }
}
