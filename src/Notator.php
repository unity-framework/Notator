<?php

namespace Unity\Notator;

use Unity\Notator\Contracts\INotator;

/**
 * Abstract class Notator.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 *
 * @link   https://github.com/e200/
 */
abstract class Notator implements INotator
{
    /**
     * Denotes a string using `static::SEPARATOR` as separator.
     *
     * @param string $notation
     *
     * @return string[]
     */
    public function denote($notation)
    {
        return explode(static::SEPARATOR, $notation);
    }
}
