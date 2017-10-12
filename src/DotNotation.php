<?php

namespace Unity\Notator;

use Unity\Contracts\Notator\INotation;

/**
 * Class DotNotation.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
class DotNotation implements INotation
{
    /**
     * Denotes a string using dot (.) as separator.
     *
     * @param $notation
     *
     * @return string[]
     */
    public function denote($notation)
    {
        return explode('.', $notation);
    }
}
